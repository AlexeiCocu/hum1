<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Jun 17 2021 09:47:31 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="60c756953ccd7e8373908200" data-wf-site="60c3a5d304798b7da774cbd0">
<head>
    <meta charset="utf-8">
    <title>Hummingbirdtrail | Edit Profile</title>
    <meta content="Edit_client" property="og:title">
    <meta content="Edit_client" property="twitter:title">
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
<header id="nav" class="sticky-nav">
    <nav class="container-6 w-container">
        <a href="{{route('client-profile.show', $client->id)}}" class="div-block-23 w-inline-block"><img src="{{asset('lex_client/images/arrow_left.svg')}}" loading="lazy" alt="arrow left" class="image-8">
            <div class="text-block-11">Back</div>
        </a>
        <div class="div-block-60">
            <div class="text-block-19">Edit Case Information</div>
        </div>
    </nav>
</header>
<div class="section-8">
    <div class="form-block-3 w-form">
        <form id="wf-form-edit_client_form" name="wf-form-edit_client_form" data-name="edit_client_form" action="{{route('client-profile.update', $client->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="div-block-61">
                <div class="div-block-63"><label for="address" class="field-label">Address</label></div>
                <div class="div-block-64">
                    <input type="text" class="text-field-4 w-input" maxlength="256" name="address"  placeholder="Address" id="address" value="{{$client->address}}">
                    @error('address')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="state" class="field-label">State</label></div>
                <div class="div-block-64">
                    <input type="text" class="text-field-4 w-input" maxlength="256" name="state"  placeholder="State" id="state" value="{{$client->state}}">
                    @error('state')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="zip_code" class="field-label">Zip Code</label></div>
                <div class="div-block-64">
                    <input type="text" class="text-field-4 w-input" maxlength="256" name="zip_code"  placeholder="Zip Code" id="zip_code" value="{{$client->zip_code}}">
                    @error('zip_code')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="home_phone" class="field-label">Home Phone</label></div>
                <div class="div-block-64"><input type="text" class="text-field-4 w-input" maxlength="256" name="home_phone"  placeholder="Home Phone" id="home_phone" value="{{$client->home_phone}}">
                    @error('home_phone')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="cell_phone" class="field-label">Cell Phone</label></div>
                <div class="div-block-64"><input type="text" class="text-field-4 w-input" maxlength="256" name="cell_phone"  placeholder="Cell Phone" id="cell_phone" value="{{$client->cell_phone}}">
                    @error('cell_phone')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="email" class="field-label">Email</label></div>
                <div class="div-block-64"><input type="text" class="text-field-4 w-input" maxlength="256" name="email"  placeholder="Email" id="email" value="{{$client->email}}">
                    @error('email')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="div-block-62"><input type="submit" value="Save" data-wait="Please wait..." class="submit-button-2 w-button">
                <a href="{{route('user-index')}}" class="button w-button">Cancel</a>
            </div>
            <div class="div-block-73">
                <div class="div-block-74"><img src="{{asset('lex_client/images/i_icon.svg')}}" alt="info icon">
                    <div class="text-block-13" style="margin-left: 5px">On this page you can edit profile information</div>
                </div>
            </div>
        </form>

    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60c3a5d304798b7da774cbd0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('lex_client/js/webflow.js')}}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
