<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Jun 30 2021 07:07:57 GMT+0000 (Coordinated Universal Time)  -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-page="60c3a5d304798b36f774cbd1" data-wf-site="60c3a5d304798b7da774cbd0">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HummingbirdTrail</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <meta content="description" name="description">
{{--    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">--}}
    <link href="{{asset('lex_client/css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('lex_client/css/webflow.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('lex_client/css/ac-project-f6426e.webflow.css')}}" rel="stylesheet" type="text/css">
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
    <script src="https://calendly.com/assets/external/widget.js" type="text/javascript"></script>
    <!-- Calendly link widget end -->

</head>
<body class="body">
<a class="skip-link" href="#maincontent" style="display: none">Skip to main</a>
<header class="section-7"><img src="{{asset('images/icons/600.png')}}" loading="lazy" alt="logo" class="image-14"></header>
<div id="maincontent" class="section">
    <div class="main_container w-container">
        <div class="w-layout-grid grid-3">
            <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93a1-f774cbd1" class="grid_div-2">
                <div class="w-layout-grid grid_in_div1-2">
                    <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93a3-f774cbd1" class="div-block-3">
                        <div class="head1">Case information</div>
                    </div>
                    <div class="div-block-3">
                        <div class="div-block-11">
                            <div class="text-block-7">Case Number</div>
                            <div class="text-block-7">Case Type</div>
                            <div class="text-block-7">Injury/Diagnosis</div>
                        </div>
                    </div>
                    <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93ae-f774cbd1" class="div-block-3">
                        <div class="div-block-34">
                            <div class="head-2 info_blocl">{{$client->case_nr}}</div>
                            <div class="head-2 info_blocl">{{$client->case_type}}</div>
                            <div class="head-2 info_blocl">{{$client->diagnosis}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93b9-f774cbd1" class="grid_div-2">
                <div class="div-block-14">
                    <div class="head1">Case Status</div><img src="{{asset('images/icons/icon_status.svg')}}" loading="lazy" alt="icon status" class="image-4">
                    <div class="div-block-15">
                        <div class="head-2 center_text">Settlements Demands Completed</div>
                        <div class="text-block-3">Last Update: {{\Carbon\Carbon::parse($client->updated_at)->isoFormat('MMMM Do YYYY')}}</div>
                    </div>
                </div>
            </div>
            @isset($client->docusign_url)
            <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93c3-f774cbd1" class="grid_div-2 cta_div">
                <div class="div-block-8">
                    <div class="div-block-9">
                        <div class="head-2 cta_title">Hi, You have documents to sign!</div>
                        <div class="text-block-22">Our team has a variety of experience and background. We speak Spanish, German, Polish, Russian, and several other languages. We have life experience relevant to your case, including military service, union construction work, and asbestos abatement training.</div>
                    </div>
                    <a href="{{$client->docusign_url}}" class="div-block-10 w-inline-block"><img src="{{asset('images/icons/docsign.svg')}}" loading="lazy" alt="docusign icon" class="image-2">
                        <div class="main_btn-2">
                            <div class="text-block-26">Sign Now</div>
                        </div>
                    </a>
                </div>
            </div>
            @endisset
            <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93ce-f774cbd1" class="grid_div-2">
                <div class="div-block-16">
                    @if(isset($lawyer->avatar))
                    <img src="{{asset('storage/avatar/'.$lawyer->avatar)}}" style="border-radius: 50%" loading="lazy" alt="lawyer picture" class="image-3">
                    @else
                        <img src="{{asset('images/icons/law_icon.jpg')}}" style="border-radius: 50%" loading="lazy" alt="lawyer picture" class="image-3">
                    @endif
                    <div class="head-2 lawyer_name">{{$lawyer->first_name ?? 'Lawyer First Name'}} {{$lawyer->last_name ?? 'Lawyer Last Name'}}</div>
                    <div class="text-block-8">{{$lawyer->title ?? 'Lawyer Title'}}</div>
                </div>
            </div>
            <div id="w-node-_8060012d-cdcd-8298-5f9d-b277b72e93d5-f774cbd1" class="grid_div-2">
                <div class="div-block-12">
                    <div class="text-block-21">{{$lawyer->lawyer_firm_name ?? ' lawyer_firm_name'}}</div>
                    <div class="text-block-22">{{$lawyer->lawyer_description ?? 'lawyer_description'}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="footer">
    <div class="container-9 w-container">
        <a href="#." class="div-block-67 w-inline-block" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->call_url ?? 'call_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;"><img src="{{asset('images/icons/phone.svg')}}" loading="lazy" alt="phone icon" class="image-12">
            <div class="text-block-23">Call</div>
        </a>
        <a href="#." class="div-block-67 w-inline-block" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->video_url ?? 'video_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;"><img src="{{asset('images/icons/Zoom.svg')}}" loading="lazy" alt="zoom btn" class="image-13">
            <div class="text-block-23">Video Call</div>
        </a>
        <a href="#." class="div-block-67 w-inline-block" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->deposition_url ?? 'deposition_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;"><img src="{{asset('images/icons/Zoom.svg')}}" loading="lazy" alt="zoom btn" class="image-13">
            <div class="text-block-23">Deposition</div>
        </a>
        <a href="{{route('client-profile.show', $client->id)}}" class="div-block-67 w-inline-block"><img src="{{asset('images/icons/Profile.svg')}}" loading="lazy" alt="profile icon" class="image-13">
            <div class="text-block-23">Profile</div>
        </a>
{{--        <a class="div-block-67 w-inline-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  href="{{ route('logout') }}">--}}
{{--            <div class="text-block-23">Log Out</div>--}}
{{--        </a>--}}
{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--            @csrf--}}
{{--        </form>--}}
    </div>
</footer>
{{--<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60c3a5d304798b7da774cbd0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>--}}
{{--<script src="{{asset('lex_client/js/webflow.js')}}" type="text/javascript"></script>--}}
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script src="{{asset('js/serviceWorker.js')}}"></script>
</body>
</html>
