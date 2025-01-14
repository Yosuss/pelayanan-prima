@extends('template')
@section('konten')
    <div class="w-full h-screen flex bg-gray-300">
        <div class="label w-full">
            <div class="name-menu w-full bg-blue-50 h-fit flex items-center gap-3 py-1 capitalize">
                <img src="{{ url('aset/pdam.png') }}" alt="pdam" class="h-4">
                <h1 class="">pelayanan prima - [display registrasi]</h1>
            </div>
            <div class="menu w-full bg-white h-fit flex items-center gap-3 py-1 px-2 capitalize">
                <img src="{{ url('aset/pdam.png') }}" alt="pdam" class="h-4">
                <h1 class="">file</h1>
                <h1 class="">transaksi</h1>
                <h1 class="">laporan</h1>
                <h1 class="">utility</h1>
                <h1 class="">window</h1>
            </div>
            <div class="menu w-full bg-white border-t border-b border-black px-2 py-4">
            </div>
        </div>
    </div>
@endsection
