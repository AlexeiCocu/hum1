<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LawyerClientPasswordController extends Controller
{
    public function index(Request $request, $id){

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required'
        ]);

        $clientPassword = User::select('users.id',
            'users.role_id',
            'users.password',
            'clients.client_id'
        )
            ->leftJoin('clients', 'clients.client_id', 'users.id')
            ->where('users.role_id', 3)
            ->where('users.id', $id)
            ->first();

//        dd($id);

//        dd(Hash::check($request->current_password, $clientPassword->password));


        if(!Hash::check($request->current_password, $clientPassword->password)){
            return back()->withErrors(['Current password does not match our records']);
        }

        if($request->new_password == $request->password_confirmation){
            $clientPassword->password = Hash::make($request->password_confirmation);
            $clientPassword->save();
        }else{
            return back()->withErrors(['Confirmed password does not match with new password']);
        }

        return redirect()->route('lawyer-clients.show', $id);
    }
}
