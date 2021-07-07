@extends('layouts.lawyer_layout')

@section('content')

    <!-- Material Design -->
{{--    <h2 class="content-heading">Create Lawyer</h2>--}}
    <div class="row justify-content-center">


        <div class="col-8">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Create new Client</h3>
                    <div class="block-options">
{{--                        <button type="button" class="btn-block-option">--}}
{{--                            <i class="si si-wrench"></i>--}}
{{--                        </button>--}}
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{route('lawyer-clients.store')}}" method="post" >
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-text2" name="first_name">
                                    <label for="material-text2">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="last_name" name="last_name">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="email" class="form-control" id="material-email2" name="email">
                                    <label for="material-email2">Email</label>
                                </div>
                            </div>
                        </div>

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-material floating">--}}
{{--                                    <input type="password" class="form-control" id="material-password2" name="password">--}}
{{--                                    <label for="material-password2">Password</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">Create</button>
                            </div>
                        </div>
                    </form>
                    @if($errors->any())
                        <div class="alert alert-danger">{{$errors->first()}}</div>
                    @endif
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
    </div>
    <!-- END Material Design -->

@endsection
