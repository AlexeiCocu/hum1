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
                                    <label for="f_name">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="f_name" name="first_name" placeholder="Enter your First Name.." value="{{$client->first_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="l_name">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="l_name" name="last_name" placeholder="Enter your Last Name.." value="{{$client->last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="profile-settings-email" placeholder="Enter your email.." value="{{$client->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="address">Address:</label>
                                    <input id="address" type="text" class="form-control form-control-lg" name="address" value="{{$client->address}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="state">State:</label>
                                    <select class="form-control" name="state" id="state">
                                        <option value="{{$client->state}}">{{$client->state}}</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky">Kentucky</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts">Massachusetts</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania">Pennsylvania</option>
                                        <option value="Rhode Island">Rhode Island</option>
                                        <option value="South Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="Wisconsin">Wisconsin</option>
                                        <option value="Wyoming">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="zip_code">Zip Code:</label>
                                    <input id="zip_code" type="number" class="form-control form-control-lg" name="zip_code" value="{{$client->zip_code}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="home_phone">Home Phone:</label>
                                    <input id="home_phone" type="number" class="form-control form-control-lg" name="home_phone" value="{{$client->home_phone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="cell_phone">Cell Phone:</label>
                                    <input id="cell_phone" type="tel" class="form-control form-control-lg" name="cell_phone"  value="{{$client->cell_phone}}">
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
                                    <label for="case_nr">Case Number:</label>
                                    <input id="case_nr" type="number" class="form-control form-control-lg" name="case_nr" value="{{$client->case_nr}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="co_counsel_client_id">Co Counsel Client ID Nr:</label>
                                    <input id="co_counsel_client_id" type="number" class="form-control form-control-lg" name="co_counsel_client_id_nr"  value="{{$client->co_counsel_client_id_nr}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="case_type">Case Type:</label>
                                    <input id="case_type" type="text" class="form-control form-control-lg" name="case_type" value="{{$client->case_type}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="case_status">Case Status:</label>
                                    <input id="case_status" type="text" class="form-control form-control-lg" name="case_status" value="{{$client->case_status}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="inj_party_f_name">Injured Party First Name:</label>
                                    <input id="inj_party_f_name" type="text" class="form-control form-control-lg" name="injured_party_f_name" value="{{$client->injured_party_f_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="inj_party_l_name">Injured Party Last Name:</label>
                                    <input id="inj_party_l_name" type="text" class="form-control form-control-lg" name="injured_party_l_name" value="{{$client->injured_party_l_name}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="diagnosis">Diagnosis:</label>
                                    <input id="diagnosis" type="text" class="form-control form-control-lg" name="diagnosis" value="{{$client->diagnosis}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="date_of_diagnosis">Date of Diagnosis:</label>
                                    <input id="date_of_diagnosis" type="date" class="form-control form-control-lg" name="date_of_diagnosis" value="{{$client->date_of_diagnosis}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="tentative_sol">Tentative sol:</label>
                                    <input id="tentative_sol" type="text" class="form-control form-control-lg" name="tentative_sol" value="{{$client->tentative_sol}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="treating_doctor">Treating Doctor:</label>
                                    <input id="treating_doctor" type="text" class="form-control form-control-lg" name="treating_doctor" value="{{$client->treating_doctor}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="diagnosing_hospital">Diagnosing Hospital:</label>
                                    <input id="diagnosing_hospital" type="text" class="form-control form-control-lg" name="diagnosing_hospital" value="{{$client->diagnosing_hospital}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="date_of_death">Date of Death:</label>
                                    <input id="date_of_death" type="date" class="form-control form-control-lg" name="date_of_death" value="{{$client->date_of_death}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="cause_of_death">Cause of Death:</label>
                                    <input id="cause_of_death" type="text" class="form-control form-control-lg" name="cause_of_death"  value="{{$client->cause_of_death}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="next_of_kin">Next of Kin:</label>
                                    <input id="next_of_kin" type="text" class="form-control form-control-lg" name="next_of_kin" value="{{$client->next_of_kin}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="client_rel_to_injured">Relation of the Client to the Deceased:</label>
                                    <input id="client_rel_to_injured" type="text" class="form-control form-control-lg" name="rel_of_the_client_to_the_deceased" value="{{$client->rel_of_the_client_to_the_deceased}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="date_married">Date Married:</label>
                                    <input id="date_married" type="date" class="form-control form-control-lg" name="date_married" value="{{$client->date_married}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="exposure_history_notes">Exposure History Notes:</label>
                                    <input id="exposure_history_notes" type="text" class="form-control form-control-lg" name="exposure_history_notes" value="{{$client->exposure_history_notes}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="call_notes">Call Notes:</label>
                                    <textarea id="call_notes" type="text" class="form-control form-control-lg" name="call_notes">{{$client->call_notes}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="co_counsel_noted">Co Counsel Notes:</label>
                                    <textarea id="co_counsel_noted" type="text" class="form-control form-control-lg" name="co_counsel_notes">{{$client->co_counsel_notes}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="referred_to">Referred to:</label>
                                    <input id="referred_to" type="text" class="form-control form-control-lg" name="referred_to" value="{{$client->referred_to}}">
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


{{--@push('script')--}}

{{--    <script>--}}
{{--        function formatPhoneNumber(phoneNumberString) {--}}
{{--            const cleaned = ('' + phoneNumberString).replace(/\D/g, '');--}}
{{--            const match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);--}}
{{--            if (match) {--}}
{{--                return '(' + match[1] + ') ' + match[2] + '-' + match[3];--}}
{{--            }--}}
{{--            return null;--}}
{{--        }--}}
{{--    </script>--}}

{{--@endpush--}}


