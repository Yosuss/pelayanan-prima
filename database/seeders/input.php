<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class input extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('input')->insert([
            [
                'zona' => '1',
                'unit' => '4',
                'kode_wilayah' => '806',
                'kode_blok' => 'b',
                'no_ktp' => '32748738180',
                'nama' => 'arga',
                'email' => 'arga@gmail.com',
                'alamat' => 'perumahan duta kranji',
                'kecamatan' => 'bekasi barat',
                'kelurahan' => 'kranji',
                'rt' => '06',
                'rw' => '002',
                'no_hp' => '0812',
                'peekrjaan' => 'it',
                'tetap' => 'ya',
                'tidak_tetap' => '',
                'tarif' => '20000',
                'tanah' => '500',
                'bangunan' => '350',
                'jalan' => '350',
                'bp' => '48',
                'nilai_bp' => '20000',
                'clamb' => '',
                'tanggal' => '2025-01-10',
            ],
        ]);
    }
}