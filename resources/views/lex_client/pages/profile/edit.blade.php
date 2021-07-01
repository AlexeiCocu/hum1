<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Jun 17 2021 09:47:31 GMT+0000 (Coordinated Universal Time)  -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-page="60c756953ccd7e8373908200" data-wf-site="60c3a5d304798b7da774cbd0">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

{{--    @laravelPWA--}}
    {{--END PWA--}}
    <meta name="theme-color" content="red">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    {{--    @laravelPWA--}}

</head>
<body class="body">
<header id="nav" class="sticky-nav">
    <nav class="container-6 w-container">
        <a href="{{route('client-profile.show', $client->id)}}" class="div-block-23 w-inline-block"><img src="{{asset('lex_client/images/arrow_left.svg')}}" loading="lazy" alt="arrow left" class="image-8">
            <div class="text-block-11">Back</div>
        </a>
        <div class="div-block-60">
            <div class="text-block-19">Edit Your Data</div>
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
                <div class="div-block-63"><label for="name-8" class="field-label">State</label></div>
                <div class="div-block-64"><select id="State" name="state" data-name="State" required="" class="select-field-9 w-select">
                        <option value="{{$client->state}}">{{$client->state}}</option>
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
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
                <div class="div-block-64"><input type="tel" class="text-field-4 w-input" maxlength="256" name="home_phone"  placeholder="Home Phone" id="home_phone" value="{{$client->home_phone}}" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);">
                    @error('home_phone')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="cell_phone" class="field-label">Cell Phone</label></div>
                <div class="div-block-64"><input type="tel" class="text-field-4 w-input" maxlength="256" name="cell_phone"  placeholder="Cell Phone" id="cell_phone" value="{{$client->cell_phone}}" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);">
                    @error('cell_phone')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="div-block-61">
                <div class="div-block-63"><label for="email" class="field-label">Email</label></div>
                <div class="div-block-64"><input type="email" class="text-field-4 w-input" maxlength="256" name="email"  placeholder="Email" id="email" value="{{$client->email}}">
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

<!--   Start Phone Formatting  -->
<script language="javascript">var zChar=new Array(' ','(',')','-','.');var maxphonelength=13;var phonevalue1;var phonevalue2;var cursorposition;function ParseForNumber1(object){phonevalue1=ParseChar(object.value,zChar);}function ParseForNumber2(object){phonevalue2=ParseChar(object.value,zChar);}function backspacerUP(object,e){if(e){e=e}else{e=window.event}if(e.which){var keycode=e.which}else{var keycode=e.keyCode}ParseForNumber1(object)
        if(keycode>=48){ValidatePhone(object)}}function backspacerDOWN(object,e){if(e){e=e}else{e=window.event}if(e.which){var keycode=e.which}else{var keycode=e.keyCode}ParseForNumber2(object)}function GetCursorPosition(){var t1=phonevalue1;var t2=phonevalue2;var bool=false
        for(i=0;i<t1.length;i++){if(t1.substring(i,1)!=t2.substring(i,1)){if(!bool){cursorposition=i
            bool=true}}}}function ValidatePhone(object){var p=phonevalue1
        p=p.replace(/[^\d]*/gi,"")
        if(p.length<3){object.value=p}else if(p.length==3){pp=p;d4=p.indexOf('(')
            d5=p.indexOf(')')
            if(d4==-1){pp="("+pp;}if(d5==-1){pp=pp+")";}object.value=pp;}else if(p.length>3&&p.length<7){p="("+p;l30=p.length;p30=p.substring(0,4);p30=p30+")"
            p31=p.substring(4,l30);pp=p30+p31;object.value=pp;}else if(p.length>=7){p="("+p;l30=p.length;p30=p.substring(0,4);p30=p30+")"
            p31=p.substring(4,l30);pp=p30+p31;l40=pp.length;p40=pp.substring(0,8);p40=p40+"-"
            p41=pp.substring(8,l40);ppp=p40+p41;object.value=ppp.substring(0,maxphonelength);}GetCursorPosition()
        if(cursorposition>=0){if(cursorposition==0){cursorposition=2}else if(cursorposition<=2){cursorposition=cursorposition+1}else if(cursorposition<=5){cursorposition=cursorposition+2}else if(cursorposition==6){cursorposition=cursorposition+2}else if(cursorposition==7){cursorposition=cursorposition+4
            e1=object.value.indexOf(')')
            e2=object.value.indexOf('-')
            if(e1>-1&&e2>-1){if(e2-e1==4){cursorposition=cursorposition-1}}}else if(cursorposition<11){cursorposition=cursorposition+3}else if(cursorposition==11){cursorposition=cursorposition+1}else if(cursorposition>=12){cursorposition=cursorposition}var txtRange=object.createTextRange();txtRange.moveStart("character",cursorposition);txtRange.moveEnd("character",cursorposition-object.value.length);txtRange.select();}}function ParseChar(sStr,sChar){if(sChar.length==null){zChar=new Array(sChar);}else zChar=sChar;for(i=0;i<zChar.length;i++){sNewStr="";var iStart=0;var iEnd=sStr.indexOf(sChar[i]);while(iEnd!=-1){sNewStr+=sStr.substring(iStart,iEnd);iStart=iEnd+1;iEnd=sStr.indexOf(sChar[i],iStart);}sNewStr+=sStr.substring(sStr.lastIndexOf(sChar[i])+1,sStr.length);sStr=sNewStr;}return sNewStr;}</script>
<!--   End Phone Formatting  -->
</body>
</html>
