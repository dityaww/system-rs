<?php

namespace App\Http\Controllers;
use App\Models\Pasien;

class Dashboard extends Controller
{
    //
    public function index()
    {
        //
        $jumlahPasien = Pasien::count();
      
        return view('home', compact('jumlahPasien'));
    }
}
