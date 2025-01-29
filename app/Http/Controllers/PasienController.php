<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pasien = Pasien::get();

        return view('pasien.pasien', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pasien.tambahPasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pasien = new Pasien();

        $pasien->nama = $request->nama;
        $pasien->no_rm = $request->no_rm;
        $pasien->tanggal_rm = $request->tanggal_rm;
        $pasien->alamat = $request->alamat;
        $pasien->kota = $request->kota;
        $pasien->kelurahan = $request->kelurahan;
        $pasien->kecamatan = $request->kecamatan;
        $pasien->kabupaten = $request->kabupaten;
        $pasien->provinsi = $request->provinsi;
        $pasien->negara = $request->negara;
        $pasien->umur = $request->umur;
        $pasien->email = $request->email;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->status_nikah = $request->status_nikah;
        $pasien->agama = $request->agama;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->pendidikan = $request->pendidikan;
        $pasien->npwp = $request->npwp;

        $pasien->save();
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pasien = Pasien::find($id);
        return view('pasien.editPasien', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $pasien = Pasien::find($id);

        $pasien->nama = $request->nama;
        $pasien->no_rm = $request->no_rm;
        $pasien->tanggal_rm = $request->tanggal_rm;
        $pasien->alamat = $request->alamat;
        $pasien->kota = $request->kota;
        $pasien->kelurahan = $request->kelurahan;
        $pasien->kecamatan = $request->kecamatan;
        $pasien->kabupaten = $request->kabupaten;
        $pasien->provinsi = $request->provinsi;
        $pasien->negara = $request->negara;
        $pasien->umur = $request->umur;
        $pasien->email = $request->email;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->status_nikah = $request->status_nikah;
        $pasien->agama = $request->agama;
        $pasien->pekerjaan = $request->pekerjaan;
        $pasien->pendidikan = $request->pendidikan;
        $pasien->npwp = $request->npwp;

        $pasien->update();
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
