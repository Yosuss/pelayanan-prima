<?php

namespace App\Http\Controllers;

use App\Models\input;
use Illuminate\Http\Request;

class inputController extends Controller
{
    //

    public function input(){
        return view('pages.input');
    }

    public function simpan(Request $request)
    {
        // simpan data ( simple )
        $data = new input();
        $data->zona = $request->zona;
        $data->unit = $request->unit;
        $data->kode_wilayah = $request->kode_wilayah;
        $data->kode_blok = $request->kode_blok;
        $data->no_ktp = $request->no_ktp;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->kecamatan = $request->kecamatan;
        $data->kelurahan = $request->kelurahan;
        $data->rt = $request->rt;
        $data->rw = $request->rw;
        $data->no_hp = $request->no_hp;
        $data->pekerjaan = $request->pekerjaan;
        $data->tetap = $request->tetap;
        $data->tidak_tetap = $request->tidak_tetap;
        $data->tarif = $request->tarif;
        $data->tanah = $request->tanah;
        $data->bangunan = $request->bangunan;
        $data->jalan = $request->jalan;
        $data->bp = $request->bp;
        $data->nilai_bp = $request->nilai_bp;
        $data->clamb = $request->clamb;
        $data->tanggal = $request->tanggal;
        $data->save();

        return redirect()->route('input')->with('success', 'inputan berhasil ditambahkan');
    }
}