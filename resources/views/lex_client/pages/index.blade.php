<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Jun 30 2021 07:07:57 GMT+0000 (Coordinated Universal Time)  -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HummingbirdTrail</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <meta content="description" name="description">
    {{--    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">--}}
    <link rel="stylesheet" href="{{asset('lex_client2/css/main.css')}}">

{{--    <link href="{{asset('lex_client2/css/normalize.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('lex_client2/css/webflow.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{asset('lex_client2/css/ac-project-f6426e.webflow.css')}}" rel="stylesheet" type="text/css">--}}

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700"]  }});</script>
    {{--    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->--}}
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

    <link href="{{asset('images/icons/logo.png')}}" rel="shortcut icon" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/icons/icon-192x192.png')}}">
    <meta name="apple-mobile-web-app-status-bar" content="red">

    {{--    PWA--}}


    {{--END PWA--}}
    <meta name="theme-color" content="red">
    <link rel="manifest" href="{{asset('manifest.json')}}">
{{--    @laravelPWA--}}



<!-- Calendly link widget begin -->
    <link href="https://calendly.com/assets/external/widget.css" rel="stylesheet">
    <script defer src="https://calendly.com/assets/external/widget.js" type="text/javascript"></script>
    <!-- Calendly link widget end -->




</head>
<body class="body">

<section class="main_section" style="background-image: url({{asset('images/icons/600.png')}})">
{{--    <img src="{{asset('images/icons/600.png')}}" loading="lazy" alt="logo" class="logo_bg">--}}

    <div class="grid_container">
        <div class="card1 card_box">

            <div class="head1" style="text-align: center;">Case information</div>

            <div class="card1_text_container">
                <div style="display: flex; flex-direction: column; justify-content: center">
                    <div class="text">Case Number</div>
                    <div class="text">Case Type</div>
                    <div class="text">Injury/Diagnosis</div>
                </div>

                <div style="display: flex; flex-direction: column; justify-content: center">
                    <div class="text info">{{$client->case_nr}}</div>
                    <div class="text info">{{$client->case_type}}</div>
                    <div class="text info">{{$client->diagnosis}}</div>
                </div>
            </div>

        </div>


        <div class="card2 card_box" style="text-align: center">
            <div class="head1">Case Status</div>
            <img src="{{asset('images/icons/icon_status.svg')}}" loading="lazy" alt="icon status" class="icon_case_status">
            <div class="div-block-15">
                <div class="head2 text_center">Settlements Demands Completed</div>
                <div class="text-block-3">Last Update: {{\Carbon\Carbon::parse($client->updated_at)->isoFormat('MMMM Do YYYY')}}</div>
            </div>
        </div>

        @isset($client->docusign_url)
            <div class="card_sign card_box sign_card">
                <div class="sign_card_text_container">
                    <div class="head1">Hi, You have documents to sign!</div>
                </div>


                <a href="{{$client->docusign_url}}" class="a_docusign">
                    <img src="{{asset('images/icons/docsign.svg')}}" loading="lazy" alt="docusign icon" class="image-2">
                    <div class="main_btn-2">
                        <div class="text-block-26">Sign Now</div>
                    </div>
                </a>
            </div>
        @endisset


        <div class="card3 card_box"  style="text-align: center; display: flex; flex-direction: column; justify-items: center">
            @if(isset($lawyer->avatar))
                <img src="{{asset('storage/avatar/'.$lawyer->avatar)}}" loading="lazy" alt="lawyer picture" class="lawyer_img">
            @else
                <img src="{{asset('images/icons/law_icon.jpg')}}"  loading="lazy" alt="lawyer picture" class="lawyer_img">
            @endif
            <div class="head2 lawyer_name">{{$lawyer->first_name ?? 'Lawyer First Name'}} {{$lawyer->last_name ?? 'Lawyer Last Name'}}</div>
            <div class="text-block-8">{{$lawyer->title ?? 'Lawyer Title'}}</div>
        </div>

        <div class="card4 card_box">
            <div class="div-block-12">
                <div class="head1">{{$lawyer->lawyer_firm_name ?? ' lawyer_firm_name'}}</div>
                <div class="text" style="margin-top: 10px">{{$lawyer->lawyer_description ?? 'lawyer_description'}}</div>
            </div>
        </div>
    </div>



</section>


<footer class="footer">

        <a href="#." class="a_footer" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->call_url ?? 'call_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;">
            <img src="{{asset('images/icons/phone.svg')}}" alt="phone icon" class="footer_icon">
            <div class="text-block-23">Call</div>
        </a>
        <a href="#." class="a_footer" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->video_url ?? 'video_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;">
            <img src="{{asset('images/icons/Zoom.svg')}}" alt="zoom btn" class="footer_icon">
            <div class="text-block-23">Video Call</div>
        </a>
        <a href="#." class="a_footer" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->deposition_url ?? 'deposition_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;">
            <img src="{{asset('images/icons/Zoom.svg')}}" alt="zoom btn" class="footer_icon">
            <div class="text-block-23">Deposition</div>
        </a>
        <a href="{{route('client-profile.show', $client->id)}}" class="a_footer">
            <img src="{{asset('images/icons/Profile.svg')}}" alt="profile icon" class="footer_icon">
            <div class="text-block-23">Profile</div>
        </a>
                <a class="a_footer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  href="{{ route('logout') }}">
                    <div class="text-block-23">Log Out</div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

</footer>



<script src="{{asset('js/serviceWorker.js')}}"></script>
</body>
</html>
