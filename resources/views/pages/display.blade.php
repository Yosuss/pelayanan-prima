@extends('template')
@section('konten')
    <div class="w-full flex bg-gray-300">
        <div class="label w-full">
            @include('component.head-menu')
            
            <div class="w-full p-2 bg-white border-2 border-black">
                <div class="head border-2 border-black w-full bg-white flex justify-center">
                    <h1>nama : MUHAMMAD ANDRE, alamat : TAMAN GALAXY INDAH BLOK W NO.48A RT04/01</h1>
                </div>

                <div class="w-full bg-gray-300 flex flex-col">
                    <table border="1" class="w-3/4 border-2 border-black bg-white">
                        <tr>
                            <th class="border-2 border-black capitalize text-start">noreg</th>
                            <th class="border-2 border-black capitalize text-start">tanggal</th>
                            <th class="border-2 border-black capitalize text-start">nopel</th>
                            <th class="border-2 border-black capitalize text-start">no ktp</th>
                            <th class="border-2 border-black capitalize text-start">nama</th>
                            <th class="border-2 border-black capitalize text-start">alamat</th>
                            <th class="border-2 border-black capitalize text-start">no hp</th>
                            <th class="border-2 border-black capitalize text-start">tarif</th>
                            <th class="border-2 border-black capitalize text-end">biaya BP</th>
                            <th class="border-2 border-black capitalize text-end">biaya BP</th>
                            <th class="border-2 border-black capitalize text-end">ssia BP</th>
                        </tr>
                        <tr>
                            <td class="border-2 border-black">0525010001</td>
                            <td class="border-2 border-black">10/01/2025</td>
                            <td class="border-2 border-black"></td>
                            <td class="border-2 border-black">315022509830004</td>
                            <td class="border-2 border-black">MUHAMMAD ANDRE</td>
                            <td class="border-2 border-black">TAMAN GALAXY INDAH BLOK W NO.48A RT04/01</td>
                            <td class="border-2 border-black">082280008115</td>
                            <td class="border-2 border-black">2C</td>
                            <td class="border-2 border-black text-end">1.326.500</td>
                            <td class="border-2 border-black text-end">1.326.500</td>
                            <td class="border-2 border-black text-end">0</td>
                        </tr>
                    </table>
                    @include('component.sortir-date')
                </div>


            </div>
            @include('component.foot-display')

        </div>
    </div>
@endsection
