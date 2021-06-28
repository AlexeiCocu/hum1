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
                                    <input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Enter your phone.." value="{{$lawyer->phone}}">
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
                                    <label for="call_url">Call URl</label>
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
