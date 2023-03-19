<?php

namespace App\Controllers;

use App\Models\Data_model;
use App\Models\Balita_model;

class Grafik extends BaseController
{
    protected $DataModel;
    protected $BalitaModel;

    public function __construct()
    {
        $this->DataModel = new Data_model();
        $this->BalitaModel = new Balita_model();
    }

    public function index()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'data_balita' => $this->BalitaModel->balitaXortuXbalita()
        ];

        return view('Pages/Admin/Grafik/grafik', $data);
    }

    public function oneGrafik($id_balita)
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $balita = $this->BalitaModel->find($id_balita);

        $data = [
            'balita' => $balita,
            'totalData' => $this->DataModel->where(['id_balita' => $id_balita])->findAll()
        ];

        return view('Pages/Admin/Grafik/one_grafik', $data);
    }
}
