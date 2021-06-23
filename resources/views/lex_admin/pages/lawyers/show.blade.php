@extends('layouts.admin_layout')

@section('content')

    <!-- User Info -->
    <div class="bg-image bg-image-bottom"
         style="background-image: url({{asset('lex_admin/assets/media/photos/photo13@2x.jpg')}});"
    >
        <div class="bg-primary-dark-op py-30">
            <div class="content content-full text-center">
                <!-- Avatar -->
                <div class="mb-15">
                    <a class="img-link" href="#.">
                        @if($lawyer->avatar)
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('storage/avatar/'.$lawyer->avatar)}}" alt="user avatar">
                        @else
                        <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('lex_admin/assets/media/avatars/avatar15.jpg')}}" alt="user avatar">
                        @endif
                    </a>
                </div>
                <!-- END Avatar -->

                <!-- Personal -->
                <h1 class="h3 text-white font-w700 mb-1">
                    {{$lawyer->first_name}} {{$lawyer->last_name}}
                </h1>

                <div style="display: flex; justify-content: center; margin-bottom: 50px">

                    <div class="text-left">
                        <h2 class="h5 text-white-op">
                            Title:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->title}}</a>
                        </h2>
                        <h2 class="h5 text-white-op">
                            Company Name:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->lawyer_firm_name}}</a>
                        </h2>
                        <h2 class="h5 text-white-op">
                            Phone:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->phone}}</a>
                        </h2>
                        <h2 class="h5 text-white-op">
                            Call URl:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->call_url}}</a>
                        </h2>
                        <h2 class="h5 text-white-op">
                            Video URl:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->video_url}}</a>
                        </h2>
                        <h2 class="h5 text-white-op">
                            Deposition URl:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->deposition_url}}</a>
                        </h2>
                        <h2 class="h5 text-white-op">
                            Calendar URl:  <a class="text-primary-light" href="javascript:void(0)">{{$lawyer->calendar_url}}</a>
                        </h2>
                    </div>

                </div>


                <a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5 px-20" href="{{route('admin-lawyers.edit', $lawyer->id)}}">
                    <i class="fa fa-pencil"></i> Edit
                </a>

            </div>
        </div>
    </div>
    <!-- END User Info -->



@endsection
