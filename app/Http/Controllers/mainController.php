<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class mainController extends Controller
{
    //
    public function landing(){
        return view('pages.landing');
    }
    
    public function display(){
        return view('pages.display');
    }
}