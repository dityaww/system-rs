<x-dashboard>
    <h1 class="text-lg font-medium italic text-gray-400">/pasien/editData</h1>

    <div class="mt-10">
        <h2 class="text-md font-bold mb-3 uppercase text-gray-800">Data Sosial</h2>
        <form action="{{ route('pasien.update', $pasien->id) }}" method="post" class="">
            @csrf
            <div class="flex flex-col gap-1">
                <label for="">No MR</label>
                <input type="text" name="no_rm" value="{{ $pasien->no_rm }}" id="" class="border outline-none px-3 py-2 rounded-md" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">Nama</label>
                <input type="text" name="nama" value="{{ $pasien->nama }}" id="" class="border outline-none px-3 py-2 rounded-md" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-1">
                    <label for="">Tanggal MR</label>
                    <input type="date" name="tanggal_rm" value="{{ $pasien->tanggal_rm }}" id="" class="border outline-none px-3 py-2 rounded-md" />
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" id="" value="{{ $pasien->alamat }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan alamat"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Kota</label>
                    <input type="text" name="kota" id="" value="{{ $pasien->kota }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kota" />
                </div>
    
                <div class="flex flex-col gap-1">
                    <label for="">Kabupaten</label>
                    <input type="text" name="kabupaten" id="" value="{{ $pasien->kabupaten }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kabupaten"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Kecamatan</label>
                    <input type="text" name="kecamatan" id="" value="{{ $pasien->kecamatan }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kecamatan"/>
                </div>
    
                <div class="flex flex-col gap-1">
                    <label for="">Kelurahan</label>
                    <input type="text" name="kelurahan" id="" value="{{ $pasien->kelurahan }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kelurahan"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Provinsi</label>
                    <input type="text" name="provinsi" id="" value="{{ $pasien->provinsi }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan provinsi"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Negara</label>
                    <input type="text" name="negara" id="" value="{{ $pasien->negara }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan negara"/>
                </div>
            </div>
            
            <hr class="my-10 border-gray-100">

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-1">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" value="{{ $pasien->jenis_kelamin }}" id="" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Status Nikah</label>
                    <select name="status_nikah" value="{{ $pasien->status_nikah }}" id="" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Pendidikan</option>
                        <option value="menikah">Menikah</option>
                        <option value="belum-menikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{ $pasien->email }}" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan email" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Umur</label>
                    <input type="text" name="umur" id="" value="{{ $pasien->umur }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan umur" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Agama</label>
                    <select name="agama" id="" value="{{ $pasien->agama }}" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kafir">Kafirun</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="" value="{{ $pasien->pekerjaan }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan pekerjaan"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Pendidikan</label>
                    <select name="pendidikan" id="" value="{{ $pasien->pendidikan }}" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Pendidikan</option>
                        <option value="sarjana">Sarjana</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">NPWP</label>
                    <input type="text" name="npwp" id="" value="{{ $pasien->npwp }}" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan nomor npwp"/>
                </div>
            </div>

            <button class="bg-blue-500 text-white mt-5 rounded-lg w-40 py-3 font-medium uppercase hover:bg-blue-600">Update</button>
        </form>
    </div>
</x-dashboard>