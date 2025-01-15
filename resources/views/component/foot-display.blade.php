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

    <div class="fungsi">
        <button>tampikan</button>
        <button>cetak</button>
        <button>keluar</button>
    </div>
</div>
