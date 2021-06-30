<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LawyerPasswordController extends Controller
{
    public function index(Request $request, $id){

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required'
        ]);

        $lawyerPassword = User::select('users.id',
            'users.role_id',
            'users.password',
            'lawyers.lawyer_id'
        )
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->where('users.role_id', 2)
            ->where('users.id', $id)
            ->first();


        if(!Hash::check($request->current_password, $lawyerPassword->password)){
            return back()->withErrors(['Current password does not match our records']);
        }

        if($request->new_password == $request->password_confirmation){
            $lawyerPassword->password = Hash::make($request->get('password_confirmation'));
            $lawyerPassword->save();
        }else{
            return back()->withErrors(['Confirmed password does not match with new password']);
        }

        return redirect()->route('admin-lawyers.show', $id);
    }
}
