@extends('layouts.lawyer_layout')

@section('content')

    <!-- User Info -->
    <div >
        <div class="py-30">
            <div class="content content-full">

                <div class="col-10">
                    <!-- Personal -->
                    <h1 class="h3 font-w700 mb-20 text-center">
                        {{$client->first_name}} {{$client->last_name}}
                    </h1>
                </div>

                <div class="container">
                    <div class="row offset-lg-2 col-10">
                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Case Number:
                            </h2>
                        </div>
                        <div class="col-8 text-left">
                            <h2 class="h5">
                                <a class="text-primary">{{$client->case_nr}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Co Counsel Client ID Nr:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->co_counsel_client_id_nr}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Case Type:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->case_type}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Case Status:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->case_status}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Injured Party First Name:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->injured_party_f_name}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Injured Party Last Name:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->injured_party_l_name}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Client First Name:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->client_f_name}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Client Last Name:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->client_l_name}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Address:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->address}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                State:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->state}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Zip Code:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->zip_code}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Home Phone:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->home_phone}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Cell Phone:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->cell_phone}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Diagnosis:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->diagnosis}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Date of Diagnosis:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->date_of_diagnosis}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Tentative sol:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->tentative_sol}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Treating Doctor:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->treating_doctor}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Diagnosing Hospital:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->diagnosing_hospital}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Date of Death:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->date_of_death}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Cause of Death:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->cause_of_death}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Next of Kin:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->next_of_kin}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Relation of the Client to the Deceased:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->rel_of_the_client_to_the_deceased}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Date Married:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->date_married}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Exposure History Notes:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->exposure_history_notes}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Call Notes:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->call_notes}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Co Counsel Notes:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->co_counsel_notes}}</a>
                            </h2>
                        </div>

                        <div class="col-4 text-left">
                            <h2 class="h5">
                                Referred to:
                            </h2>
                        </div>
                        <div class="col-6 text-left">
                            <h2 class="h5">
                                <a class="text-primary" href="javascript:void(0)">{{$client->referred_to}}</a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-10 text-center">
                    <a class="btn btn-rounded btn-hero btn-sm btn-alt-primary mb-5 px-20" href="{{route('lawyer-clients.edit', $client->id)}}">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- END User Info -->



@endsection
