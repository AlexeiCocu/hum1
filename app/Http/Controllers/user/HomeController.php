<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

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

        $client_id = Auth::user()->id;
        $lawyer_id = Client::select('lawyer_id')
            ->where('client_id', $client_id)
            ->pluck('lawyer_id')
            ->first();

        $lawyer = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.role_id',
            'lawyers.avatar',
            'lawyers.title',
            'lawyers.call_url',
            'lawyers.video_url',
            'lawyers.deposition_url',
            'lawyers.lawyer_description',
            'lawyers.lawyer_firm_name'
        )
            ->where('users.id', $lawyer_id)
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->first();

        return view('lex_client/pages/index', compact('client', 'lawyer'));
    }
}
