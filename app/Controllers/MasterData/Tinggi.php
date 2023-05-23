<?php

namespace App\Controllers\MasterData;

use App\Controllers\BaseController;
use App\Models\Tinggi_model;

class Tinggi extends BaseController
{
    protected $TinggiModel;

    public function __construct()
    {
        $this->TinggiModel = new Tinggi_model();
    }

    public function prosesAddTinggi()
    {
        if (!$this->validate([
            'kategori_tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Tinggi harus diisi'
                ]
            ],
            'keterangan_tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Tinggi harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/tinggi-badan')->withInput();
        }

        $this->TinggiModel->save([
            'kategori_tinggi' => $this->request->getVar('kategori_tinggi'),
            'keterangan_tinggi' => $this->request->getVar('keterangan_tinggi')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/tinggi-badan');
    }

    public function prosesUpdateTinggi()
    {
        if (!$this->validate([
            'kategori_tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Tinggi harus diisi'
                ]
            ],
            'keterangan_tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Tinggi harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/tinggi-badan')->withInput();
        }

        $this->TinggiModel->save([
            'id_tinggi' => $this->request->getVar('id_tinggi'),
            'kategori_tinggi' => $this->request->getVar('kategori_tinggi'),
            'keterangan_tinggi' => $this->request->getVar('keterangan_tinggi')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/tinggi-badan');
    }

    public function deleteTinggi($id_tinggi)
    {
        $this->TinggiModel->delete($id_tinggi);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/tinggi-badan');
    }
}
