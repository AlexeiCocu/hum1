<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LawyerPasswordController extends Controller
{
    public function index(Request $request, $id){

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required'
        ]);

        if(!Hash::check($request->current_password, Auth::user()->password)){
            return back()->withErrors(['Current password does not match our records']);
        }

        if($request->new_password == $request->password_confirmation){
            Auth::user()->password = Hash::make($request->get('password_confirmation'));
            Auth::user()->save();
        }else{
            return back()->withErrors(['Confirmed password does not match with new password']);
        }

        return redirect()->route('lawyer-profile.show', $id);
    }
}
