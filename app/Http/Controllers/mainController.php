<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class mainController extends Controller
{
    //
    public function index(){
        return view('template');
    }
}