@extends('layouts.lawyer_layout')

@section('content')

    <!-- User Info -->
    <div >
        <div class="py-30 bg-imag e">
            <div class="content content-full">

                <div class="col-12">
                    <!-- Personal -->
                    <h1 class="h3 font-w700 mb-20 text-center">
                        {{$client->first_name}} {{$client->last_name}}
                    </h1>
                </div>

                <div class="container">
                    <div class="row offset-lg-2 col-lg-10">

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Case Number:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary">{{$client->case_nr}}</a>
                            </h5>
                        </div>


                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Co Counsel Client ID Nr:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary">{{$client->co_counsel_client_id_nr}}</a>
                            </h5>
                        </div>



                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Case Type:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->case_type}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Case Status:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->case_status}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Injured Party First Name:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->injured_party_f_name}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Injured Party Last Name:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary">{{$client->injured_party_l_name}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Client First Name:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->client_f_name}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Client Last Name:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->client_l_name}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Address:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->address}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                State:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->state}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Zip Code:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->zip_code}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Home Phone:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->home_phone}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Cell Phone:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary">{{$client->cell_phone}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Diagnosis:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->diagnosis}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Date of Diagnosis:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->date_of_diagnosis}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Tentative sol:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->tentative_sol}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Treating Doctor:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->treating_doctor}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Diagnosing Hospital:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->diagnosing_hospital}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Date of Death:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->date_of_death}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Cause of Death:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->cause_of_death}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Next of Kin:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->next_of_kin}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Relation of the Client to the Deceased:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->rel_of_the_client_to_the_deceased}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Date Married:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary">{{$client->date_married}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Exposure History Notes:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->exposure_history_notes}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Call Notes:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->call_notes}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Co Counsel Notes:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->co_counsel_notes}}</a>
                            </h5>
                        </div>

                        <div class="col-4 text-left show_field">
                            <h5 class="text_title">
                                Referred to:
                            </h5>
                        </div>
                        <div class="col-sm-7 col-lg-6 text-left show_field">
                            <h5 class="text_title">
                                <a class="text-primary" >{{$client->referred_to}}</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <a class="btn btn-rounded btn-hero btn-sm btn-alt-primary mb-5 px-20" href="{{route('lawyer-clients.edit', $client->id)}}">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- END User Info -->



@endsection


