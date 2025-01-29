<x-dashboard>
    <h1 class="text-3xl font-semibold mb-10">Data Poli</h1>

    <a class="text-white bg-emerald-600 px-4 py-3 rounded-lg font-medium hover:bg-emerald-700 hover:cursor-pointer" href="{{ route('poli.create') }}">Tambah Poli</a>

    <table class="mt-5 w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="py-3 text-center font-medium text-gray-700">No</th>
                <th class="py-3 text-center font-medium text-gray-700">Nama</th>
                <th class="py-3 text-center font-medium text-gray-700">Deskripsi</th>
                <th class="py-3 text-center font-medium text-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($poli as $no=>$data)
                <tr>
                    <td class="py-3 text-center font-medium text-gray-600">{{ $no+1 }}</td>
                    <td class="py-3 text-center font-medium text-gray-600">{{ $data->nama }}</td>
                    <td class="py-3 text-center font-medium text-gray-600">{{ $data->deskripsi }}</td>
                    <td class="py-3 text-center font-medium text-gray-600">
                        <div class="flex gap-2 justify-center">
                            <a class="hover:bg-blue-600 bg-blue-500 text-white px-3 py-1 rounded-md text-sm" href="{{ route('poli.edit', $data->id) }}">Edit</a>
                            <form action="{{ route('poli.delete', $data->id) }}" method="post">
                                @csrf
                                <button class="hover:bg-red-600 bg-red-500 text-white px-3 py-1 rounded-md text-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-dashboard>