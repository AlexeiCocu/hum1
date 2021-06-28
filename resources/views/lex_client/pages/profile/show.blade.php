<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Jun 17 2021 09:47:31 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="60c46315c1d9680cfa7e31bc" data-wf-site="60c3a5d304798b7da774cbd0">
<head>
    <meta charset="utf-8">
    <title>Humingbirdtrail | Profile</title>
    <meta content="Case information page" property="og:title">
    <meta content="Case information page" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{asset('lex_client/css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('lex_client/css/webflow.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('lex_client/css/ac-project-f6426e.webflow.css')}}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link rel="shortcut icon" href="{{asset('lex_admin/assets/media/favicons/favicon.png')}}" type="image/x-icon">
    <link href="{{asset('lex_admin/assets/media/favicons/favicon.png')}}" rel="apple-touch-icon">
</head>
<body class="body">
<div class="secont-header">
    <div class="container w-container">
        <a href="{{route('user-index')}}" class="div-block-23 w-inline-block"><img src="{{asset('lex_client/images/arrow_left.svg')}}" loading="lazy" alt="" class="image-8">
            <div class="text-block-11">Back</div>
        </a>
        <div class="div-block-24">
            <div class="my_title1">Case Information</div>
        </div>
    </div>
</div>
<div class="profile_info">
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Case Number</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->case_nr}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Case Type</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->case_type}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Case Status</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->case_status}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Injured Party</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->injured_party_f_name}} {{$client->injured_party_l_name}}</div>
            </div>
        </div>
    </div>

    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Injury/Diagnosis</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->diagnosis}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Date of diagnosis</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->date_of_diagnosis}}</div>
            </div>
        </div>
    </div>

    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Address</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->address}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">State</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->state}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Zip Code</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->zip_code}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Home Phone</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->home_phone}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Cell Phone</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->cell_phone}}</div>
            </div>
        </div>
    </div>
    <div class="div-block-69">
        <div class="div-block-70">
            <div class="div-block-72 case_label_left">
                <div class="text-block-24">Email</div>
            </div>
        </div>
        <div class="div-block-70">
            <div class="div-block-72 case_label_right">
                <div class="text-block-24">{{$client->email}}</div>
            </div>
        </div>
    </div>

</div>
<div class="section-4">
    <div class="container-3 w-container">
        <a href="{{route('client-profile.edit', $client->id)}}" class="div-block-32 w-inline-block" style="max-width: 100px">
            <div class="text-block-12">Edit Info</div>
        </a>
{{--        <div class="div-block-33"><img src="{{asset('lex_client/images/i_icon.svg')}}" loading="lazy" alt="" class="image-10">--}}

{{--        </div>--}}
    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60c3a5d304798b7da774cbd0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('lex_client/js/webflow.js')}}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
