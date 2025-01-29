<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $poli = Poli::get();

        return view('poli.poli', compact('poli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('poli.tambahPoli');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $poli = new Poli();
        $poli->nama = $request->nama;
        $poli->deskripsi = $request->deskripsi;

        $poli->save();
        return redirect()->route('poli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $poli = Poli::find($id);
        return view('poli.editPoli', compact('poli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $poli = Poli::find($id);
        $poli->nama = $request->nama;
        $poli->deskripsi = $request->deskripsi;

        $poli->update();
        return redirect()->route('poli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        $poli = Poli::find($id);
        $poli->delete();
        
        return redirect()->route('poli.index');
    }
}
