<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
//        dd('merge lawyer home');

        return view('lawyer/pages/index');
    }
}
