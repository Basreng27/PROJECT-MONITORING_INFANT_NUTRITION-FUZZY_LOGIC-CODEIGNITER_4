<?php

namespace App\Controllers;

use App\Models\Ortu_model;

class Admin extends BaseController
{
    protected $OrtuModel;

    public function __construct()
    {
        $this->OrtuModel = new Ortu_model();
    }

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

        $data = [
            'validation' => \Config\Services::validation(),
            'data_ortu' => $this->OrtuModel->findAll()
        ];

        return view('Pages/Admin/Master-Data-Pasien/orang_tua', $data);
    }

    public function balita()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('Pages/Admin/Master-Data-Pasien/balita', $data);
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
