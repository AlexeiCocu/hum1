<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DocusignController extends Controller
{
    public function index(Request $request, $id){

        $clientHistory = $request->validate([
            'docusign_url' => 'sometimes',
        ]);

        $client = User::where('id', $id)->first();
        $client->history()->update($clientHistory);

        return redirect()->route('lawyer-clients.index');
    }
}
