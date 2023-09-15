<?php

namespace App\Controllers;

use App\Models\Data_model;
use App\Models\Balita_model;

class Data extends BaseController
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
            'validation' => \Config\Services::validation(),
            'data_antropologi' => $this->DataModel->dataXbalita(),
            'data_balita' => $this->BalitaModel->findAll()
        ];

        return view('Pages/Admin/data', $data);
    }

    public function prosesAdd()
    {
        if (!$this->validate([
            'id_balita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Balita harus diisi'
                ]
            ],
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Umur harus diisi'
                ]
            ],
            'tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tinggi harus diisi'
                ]
            ],
            'berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Berat harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/data')->withInput();
        }

        $this->DataModel->save([
            'id_balita' => $this->request->getVar('id_balita'),
            'umur' => $this->request->getVar('umur'),
            'tinggi' => $this->request->getVar('tinggi'),
            'berat' => $this->request->getVar('berat'),
            'tanggal' => $this->request->getVar('tanggal')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/data');
    }

    public function delete($id_data)
    {
        $this->DataModel->delete($id_data);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/data');
    }

    public function allData()
    {
        if (session()->get('stat') != 'login-monitoring')
            return redirect('/');

        $data = [
            'data' => $this->BalitaModel->getAllData(),
        ];

        return view('Pages/admin/all_data', $data);
    }
}
