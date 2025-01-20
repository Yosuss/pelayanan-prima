<?php

namespace App\Http\Controllers;

use App\Models\input;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class mainController extends Controller
{
    //
    public function landing(){
        return view('pages.landing');
    }
    
    public function display(Request $request)
    {
        // Periksa apakah ada input tanggal
        $query = input::query(); // Ganti dengan model Anda
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);
    
            // Filter berdasarkan tanggal
            $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
        }
    
        // Ambil data dengan pagination
        $data = $query->paginate(25);
    
        return view('pages.display', compact('data'));
    }
    }