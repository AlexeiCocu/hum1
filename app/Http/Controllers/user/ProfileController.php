<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            'clients.lawyer_id',

            'histories.case_nr',
            'histories.case_type',
            'histories.co_counsel_client_id_nr',
            'histories.diagnosis',
            'histories.date_of_diagnosis',
            'histories.case_status',
            'histories.docusign_url',
            'histories.docusign_btn_pressed',
            'histories.injured_party_f_name',
            'histories.injured_party_l_name',
            'histories.updated_at'
        )
            ->leftJoin('clients', 'clients.client_id', 'users.id')
            ->where('users.role_id', 3)
            ->where('users.id', Auth::user()->id)
            ->leftJoin('histories', 'histories.client_id', 'clients.client_id')
            ->first();

        return view('lex_client/pages/profile/show', compact('client'));
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
            'clients.lawyer_id',

            'histories.case_nr',
            'histories.case_type',
            'histories.co_counsel_client_id_nr',
            'histories.diagnosis',
            'histories.date_of_diagnosis',
            'histories.case_status',
            'histories.docusign_url',
            'histories.docusign_btn_pressed',
            'histories.injured_party_f_name',
            'histories.injured_party_l_name',
            'histories.updated_at'
        )
            ->leftJoin('clients', 'clients.client_id', 'users.id')
            ->where('users.role_id', 3)
            ->where('users.id', Auth::user()->id)
            ->leftJoin('histories', 'histories.client_id', 'clients.client_id')
            ->first();

        return view('lex_client/pages/profile/edit', compact('client'));
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
            'email' => 'required',
        ]);

        $dataClient = $request->validate([
            'address' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'home_phone' => 'required',
            'cell_phone' => 'required'
        ]);

        $user = User::where('id', $id)->first();
        $user->update($data);

        $user->clientDetails()->update($dataClient);

        return redirect()->route('client-profile.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
