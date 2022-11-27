<?php

namespace App\Controllers;

use App\Models\Ortu_model;
use App\Models\Balita_model;
use App\Models\Umur_model;
use App\Models\Berat_model;
use App\Models\Tinggi_model;
use App\Models\Jk_model;
use App\Models\Bb_U_model;
use App\Models\Pb_U_model;
use App\Models\Bb_Pb_model;

class Admin extends BaseController
{
    protected $OrtuModel;
    protected $BalitaModel;
    protected $UmurModel;
    protected $BeratModel;
    protected $TinggiModel;
    protected $JkModel;
    protected $Bb_UModel;
    protected $Pb_UModel;
    protected $Bb_PbModel;

    public function __construct()
    {
        $this->OrtuModel = new Ortu_model();
        $this->BalitaModel = new Balita_model();
        $this->UmurModel = new Umur_model();
        $this->BeratModel = new Berat_model();
        $this->TinggiModel = new Tinggi_model();
        $this->JkModel = new Jk_model();
        $this->Bb_UModel = new Bb_U_model();
        $this->Pb_UModel = new Pb_U_model();
        $this->Bb_PbModel = new Bb_Pb_model();
    }

    public function index()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'data_ortu' => $this->OrtuModel->countAllResults(),
            'data_balita' => $this->BalitaModel->countAllResults()
        ];

        return view('Pages/Admin/home', $data);
    }

    public function orangTua()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_ortu' => $this->OrtuModel->ortuXjk()
        ];

        return view('Pages/Admin/Master-Data-Pasien/orang_tua', $data);
    }

    public function balita()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_balita' => $this->BalitaModel->balitaXortuXbalita(),
            'data_ortu' => $this->OrtuModel->findAll()
        ];

        return view('Pages/Admin/Master-Data-Pasien/balita', $data);
    }

    public function umur()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_umur' => $this->UmurModel->findAll()
        ];

        return view('Pages/Admin/Master-Data/umur', $data);
    }

    public function beratBadan()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_berat' => $this->BeratModel->findAll()
        ];

        return view('Pages/Admin/Master-Data/berat_badan', $data);
    }

    public function tinggiBadan()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_tinggi' => $this->TinggiModel->findAll()
        ];

        return view('Pages/Admin/Master-Data/tinggi_badan', $data);
    }

    public function perhitungan()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_' => $this->BalitaModel->balitaXortuXbalita()
        ];

        return view('Pages/Admin/perhitungan', $data);
    }

    public function VBbU()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_v_bb_u' => $this->JkModel->findAll()
        ];

        return view('Pages/Admin/Master-Data/v_bb_u', $data);
    }

    public function BbU($id_jk)
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_bb_u' => $this->Bb_UModel->whereJk($id_jk),
            'jk' => $id_jk
        ];

        return view('Pages/Admin/Master-Data/bb_u', $data);
    }

    public function VPbU()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_v_pb_u' => $this->JkModel->findAll()
        ];

        return view('Pages/Admin/Master-Data/v_pb_u', $data);
    }

    public function PbU($id_jk)
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_pb_u' => $this->Pb_UModel->whereJk($id_jk),
            'jk' => $id_jk
        ];

        return view('Pages/Admin/Master-Data/pb_u', $data);
    }


    public function VBbPb()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_v_bb_pb' => $this->JkModel->findAll()
        ];

        return view('Pages/Admin/Master-Data/v_bb_pb', $data);
    }

    public function BbPb($id_jk)
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'data_bb_pb_0' => $this->Bb_PbModel->whereJk($id_jk, 1),
            'data_bb_pb_24' => $this->Bb_PbModel->whereJk($id_jk, 2),
            'jk' => $id_jk
        ];

        return view('Pages/Admin/Master-Data/bb_pb', $data);
    }
}
