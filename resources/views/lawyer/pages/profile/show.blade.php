@extends('layouts.lawyer_layout')

@section('content')

    <!-- User Info -->
    <div class="bg-image bg-ima ge-bottom"    >
        <div class="py-30">
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
                <h1 class="h3 text-dark font-w700 mb-1">
                    {{$lawyer->first_name}} {{$lawyer->last_name}}
                </h1>

                <div style="display: flex; justify-content: center; margin-bottom: 50px">

                    <div class="text-left">
                        <h2 class="h5 text-dark-op">
                            Title:  <a class="text-primary-light">{{$lawyer->title}}</a>
                        </h2>
                        <h2 class="h5 text-dark-op">
                            Company Name:  <a class="text-primary-light">{{$lawyer->lawyer_firm_name}}</a>
                        </h2>
                        <h2 class="h5 text-dark-op">
                            Phone:  <a class="text-primary-light">{{$lawyer->phone}}</a>
                        </h2>
                        <h2 class="h5 text-dark-op">
                            Call URl:  <a class="text-primary-light" >{{$lawyer->call_url}}</a>
                        </h2>
                        <h2 class="h5 text-dark-op">
                            Video URl:  <a class="text-primary-light" >{{$lawyer->video_url}}</a>
                        </h2>
                        <h2 class="h5 text-dark-op">
                            Deposition URl:  <a class="text-primary-light">{{$lawyer->deposition_url}}</a>
                        </h2>
                        <h2 class="h5 text-dark-op">
                            Description:  <a class="text-primary-light" >{{$lawyer->lawyer_description}}</a>
                        </h2>
                    </div>
                </div>

                <a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5 px-20" href="{{route('lawyer-profile.edit', $lawyer->id)}}">
                    <i class="fa fa-pencil"></i> Edit
                </a>

            </div>
        </div>
    </div>
    <!-- END User Info -->

@endsection
