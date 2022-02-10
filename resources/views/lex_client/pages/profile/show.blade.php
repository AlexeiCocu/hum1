<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Jun 17 2021 09:47:31 GMT+0000 (Coordinated Universal Time)  -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>HummingbirdTrail | Profile</title>
    <meta content="Case information page" property="og:title">
    <meta content="Case information page" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">

    <link rel="stylesheet" href="{{asset('lex_client2/css/show_page.css')}}">

{{--    <link href="{{asset('lex_client/css/normalize.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('lex_client/css/webflow.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('lex_client/css/ac-project-f6426e.webflow.css')}}" rel="stylesheet" type="text/css">--}}

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>


    <link rel="shortcut icon" href="{{asset('lex_admin/assets/media/favicons/favicon.png')}}" type="image/x-icon">
    <link href="{{asset('lex_admin/assets/media/favicons/favicon.png')}}" rel="apple-touch-icon">

{{--    @laravelPWA--}}

    {{--END PWA--}}
    <meta name="theme-color" content="red">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    {{--    @laravelPWA--}}

</head>


<body class="body" >


<section class="main_section" style="background-image: url({{asset('images/icons/600.png')}})">

    <div class="card_box">
        <div class="page_title">
            Case Information
        </div>

        <div class="info_row">
            <div class="div-block-70">Case Number</div>
            <div class="div-block-70">{{$client->case_nr}}</div>
        </div>

        <div class="info_row">
            <div class="div-block-70">Case Type</div>
            <div class="div-block-70">{{$client->case_type}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Case Status</div>
            <div class="div-block-70">{{$client->case_status}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Injured Party</div>
            <div class="div-block-70">{{$client->injured_party_f_name}} {{$client->injured_party_l_name}}</div>
        </div>

        <div class="info_row">
            <div class="div-block-70">Injury/Diagnosis</div>
            <div class="div-block-70">{{$client->diagnosis}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Date of diagnosis</div>
            <div class="div-block-70">{{$client->date_of_diagnosis}}</div>
        </div>

        <div class="info_row">
            <div class="div-block-70">Address</div>
            <div class="div-block-70">{{$client->address}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">State</div>
            <div class="div-block-70">{{$client->state}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Zip Code</div>
            <div class="div-block-70">{{$client->zip_code}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Home Phone</div>
            <div class="div-block-70">{{$client->home_phone}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Cell Phone</div>
            <div class="div-block-70">{{$client->cell_phone}}</div>
        </div>
        <div class="info_row">
            <div class="div-block-70">Email</div>
            <div class="div-block-70">{{$client->email}}</div>
        </div>
    </div>

</section>

<footer class="footer">
    <div class="arrow_left_btn" style="width: 100%; text-align: left">
        <a href="{{route('user-index')}}" class="a_show_btn_back">
            <svg width="13" height="21" viewBox="0 0 13 21" xmlns="http://www.w3.org/2000/svg" class="arrow_left">
                <path d="M10.5977 20.5352C10.8555 20.793 11.1836 20.9336 11.5703 20.9336C12.3438 20.9336 12.9648 20.3242 12.9648 19.5508C12.9648 19.1641 12.8008 18.8125 12.5312 18.543L4.32812 10.5273L12.5312 2.53516C12.8008 2.26562 12.9648 1.90234 12.9648 1.52734C12.9648 0.753906 12.3438 0.144531 11.5703 0.144531C11.1836 0.144531 10.8555 0.285156 10.5977 0.542969L1.48047 9.44922C1.15234 9.75391 1 10.1289 0.988281 10.5391C0.988281 10.9492 1.15234 11.3008 1.48047 11.6172L10.5977 20.5352Z"/>
            </svg>
            <div>Back</div>
        </a>
    </div>

    <div class="edit_btn" style="width: 100%; display: flex; justify-content: right">
        <a href="{{route('client-profile.edit', $client->id)}}" class="a_show_edit">
            <div>Edit Info</div>
            <svg class="edit_icon"
                 id="Capa_1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px"
                 y="0px"
                 width="50.936px"
                 height="50.936px"
                 viewBox="0 0 494.936 494.936"
                 xml:space="preserve">

	<g>
        <path d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
			c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
			s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
			c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z"/>
        <path d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
			c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
			c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
			C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
			l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
			c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z"/>
    </g>

</svg>
        </a>
    </div>
</footer>

<script>

    const rows = document.querySelectorAll('.info_row');

    const removeRowBackground = () => {
        rows.forEach(item => item.classList.remove('mention_row'))
    }

  rows.forEach(item => item.addEventListener('click', function (e) {

      if(e.target.classList.contains("div-block-70") || e.target.classList.contains("info_row")){
          removeRowBackground();
          item.classList.add('mention_row');
      }

  }));

    document.querySelector('.body').addEventListener('click', function (e) {

        console.log(e.target)

        if(e.target.classList.contains("body") ||
            e.target.classList.contains("card_box") ||
            e.target.classList.contains("footer") ||
            e.target.classList.contains("arrow_left_btn") ||
            e.target.classList.contains("edit_btn")){
            removeRowBackground();
        }
    })


    // change arrow icon color on click
    const arrow_left_btn = document.querySelector('.arrow_left_btn');
    arrow_left_btn.addEventListener('click', function () {
        document.querySelector('.arrow_left').style.fill = '#e7152a';

        setTimeout(()=>{
            document.querySelector('.arrow_left').style.fill = '#424242';
        }, 1000)
    })


    // change edit icon color on click
    const edit_btn = document.querySelector('.edit_btn');
    edit_btn.addEventListener('click', function () {
        document.querySelector('.edit_icon').style.fill = '#e7152a';
        setTimeout(()=>{
            document.querySelector('.edit_icon').style.fill = '#424242';
        }, 1000)
    })


</script>


<script src="{{asset('js/serviceWorker.js')}}"></script>
</body>
</html>
