<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
//        dd('merge client home');

        return view('lex_client/pages/index');
    }
}
