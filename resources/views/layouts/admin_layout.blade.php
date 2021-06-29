<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">

    <title>7lex Admin</title>



    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('lex_admin/assets/media/favicons/favicon.png')}}">
{{--    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('lex_admin/assets/media/favicons/logo.svg')}}">--}}
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('lex_admin/assets/media/favicons/logo.svg')}}">--}}
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('lex_admin/assets/css/codebase.min.css')}}">
    <link rel="stylesheet" href="{{asset('lex_admin/assets/css/my_style.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>


<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

    <!-- Side Overlay-->
{{--    @include('admin.inc.side_overlay')--}}
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    @include('lex_admin.inc.sidebar')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('lex_admin.inc.header')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">

            @yield('content')

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
{{--    <footer id="page-footer" class="opacity-0">--}}
{{--        <div class="content py-20 font-size-sm clearfix">--}}
{{--            <div class="float-right">--}}
{{--                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>--}}
{{--            </div>--}}
{{--            <div class="float-left">--}}
{{--                <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.4</a> &copy; <span class="js-year-copy"></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/jquery.countTo.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="{{asset('lex_admin/assets/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('lex_admin/assets/js/codebase.app.min.js')}}"></script>

@stack('script')
</body>
</html>
