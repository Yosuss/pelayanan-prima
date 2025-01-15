<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputController extends Controller
{
    //

    public function input(){
        return view('pages.input');
    }

    public function tambah(Request $request)
    {
        // simpan data ( simple )
        // $data = new inputModel();
        // $data->tanggal = $request->tanggal;
        // $data->kegiatan = $request->kegiatan;
        // $data->save();

        return redirect()->route('input')->with('success', 'inputan berhasil ditambahkan');
    }
}