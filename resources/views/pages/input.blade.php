@extends('template')
@section('konten')
    <div class="w-full flex bg-gray-300">
        <div class="label w-full">
            @include('component.head-menu')

            <div class="w-full bg-white border-t border-r border-l border-black">
                <div class="side-input w-3/12 border-t border-r border-l shadow-sm border-gray-500 p-2">

                    <form action="{{ route('input.simpan') }}" method="POST">
                        @csrf
                        <div class="w-full flex flex-col gap-1">
                            <div class="w-full flex gap-4">
                                <div class="w-4/12">
                                    <h1 class="text-blue-600 capitalize">zona</h1>
                                    <input type="text" name="zona"
                                        class="border-l border-t shadow-sm border-black w-full">
                                </div>
                                <div class="w-8/12">
                                    <h1 class="text-blue-600 capitalize">cab / unit</h1>
                                    <input type="number" name="unit"
                                        class="border-l border-t shadow-sm border-black w-full">
                                </div>
                            </div>

                            <div class="w-full flex flex-col">
                                <h1 class="text-blue-600 capitalize">kode wilayah</h1>
                                <input type="number" name="kode_wilayah"
                                    class="border-l border-t shadow-sm border-black w-full">
                                <h1 class="text-blue-600 capitalize">kode blok</h1>
                                <input type="text" name="kode_blok"
                                    class="border-l border-t shadow-sm border-black w-full">
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex gap-2">
                                    <h1 class="w-20 text-blue-600 capitalize">no KTP</h1>
                                    <input type="number" name="no_ktp"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex gap-2">
                                    <h1 class="w-20 text-blue-600 capitalize">nama</h1>
                                    <input type="text" name="nama"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex gap-2">
                                    <h1 class="w-20 text-blue-600 capitalize">email</h1>
                                    <input type="email" name="email"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <h1 class="text-blue-600 capitalize">alamat lengkap</h1>
                                <input type="text" name="alamat"
                                    class="w-full border-l border-t shadow-sm border-black">
                                <div class="flex gap-4 w-full">
                                    <div class="flex flex-col w-1/2">
                                        <h1 class="text-blue-600 capitalize">kecamatan</h1>
                                        <input type="text" name="kecamatan"
                                            class="w-full border-l border-t shadow-sm border-black">
                                    </div>
                                    <div class="flex flex-col w-1/2">
                                        <h1 class="text-blue-600 capitalize">kelurahan</h1>
                                        <input type="text" name="kelurahan"
                                            class="w-full border-l border-t shadow-sm border-black">
                                    </div>
                                </div>
                            </div>

                            <div class="flex w-full">
                                <div class="flex w-1/2 gap-2">
                                    <h1 class="text-blue-600 capitalize">rt/rw</h1>
                                    <input type="number" name="rt"
                                        class="w-full border-l border-t shadow-sm border-black">
                                    <input type="number" name="rw"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex w-1/2">
                                    <h1 class="text-blue-600 w-20 capitalize">no hp</h1>
                                    <input type="number" name="no_hp"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                            </div>

                            <div class="flex gap-2">
                                <h1 class="text-blue-600 w-20 capitalize">pekerjaan</h1>
                                <input type="text" name="pekerjaan"
                                    class="w-full border-l border-t shadow-sm border-black">
                            </div>

                            <div class="flex gap-2 w-full">
                                <h1 class="text-blue-600 capitalize">penghuni</h1>
                                <div class="flex flex-col w-full">
                                    <h1 class="text-blue-600 capitalize">tetap</h1>
                                    <input type="text" name="tetap"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex flex-col w-full">
                                    <h1 class="text-blue-600 capitalize">tidak tetap</h1>
                                    <input type="text" name="tidak_tetap"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                            </div>

                            <div class="flex gap-2">
                                <h1 class="text-blue-600 capitalize">tarif</h1>
                                <input type="number" name="tarif"
                                    class="w-full border-l border-t shadow-sm border-black">
                            </div>

                            <div class="flex gap-2 w-full">
                                <div class="flex flex-col w-full">
                                    <h1 class="text-blue-600 capitalize">l tanah</h1>
                                    <input type="number" name="tanah"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex flex-col w-full">
                                    <h1 class="text-blue-600 capitalize">l bangunan</h1>
                                    <input type="number" name="bangunan"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex flex-col w-full">
                                    <h1 class="text-blue-600 capitalize">l jalan</h1>
                                    <input type="number" name="jalan"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex gap-2">
                                    <h1 class="text-blue-600 w-20 capitalize">BP</h1>
                                    <input type="number" name="bp"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex gap-2">
                                    <h1 class="text-blue-600 w-20 capitalize">nilai BP</h1>
                                    <input type="number" name="nilai_bp"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex gap-2">
                                    <h1 class="text-blue-600 w-20 capitalize">clamb</h1>
                                    <input type="number" name="clamb"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                                <div class="flex gap-2">
                                    <h1 class="text-blue-600 w-20 capitalize">tanggal</h1>
                                    <input type="date" name="tanggal"
                                        class="w-full border-l border-t shadow-sm border-black">
                                </div>
                            </div>

                            <div class="flex w-full justify-end items-center mt-4">
                                <button type="submit"
                                    class="capitalize p-2 border-r border-b shadow-sm border-black">simpan</button>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="field w-9/12">

                </div>
            </div>
            @include('component.foot-input')

        </div>
    </div>
@endsection
