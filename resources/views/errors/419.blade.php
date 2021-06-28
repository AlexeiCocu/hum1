

    <!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Jun 17 2021 09:47:31 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="60c3bda4bac0d1845e18908a" data-wf-site="60c3a5d304798b7da774cbd0">
<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <meta content="Log in" property="og:title">
    <meta content="Log in" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{asset('lex_client/css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('lex_client/css/webflow.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('lex_client/css/ac-project-f6426e.webflow.css')}}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{asset('lex_client/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <link href="{{asset('lex_client/images/webclip.png')}}" rel="apple-touch-icon">
</head>
<body class="body">
<div class="div-block-22"><img src="https://uploads-ssl.webflow.com/60c26754a1b3e16795377be0/60c39a154c15516124bf8d8b_login_logo.svg" loading="lazy" alt="">
    <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Email" id="name" required="">
            <input type="password" class="text-field w-input" maxlength="256" name="password" data-name="Password" placeholder="Password" id="password" required="" autocomplete="current-password">
            <input type="submit" value="Log In" class="submit-button w-button">


        </form>

    </div>
    @if($errors->any())
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="aler alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60c3a5d304798b7da774cbd0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('lex_client/js/webflow.js')}}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
