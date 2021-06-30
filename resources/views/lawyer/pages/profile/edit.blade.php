@extends('layouts.lawyer_layout')

@section('content')




        <!-- User Profile -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-user-circle mr-5 text-muted"></i>Profile
                </h3>
{{--                <form action="{{route('admin-lawyers.destroy', $lawyer->id)}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-danger">--}}
{{--                        Delete--}}
{{--                    </button>--}}
{{--                </form>--}}
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-profile.update', $lawyer->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-username">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="profile-settings-username" name="first_name" placeholder="Enter your First Name.." value="{{$lawyer->first_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-name">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="profile-settings-name" name="last_name" placeholder="Enter your Last Name.." value="{{$lawyer->last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Email Address</label>
                                    <input type="email" class="form-control form-control-lg" id="profile-settings-email" name="profile-settings-email" placeholder="Enter your email.." value="{{$lawyer->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->


        <!-- Lawyer Profile -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-user-circle mr-5 text-muted"></i>Data
                </h3>
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-profile.update', $lawyer->id)}}" enctype="multipart/form-data" method="POST" >
                    @csrf
                    @method('PUT')

                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">

                            <div class="form-group row">
                                <div class="col-md-10 col-xl-6">
                                    <div class="push">
                                        @if($lawyer->avatar)
                                            <img class="img-avatar" src="{{asset('storage/avatar/'.$lawyer->avatar)}}" alt="user avatar">
                                        @else
                                            <img class="img-avatar" src="{{asset('lex_admin/assets/media/avatars/avatar15.jpg')}}" alt="user avatar">
                                        @endif
                                    </div>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" id="avatar" name="avatar" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="avatar">Choose new profile picture</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Enter your Title" value="{{$lawyer->title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="Enter your phone.." value="{{$lawyer->phone}}" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Law Firm Name</label>
                                    <input type="text" class="form-control form-control-lg" id="profile-settings-email" name="lawyer_firm_name" placeholder="Enter company name.." value="{{$lawyer->lawyer_firm_name}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="call_url">Call URL</label>
                                    <input type="text" class="form-control form-control-lg" id="call_url" name="call_url" placeholder="Enter call URL.." value="{{$lawyer->call_url}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="video_url">Video URL</label>
                                    <input type="text" class="form-control form-control-lg" id="video_url" name="video_url" placeholder="Enter video URL.." value="{{$lawyer->video_url}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="deposition_url">Deposition URL</label>
                                    <input type="text" class="form-control form-control-lg" id="deposition_url" name="deposition_url" placeholder="Enter your deposition URL.." value="{{$lawyer->deposition_url}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="lawyer_description">Description</label>
                                    <textarea type="text" class="form-control form-control-lg" id="lawyer_description" name="lawyer_description" placeholder="Description">{{$lawyer->lawyer_description}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Lawyer Profile -->
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


        <!-- Change Password -->


        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-asterisk mr-5 text-muted"></i> Change Password
                </h3>
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-profile.update', $lawyer->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="current_password">Current Password</label>
                                    <input type="password" class="form-control form-control-lg" id="current_password" name="current_password" value="{{$lawyer->password}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control form-control-lg" id="new_password" name="new_password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="password_confirmation">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-alt-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Change Password -->

@endsection



@push('script')

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

@endpush
