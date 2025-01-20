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
                        <thead>
                            <tr>
                                <th class="border-2 border-black capitalize text-center">noreg</th>
                                <th class="border-2 border-black capitalize text-center">tanggal</th>
                                <th class="border-2 border-black capitalize text-center">nopel</th>
                                <th class="border-2 border-black capitalize text-center">no ktp</th>
                                <th class="border-2 border-black capitalize text-center">nama</th>
                                <th class="border-2 border-black capitalize text-center">alamat</th>
                                <th class="border-2 border-black capitalize text-center">no hp</th>
                                <th class="border-2 border-black capitalize text-center">tarif</th>
                                <th class="border-2 border-black capitalize text-end"> BP</th>
                                <th class="border-2 border-black capitalize text-end">biaya BP</th>
                                <th class="border-2 border-black capitalize text-end">ssia BP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="border-2 border-black capitalize text-center">{{ $loop->iteration }}</td>
                                    <td class="border-2 border-black capitalize text-center">{{ $item->tanggal }}</td>
                                    <td class="border-2 border-black capitalize text-center">{{ $item->id_input }}</td>
                                    <td class="border-2 border-black capitalize text-center">{{ $item->no_ktp }}</td>
                                    <td class="border-2 border-black capitalize text-center">{{ $item->nama }}</td>
                                    <td class="border-2 border-black capitalize">{{ $item->alamat }} BLOK {{ $item->kode_blok }}, no.{{ $item->kode_wilayah }} ,kecamatan {{ $item->kecamatan }}, kelurahan {{ $item->kelurahan }} RT/{{ $item->rt }}/RW{{ $item->rw }}</td>
                                    <td class="border-2 border-black capitalize text-center">{{ $item->no_hp }}</td>
                                    <td class="border-2 border-black uppercase text-center">{{ $item->tarif }}</td>
                                    <td class="border-2 border-black capitalize text-end">{{ $item->bp }}</td>
                                    <td class="border-2 border-black capitalize text-end">{{ $item->nilai_bp }}</td>
                                    <td class="border-2 border-black capitalize text-end">{{ $item->sisa_bp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination text-black">
                        {{ $data->links('') }}
                    </div>
                    @include('component.sortir-date')
                </div>


            </div>
            @include('component.foot-display')

        </div>
    </div>
@endsection
