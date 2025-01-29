<x-dashboard>
    <h1 class="text-lg font-medium italic text-gray-400">/pasien/tambahPoli</h1>

    <div class="mt-10">
        <form action="{{ route('poli.store') }}" method="post" class="">
            @csrf
            <div class="flex flex-col gap-1 mb-4">
                <label class="text-gray-800 font-medium" for="nama">Nama Poli</label>
                <input type="text" name="nama" id="nama" class="border outline-none px-3 py-2 rounded-md" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-gray-800 font-medium" for="desc">Deskripsi</label>
                <textarea name="deskripsi" id="desc" cols="30" rows="10" class="border outline-none px-3 py-2 rounded-md"></textarea>
            </div>

            <button class="bg-blue-500 text-white mt-5 rounded-lg w-40 py-3 font-medium uppercase hover:bg-blue-600">Submit</button>
        </form>
    </div>
</x-dashboard>