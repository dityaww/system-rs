<x-dashboard>
    <h1 class="text-3xl font-semibold">Data Pasien</h1>

    <table class="mt-10 w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="py-3 text-center font-medium text-gray-700">No</th>
                <th class="py-3 text-center font-medium text-gray-700">Nomor RM</th>
                <th class="py-3 text-center font-medium text-gray-700">Nama</th>
                <th class="py-3 text-center font-medium text-gray-700">Email</th>
                <th class="py-3 text-center font-medium text-gray-700">Jenis Kelamin</th>
                <th class="py-3 text-center font-medium text-gray-700">Status Nikah</th>
                <th class="py-3 text-center font-medium text-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $no=>$data)
                <tr>
                    <td class="text-center text-gray-600 py-4">{{ $no+1 }}</td>
                    <td class="text-center text-gray-600 py-4">{{ $data->no_rm }}</td>
                    <td class="text-center text-gray-600 py-4">{{ $data->nama }}</td>
                    <td class="text-center text-gray-600 py-4">{{ $data->email }}</td>
                    <td class="text-center text-gray-600 py-4">{{ $data->jenis_kelamin }}</td>
                    <td class="text-center text-gray-600 py-4">{{ $data->status_nikah }}</td>
                    <td class="text-center text-gray-600 py-4">
                        <div class="flex gap-2 justify-center">
                            <a class="hover:bg-blue-600 bg-blue-500 text-white px-3 py-1 rounded-md text-sm" href="{{ route('pasien.edit', $data->id) }}">Edit</a>
                            <form action="{{ route('pasien.delete', $data->id) }}" method="post">
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