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



    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700"]  }});</script>
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

    <link href="{{asset('images/icons/logo.png')}}" rel="shortcut icon" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/icons/icon-192x192.png')}}">
    <meta name="apple-mobile-web-app-status-bar" content="red">

    <meta name="theme-color" content="red">
    <link rel="manifest" href="{{asset('manifest.json')}}">


    <!-- Calendly link widget begin -->
    <link href="https://calendly.com/assets/external/widget.css" rel="stylesheet">
    <script defer src="https://calendly.com/assets/external/widget.js" type="text/javascript"></script>
    <!-- Calendly link widget end -->


    <!--  css -->
    <link rel="stylesheet" href="{{asset('lex_client3/css/main.css')}}">
    <!--  end css -->

</head>


<body class="body">



    <section class="page">

        <div class="header">

            <a class="a_footer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  href="{{ route('logout') }}">
                <div class="text-block-23 ">Log Out</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>


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
                    <img src="{{asset('images/icons/icon_status.svg')}}"  alt="icon status" class="icon_case_status">
                    <div class="div-block-15">
                        <div class="">Settlements Demands Completed</div>
                        <div class="text_small_underline">Last Update: {{\Carbon\Carbon::parse($client->updated_at)->isoFormat('MMMM Do YYYY')}}</div>
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



        <footer class="footer">


            <a href="#." class="a_footer" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->call_url ?? 'call_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;">

                <div class="svg_container" >
                    <svg class="svg_fill phone_icon"
                         x="0px"
                         y="0px"
                         viewBox="0 0 202.592 202.592"
                         style=""
                         xml:space="preserve">

                    <g>
                        <path d="M198.048,160.105l-31.286-31.29c-6.231-6.206-16.552-6.016-23.001,0.433l-15.761,15.761
                            c-0.995-0.551-2.026-1.124-3.11-1.732c-9.953-5.515-23.577-13.074-37.914-27.421C72.599,101.48,65.03,87.834,59.5,77.874
                            c-0.587-1.056-1.145-2.072-1.696-3.038l10.579-10.565l5.2-5.207c6.46-6.46,6.639-16.778,0.419-23.001L42.715,4.769
                            c-6.216-6.216-16.541-6.027-23.001,0.433l-8.818,8.868l0.243,0.24c-2.956,3.772-5.429,8.124-7.265,12.816
                            c-1.696,4.466-2.752,8.729-3.235,12.998c-4.13,34.25,11.52,65.55,53.994,108.028c58.711,58.707,106.027,54.273,108.067,54.055
                            c4.449-0.53,8.707-1.593,13.038-3.275c4.652-1.818,9.001-4.284,12.769-7.233l0.193,0.168l8.933-8.747
                            C204.079,176.661,204.265,166.343,198.048,160.105z M190.683,176.164l-3.937,3.93l-1.568,1.507
                            c-2.469,2.387-6.743,5.74-12.984,8.181c-3.543,1.364-7.036,2.24-10.59,2.663c-0.447,0.043-44.95,3.84-100.029-51.235
                            C14.743,94.38,7.238,67.395,10.384,41.259c0.394-3.464,1.263-6.95,2.652-10.593c2.462-6.277,5.812-10.547,8.181-13.02l5.443-5.497
                            c2.623-2.63,6.714-2.831,9.112-0.433l31.286,31.286c2.394,2.401,2.205,6.492-0.422,9.13L45.507,73.24l1.95,3.282
                            c1.084,1.829,2.23,3.879,3.454,6.106c5.812,10.482,13.764,24.83,29.121,40.173c15.317,15.325,29.644,23.27,40.094,29.067
                            c2.258,1.249,4.32,2.398,6.17,3.5l3.289,1.95l21.115-21.122c2.634-2.623,6.739-2.817,9.137-0.426l31.272,31.279
                            C193.5,169.446,193.31,173.537,190.683,176.164z"/>
                    </g>
                </svg>
                </div>
                <div class="text_small">Call</div>
            </a>
            <a href="#." class="a_footer" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->video_url ?? 'video_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;">

                <div class="svg_container">
                    <svg class="svg_fill zoom_icon"
                         width="38"
                         height="23"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 -2.93 32.537 32.537"
                         fill="#000000">
                        <g>
                            <path stroke="null"
                                  d="m13,-10.18907zm-11.96484,11.40682c-0.573,0 -1.03516,0.42585 -1.03516,0.95057l0,14.93803c0,2.77091 2.47844,5.02391 5.52344,5.02391l22.4414,0c0.573,0 1.03516,-0.42585 1.03516,-0.95057l0,-3.70202l7.46484,4.50406c0.163,0.09886 0.34816,0.14853 0.53516,0.14853c0.166,0 0.33047,-0.03807 0.48047,-0.11697c0.321,-0.16635 0.51953,-0.48664 0.51953,-0.8336l0,-19.01137c0,-0.34696 -0.19758,-0.66635 -0.51758,-0.83175c-0.32,-0.1673 -0.70958,-0.15566 -1.01758,0.02971l-7.48437,4.51892c-0.20263,-2.6043 -2.59128,-4.66744 -5.50391,-4.66744l-22.4414,0zm1.03515,1.90114l21.40625,0c1.903,0 3.45117,1.40034 3.45117,3.12277l0,13.98746l-21.40429,0c-1.903,0 -3.45313,-1.40034 -3.45313,-3.12277l0,-13.98746zm33.92969,0.77791l0,15.55442l-7,-4.22557l0,-7.10328l7,-4.22557z"
                                  id="svg_1"/>
                        </g>

                    </svg>
                </div>

                <div class="text_small">Video Call</div>
            </a>
            <a href="#." class="a_footer" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/{{$lawyer->deposition_url ?? 'deposition_url'}}?hide_landing_page_details=1&hide_gdpr_banner=1&background_color=f7f7f7&text_color=4f4f4f&primary_color=000000'});return false;">
                <div class="svg_container">
                    <svg class="svg_fill zoom_icon"
                         width="10"
                         height="23"
                         viewBox="0 -2.93 32.537 32.537"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="#000000">
                        <g>
                            <title>Layer 1</title>
                            <path stroke-width="0"
                                  id="svg_1"
                                  d="m13,-10.614zm-11.96484,11.40682c-0.573,0 -1.03516,0.42585 -1.03516,0.95057l0,14.93803c0,2.77091 2.47844,5.02391 5.52344,5.02391l22.4414,0c0.573,0 1.03516,-0.42585 1.03516,-0.95057l0,-3.70202l7.46484,4.50406c0.163,0.09886 0.34816,0.14853 0.53516,0.14853c0.166,0 0.33047,-0.03807 0.48047,-0.11697c0.321,-0.16635 0.51953,-0.48664 0.51953,-0.8336l0,-19.01137c0,-0.34696 -0.19758,-0.66635 -0.51758,-0.83175c-0.32,-0.1673 -0.70958,-0.15566 -1.01758,0.02971l-7.48437,4.51892c-0.20263,-2.6043 -2.59128,-4.66744 -5.50391,-4.66744l-22.4414,0l0,-0.00001zm1.03515,1.90114l21.40625,0c1.903,0 3.45117,1.40034 3.45117,3.12277l0,13.98746l-21.40429,0c-1.903,0 -3.45313,-1.40034 -3.45313,-3.12277l0,-13.98746zm33.92969,0.77791l0,15.55442l-7,-4.22557l0,-7.10328l7,-4.22557z"
                                  />
                        </g>

                    </svg>
                </div>
                <div class="text_small">Deposition</div>
            </a>


            <a href="{{route('client-profile.show', $client->id)}}" class="a_footer">
                <div class="svg_container">
                    <svg class="svg_fill user_icon"
                         width="32.537px"
                         height="32.537px"
                         viewBox="0 -2.93 32.537 32.537"
                         xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(-481.391 -197.473)">
                            <path d="M512.928,224.152a.991.991,0,0,1-.676-.264,21.817,21.817,0,0,0-29.2-.349,1,1,0,1,1-1.322-1.5,23.814,23.814,0,0,1,31.875.377,1,1,0,0,1-.677,1.736Z"/>
                            <path d="M498.191,199.473a7.949,7.949,0,1,1-7.949,7.95,7.959,7.959,0,0,1,7.949-7.95m0-2a9.949,9.949,0,1,0,9.95,9.95,9.949,9.949,0,0,0-9.95-9.95Z"/>
                        </g>
                    </svg>
                </div>

                <div class="text_small">Profile</div>
            </a>

        </footer>
    </section>







<script src="{{asset('js/serviceWorker.js')}}"></script>
</body>
</html>
