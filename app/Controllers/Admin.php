<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('Pages/Admin/home');
    }

    public function orangTua()
    {
        return view('Pages/Admin/Master-Data-Pasien/orang_tua');
    }

    public function balita()
    {
        return view('Pages/Admin/Master-Data-Pasien/balita');
    }

    public function umur()
    {
        return view('Pages/Admin/Master-Data/umur');
    }

    public function beratBadan()
    {
        return view('Pages/Admin/Master-Data/berat_badan');
    }

    public function tinggiBadan()
    {
        return view('Pages/Admin/Master-Data/tinggi_badan');
    }

    public function perhitungan()
    {
        return view('Pages/Admin/perhitungan');
    }
}
