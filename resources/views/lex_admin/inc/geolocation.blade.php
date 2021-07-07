<?php


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "geo";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die('Could not connect to MySQL: ' . mysqli_connect_error());

//code to see your IP address
//$_SERVER['REMOTE_ADDR'];

//set APi address and API key
//$ip   = '98.34.81.0';
    $ip = $_SERVER['REMOTE_ADDR'];
$access_key = '677bcb6f515a03d1e05844f2dc227178';

//initialize CURL
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//store the data
$json = curl_exec($ch);
curl_close($ch);

//decode json response
$api_result = json_decode($json, true);

//include_once 'includes/dbh.php';

$lat = $api_result['latitude'];
$long = $api_result['longitude'];
$state = $api_result['region_name'];

$sql = "SELECT *, (((acos(sin((".$lat."*pi()/180)) * sin((`latitude`*pi()/180)) + cos((".$lat."*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((".$long."- `longitude`)*pi()/180)))) * 180/pi()) * 60 * 1.1515) as distance FROM cancer_centers WHERE state=? ORDER BY distance ASC ;";

//Create a prepared statement
$stmt = mysqli_stmt_init($conn);


//Prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "You are not located in USA or You didn't allow this site to use Your location";
} else {
    //Bind parameters to the placeholder
    mysqli_stmt_bind_param($stmt, "s", $state);
    //Run parameters inside database
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    ?>

    <div style="width: 500px; height: 300px; border: 2px solid red">
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php  while ($row = mysqli_fetch_assoc($result)){ ?>

                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>

            <?php } ?>

        </table>
    </div>


<h1>Your IP: <?php echo $ip; ?></h1>


<?php } ?>



