<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.role_id',
            'clients.client_id',
            'clients.lawyer_id',
            'clients.client_f_name',
            'clients.client_l_name',
            'clients.address',
            'clients.state',
            'clients.zip_code',
            'clients.home_phone',
            'clients.cell_phone',
            'histories.case_nr',
            'histories.docusign_url',
            'histories.co_counsel_client_id_nr',
            'histories.case_type',
            'histories.case_status',
            'histories.injured_party_f_name',
            'histories.injured_party_l_name',
            'histories.diagnosis',
            'histories.date_of_diagnosis',
            'histories.tentative_sol',
            'histories.sol_notes',
            'histories.treating_doctor',
            'histories.diagnosing_hospital',
            'histories.date_of_death',
            'histories.cause_of_death',
            'histories.next_of_kin',
            'histories.rel_of_the_client_to_the_deceased',
            'histories.date_married',
            'histories.exposure_history_notes',
            'histories.call_notes',
            'histories.co_counsel_notes',
            'histories.referred_to'
        )
            ->leftJoin('clients', 'clients.client_id', 'users.id')
            ->where('users.role_id', 3)
            ->where('clients.lawyer_id', Auth::user()->id)
            ->leftJoin('histories', 'histories.client_id', 'clients.client_id')
            ->get();

        return view('lawyer/pages/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('lawyer/pages/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|unique:users,email',
        ]);
        $data['role_id']  = 3;
        $data['password'] = Hash::make(123);

        $user = User::query()->create($data);

//        dd(Auth::id());

        $lawyer_id = new Client(['lawyer_id' => Auth::id(), 'client_f_name' => $data['first_name'], 'client_l_name' => $data['last_name']]);
        $history = new History(['lawyer_id' => Auth::id()]);
        $user->clientDetails()->save($lawyer_id);
        $user->history()->save($history);

        return redirect()->route('lawyer-clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.role_id',
            'clients.client_id',
            'clients.client_f_name',
            'clients.client_l_name',
            'clients.address',
            'clients.state',
            'clients.zip_code',
            'clients.home_phone',
            'clients.cell_phone',

            'histories.case_nr',
            'histories.docusign_url',
            'histories.co_counsel_client_id_nr',
            'histories.case_type',
            'histories.case_status',
            'histories.injured_party_f_name',
            'histories.injured_party_l_name',
            'histories.lawyer_id',
            'histories.diagnosis',
            'histories.date_of_diagnosis',
            'histories.tentative_sol',
            'histories.sol_notes',
            'histories.treating_doctor',
            'histories.diagnosing_hospital',
            'histories.date_of_death',
            'histories.cause_of_death',
            'histories.next_of_kin',
            'histories.rel_of_the_client_to_the_deceased',
            'histories.date_married',
            'histories.exposure_history_notes',
            'histories.call_notes',
            'histories.co_counsel_notes',
            'histories.referred_to'
        )
            ->leftJoin('clients', 'clients.client_id', 'users.id')
            ->where('users.role_id', 3)
            ->where('users.id', $id)
            ->leftJoin('histories', 'histories.client_id', 'clients.client_id')
            ->first();

        return view('lawyer/pages/clients/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.role_id',

            'clients.client_id',
            'clients.client_f_name',
            'clients.client_l_name',
            'clients.address',
            'clients.state',
            'clients.zip_code',
            'clients.home_phone',
            'clients.cell_phone',

            'histories.case_nr',
            'histories.docusign_url',
            'histories.lawyer_id',
            'histories.co_counsel_client_id_nr',
            'histories.case_type',
            'histories.case_status',
            'histories.injured_party_f_name',
            'histories.injured_party_l_name',
            'histories.diagnosis',
            'histories.date_of_diagnosis',
            'histories.tentative_sol',
            'histories.sol_notes',
            'histories.treating_doctor',
            'histories.diagnosing_hospital',
            'histories.date_of_death',
            'histories.cause_of_death',
            'histories.next_of_kin',
            'histories.rel_of_the_client_to_the_deceased',
            'histories.date_married',
            'histories.exposure_history_notes',
            'histories.call_notes',
            'histories.co_counsel_notes',
            'histories.referred_to'
        )
            ->leftJoin('clients', 'clients.client_id', 'users.id')
            ->where('users.role_id', 3)
            ->where('users.id', $id)
            ->leftJoin('histories', 'histories.client_id', 'clients.client_id')
            ->first();

        return view('lawyer/pages/clients/edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'sometimes|string',
            'last_name' => 'sometimes|string',
            'email' => 'sometimes|string',
            'current_password' => 'sometimes',
        ]);

//        dd($data);

        $userClient = $request->validate([
            'address' => 'sometimes',
            'state' => 'sometimes',
            'zip_code' => 'sometimes',
            'home_phone' => 'sometimes',
            'cell_phone' => 'sometimes',
        ]);

        $clientHistory = $request->validate([
            'case_nr' => 'sometimes',
            'docusign_url' => 'sometimes',
            'co_counsel_client_id_nr' => 'sometimes',
            'case_type' => 'sometimes',
            'case_status' => 'sometimes',
            'injured_party_f_name' => 'sometimes',
            'injured_party_l_name' => 'sometimes',
            'client_f_name' => 'sometimes',
            'client_l_name' => 'sometimes',
            'diagnosis' => 'sometimes',
            'date_of_diagnosis' => 'sometimes',
            'tentative_sol' => 'sometimes',
            'sol_notes' => 'sometimes',
            'treating_doctor' => 'sometimes',
            'diagnosing_hospital' => 'sometimes',
            'date_of_death' => 'sometimes',
            'cause_of_death' => 'sometimes',
            'next_of_kin' => 'sometimes',
            'rel_of_the_client_to_the_deceased' => 'sometimes',
            'date_married' => 'sometimes',
            'exposure_history_notes' => 'sometimes',
            'call_notes' => 'sometimes',
            'co_counsel_notes' => 'sometimes',
            'referred_to' => 'sometimes'
        ]);

//        if(Hash::check($request->current_password, Auth::user()->password) ) {
//            if($request->new_password == $request->password_confirmation){
//                $data['password'] = Hash::make($request->password_confirmation);
//            }
//        }

//        if (!Hash::check($request->current_password, Auth::user()->password)) {
//            throw ValidationException::withMessages([
//                'current_password' => ['Current provided password dont match with our records'],
//            ]);
//        }else{
//            $data['password'] = Hash::make($request->password_confirmation);
//        }

        $client = User::where('id', $id)->first();
        $client->update($data);
        $client->clientDetails()->update($userClient);
        $client->history()->update($clientHistory);

        $client_details = Client::where('client_id', $id)->first();
        $client_details->update($data);

        return redirect()->route('lawyer-clients.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('lawyer-clients.index');
    }
}
