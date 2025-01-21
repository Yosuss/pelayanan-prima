<div class="foot absolute bottom-0 w-full bg-white">
    <div class="grid grid-cols-3">
        <a href="{{ url('input') }}">
            <div class="w-full flex justify-center items-center border-2 border-black rounded-b-lg">
                <h1 class="capitalize">1 entry data registrasi</h1>
            </div>
        </a>
        <a href="{{ url('display') }}">
            <div class="w-full flex justify-center items-center border-b border-black rounded-lg">
                <h1 class="capitalize">2 display data registrasi</h1>
            </div>
        </a>
        <a href="{{ url('/') }}">
            <div class="w-full flex justify-center items-center border-2 border-black rounded-b-lg">
                <h1 class="capitalize">3 DRD non air</h1>
            </div>
        </a>
    </div>

    <div class="fungsi w-full p-5 flex gap-4">
        <button class="p-[3rem] border-b border-r shadow-sm capitalize border-black rounded-lg"><i class="bi bi-eye"></i> tampikan</button>
        <button class="p-[3rem] border-b border-r shadow-sm capitalize border-black rounded-lg"><i class="bi bi-printer"></i> cetak</button>
        <a href="{{ url('/') }}">
            <button class="p-[3rem] border-b border-r shadow-sm capitalize border-black rounded-lg"><i class="bi bi-box-arrow-right"></i> keluar</button>
        </a>
    </div>
</div>
