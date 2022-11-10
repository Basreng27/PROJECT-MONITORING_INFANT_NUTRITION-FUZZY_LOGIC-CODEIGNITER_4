<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/home');
    }

    public function orangTua()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/Master-Data-Pasien/orang_tua');
    }

    public function balita()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/Master-Data-Pasien/balita');
    }

    public function umur()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/Master-Data/umur');
    }

    public function beratBadan()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/Master-Data/berat_badan');
    }

    public function tinggiBadan()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/Master-Data/tinggi_badan');
    }

    public function perhitungan()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        return view('Pages/Admin/perhitungan');
    }
}
