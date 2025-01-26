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
            <tr>
                <td class="text-center text-gray-600 py-4">1</td>
                <td class="text-center text-gray-600 py-4">00122445</td>
                <td class="text-center text-gray-600 py-4">Aditya</td>
                <td class="text-center text-gray-600 py-4">aditya@gmail.com</td>
                <td class="text-center text-gray-600 py-4">Laki-Laki</td>
                <td class="text-center text-gray-600 py-4">Belum Menikah</td>
                <td class="text-center text-gray-600 py-4">
                    <a class="hover:bg-blue-600 bg-blue-500 text-white px-3 py-1 rounded-md text-sm" href="{{ route('pasien.edit') }}">Edit</a>
                    <a class="hover:bg-red-600 bg-red-500 text-white px-3 py-1 rounded-md text-sm" href="">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</x-dashboard>