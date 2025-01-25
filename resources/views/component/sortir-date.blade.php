<div class="tools flex gap-2 p-2 border-2 border-gray-400 bottom-6 w-full bg-white">
    <div class="date">
        <h1 class="text-blue-600 capitalize">Tanggal</h1>
        <form method="GET" action="{{ route('display') }}" autocomplete="off"v
            class="flex justify-center items-center gap-4">
            <div class="flex gap-2">
                <input type="date" name="start_date" class="border-2 border-black">
                <h1 class="text-blue-600">s/d</h1>
                <input type="date" name="end_date" class="border-2 border-black">
            </div>
            <div class="flex justify-center items-center gap-2">
                <button type="submit" class="bg-blue-600 text-white rounded px-4 capitalize">sortir</button>
            </div>
        </form>
    </div>
    <a href="{{ url('display') }}" class="flex flex-col justify-center">
        <h1 class="text-blue-600">Reset</h1>
        <button type="submit" class="bg-red-600 text-white rounded px-4 capitalize">resert</button>
    </a>
    {{-- <div class="date flex gap-1">
        <div class="zona">
            <h1 class="text-blue-600 capitalize">zona</h1>
            <select name="cabang" id="cabang"
                class="capitalize block w-full border-2 py-[2px] border-black shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">zona</option>
                <option value="id zona">id zona</option>
            </select>
        </div>
        <div class="noreg">
            <h1 class="text-blue-600 capitalize">noreg</h1>
            <select name="cabang" id="cabang"
                class="capitalize block w-full border-2 py-[2px] border-black shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">noreg</option>
                <option value="id noreg">id noreg</option>
            </select>
        </div>
    </div>
    <div class="bp pt-5">
        <button class="px-1 capitalize shadow-md border-2">hapus BP</button>
        <button class="px-1 capitalize shadow-md border-2">cetak BP</button>
        <button class="px-1 capitalize shadow-md border-2">cetak SPK</button>
    </div> --}}
</div>
