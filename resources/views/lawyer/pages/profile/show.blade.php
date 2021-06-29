@extends('layouts.lawyer_layout')

@section('content')

    <!-- User Info -->
    <div class="bg-image bg-ima ge-bottom"    >
        <div class="py-30">
            <div class="content content-full text-center">
                <!-- Avatar -->
                <div class="mb-15">
                    <a class="img-link">
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
                    <div class="text-left lawyer_profile_data_div">

                        <div class="d-flex">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Title:
                            </h2>
                            <h5 class="lawyer_data_subtitle">{{$lawyer->title}}</h5>
                        </div>

                        <div class="d-flex">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Company Name:
                            </h2>
                            <h5 class="lawyer_data_subtitle">
                                {{$lawyer->lawyer_firm_name}}
                            </h5>
                        </div>

                        <div class="d-flex">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Phone:
                            </h2>
                            <h5 class="lawyer_data_subtitle">{{$lawyer->phone}}</h5>
                        </div>

                        <div class="d-flex">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Call URl:
                            </h2>
                            <h5 class="lawyer_data_subtitle">{{$lawyer->call_url}}</h5>
                        </div>

                        <div class="d-flex">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Video URl:
                            </h2>
                            <h5 class="lawyer_data_subtitle">{{$lawyer->video_url}}</h5>
                        </div>

                        <div class="d-flex">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Deposition URl:
                            </h2>
                            <h5 class="lawyer_data_subtitle">{{$lawyer->deposition_url}}</h5>
                        </div>

                        <div class="d-flex ">
                            <h2 class="h5 text-dark-op mr-3 lawyer_data_title">
                                Description:
                            </h2>
                            <h5 class="lawyer_data_subtitle">{{$lawyer->lawyer_description}}</h5>
                        </div>
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
