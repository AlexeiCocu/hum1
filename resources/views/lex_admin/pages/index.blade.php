@extends('layouts.admin_layout')

@section('content')

    <!-- Welcome -->
    <div class="block block-rounded bg-gd-dusk">
        <div class="block-content bg-white-op-5">
            <div class="py-30 text-center">
                <h1 class="font-w700 text-white mb-10">Dashboard</h1>
                <h2 class="h4 font-w400 text-white-op">Welcome {{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}!</h2>
            </div>
        </div>
    </div>
    <!-- END welcome -->


    @include('lex_admin.inc.geolocation')


@endsection
