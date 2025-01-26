<x-dashboard>
    <h1 class="text-lg font-medium italic text-gray-400">/pasien/editData</h1>

    <div class="mt-10">
        <h2 class="text-md font-bold mb-3 uppercase text-gray-800">Data Sosial</h2>
        <form action="" class="">
            {{-- <div class="flex flex-col gap-1">
                <label for="">No MR</label>
                <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">Nama</label>
                <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" />
            </div> --}}

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-1">
                    <label for="">Tanggal MR</label>
                    <input type="date" name="" id="" class="border outline-none px-3 py-2 rounded-md" />
                </div>
                
                <div class="flex flex-col gap-1">
                    <label for="">Alamat</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan alamat"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Kota</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kota" />
                </div>
    
                <div class="flex flex-col gap-1">
                    <label for="">Kabupaten</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kabupaten"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Kecamatan</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kecamatan"/>
                </div>
    
                <div class="flex flex-col gap-1">
                    <label for="">Kelurahan</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan kelurahan"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Provinsi</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan provinsi"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Negara</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan negara"/>
                </div>
            </div>
            
            <hr class="my-10 border-gray-100">

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-1">
                    <label for="">Jenis Kelamin</label>
                    <select name="" id="" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Status Nikah</label>
                    <select name="" id="" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Pendidikan</option>
                        <option value="menikah">Menikah</option>
                        <option value="belum-menikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Email</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan email" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Umur</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan umur" />
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Agama</label>
                    <select name="" id="" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kafir">Kafirun</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan pekerjaan"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">Pendidikan</label>
                    <select name="" id="" class="border outline-none px-3 py-2.5 rounded-md">
                        <option value="" disabled>Pilih Pendidikan</option>
                        <option value="sarjana">Sarjana</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="">NPWP</label>
                    <input type="text" name="" id="" class="border outline-none px-3 py-2 rounded-md" placeholder="inputkan nomor npwp"/>
                </div>
            </div>
        </form>
    </div>
</x-dashboard>