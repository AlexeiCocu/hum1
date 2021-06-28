@extends('layouts.lawyer_layout')

@section('content')


        <!-- User Profile -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-user-circle mr-5 text-muted"></i> Client Profile
                </h3>
                <form action="{{route('lawyer-clients.destroy', $client->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete Client
                    </button>
                </form>
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-clients.update', $client->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-username">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="profile-settings-username" name="first_name" placeholder="Enter your First Name.." value="{{$client->first_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-name">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="profile-settings-name" name="last_name" placeholder="Enter your Last Name.." value="{{$client->last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Email Address</label>
                                    <input type="email" class="form-control form-control-lg" id="profile-settings-email" name="profile-settings-email" placeholder="Enter your email.." value="{{$client->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Address:</label>
                                    <input type="text" class="form-control form-control-lg" name="address" value="{{$client->address}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">State:</label>
                                    <input type="text" class="form-control form-control-lg" name="state" value="{{$client->state}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Zip Code:</label>
                                    <input type="text" class="form-control form-control-lg" name="zip_code" value="{{$client->zip_code}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Home Phone:</label>
                                    <input type="text" class="form-control form-control-lg" name="home_phone" value="{{$client->home_phone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Cell Phone:</label>
                                    <input type="text" class="form-control form-control-lg" name="cell_phone"  value="{{$client->cell_phone}}">
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


        <!-- Lawyer Profile 22222 -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-user-circle mr-5 text-muted"></i> Client Data
                </h3>
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-clients.update', $client->id)}}" method="POST" >
                    @csrf
                    @method('PUT')

                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-username">Case Number:</label>
                                    <input type="text" class="form-control form-control-lg" name="case_nr" value="{{$client->case_nr}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-name">Co Counsel Client ID Nr:</label>
                                    <input type="text" class="form-control form-control-lg" name="co_counsel_client_id_nr"  value="{{$client->co_counsel_client_id_nr}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Case Type:</label>
                                    <input type="text" class="form-control form-control-lg" name="case_type" value="{{$client->case_type}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Case Status:</label>
                                    <input type="text" class="form-control form-control-lg" name="case_status" value="{{$client->case_status}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Injured Party First Name:</label>
                                    <input type="text" class="form-control form-control-lg" name="injured_party_f_name" value="{{$client->injured_party_f_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Injured Party Last Name:</label>
                                    <input type="text" class="form-control form-control-lg" name="injured_party_l_name" value="{{$client->injured_party_l_name}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Diagnosis:</label>
                                    <input type="text" class="form-control form-control-lg" name="diagnosis" value="{{$client->diagnosis}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Date of Diagnosis:</label>
                                    <input type="text" class="form-control form-control-lg" name="date_of_diagnosis" value="{{$client->date_of_diagnosis}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Tentative sol:</label>
                                    <input type="text" class="form-control form-control-lg" name="tentative_sol" value="{{$client->tentative_sol}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Treating Doctor:</label>
                                    <input type="text" class="form-control form-control-lg" name="treating_doctor" value="{{$client->treating_doctor}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Diagnosing Hospital:</label>
                                    <input type="text" class="form-control form-control-lg" name="diagnosing_hospital" value="{{$client->diagnosing_hospital}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Date of Death:</label>
                                    <input type="text" class="form-control form-control-lg" name="date_of_death" value="{{$client->date_of_death}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Cause of Death:</label>
                                    <input type="text" class="form-control form-control-lg" name="cause_of_death"  value="{{$client->cause_of_death}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Next of Kin:</label>
                                    <input type="text" class="form-control form-control-lg" name="next_of_kin" value="{{$client->next_of_kin}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Relation of the Client to the Deceased:</label>
                                    <input type="text" class="form-control form-control-lg" name="rel_of_the_client_to_the_deceased" value="{{$client->rel_of_the_client_to_the_deceased}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Date Married:</label>
                                    <input type="text" class="form-control form-control-lg" name="date_married" value="{{$client->date_married}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Exposure History Notes:</label>
                                    <input type="text" class="form-control form-control-lg" name="exposure_history_notes" value="{{$client->exposure_history_notes}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Call Notes:</label>
                                    <textarea type="text" class="form-control form-control-lg" name="call_notes">{{$client->call_notes}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Co Counsel Notes:</label>
                                    <textarea type="text" class="form-control form-control-lg" name="co_counsel_notes">{{$client->co_counsel_notes}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-email">Referred to:</label>
                                    <input type="text" class="form-control form-control-lg" name="referred_to" value="{{$client->referred_to}}">
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

        <!-- Delete Docusign URl -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-asterisk mr-5 text-muted"></i> Delete DocuSign URL
                </h3>
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-clients.update', $client->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">

                            <input type="hidden" name="docusign_url" value="{{null}}">


                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-alt-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
            </div>
        </div>
        <!-- END Delete Docusign URl -->


        <!-- Change Password -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    <i class="fa fa-asterisk mr-5 text-muted"></i> Change Password
                </h3>
            </div>
            <div class="block-content">
                <form action="{{route('lawyer-clients.update', $client->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row items-push">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-password">Current Password</label>
                                    <input type="password" class="form-control form-control-lg" id="profile-settings-password" name="current_password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-password-new">New Password</label>
                                    <input type="password" class="form-control form-control-lg" id="profile-settings-password-new" name="new_password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="profile-settings-password-new-confirm">Confirm New Password</label>
                                    <input type="password" class="form-control form-control-lg" id="profile-settings-password-new-confirm" name="password_confirmation">
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
