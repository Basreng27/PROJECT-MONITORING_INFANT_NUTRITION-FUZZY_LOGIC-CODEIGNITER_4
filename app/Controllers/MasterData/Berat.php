<?php

namespace App\Controllers\MasterData;

use App\Controllers\BaseController;
use App\Models\Berat_model;

class Berat extends BaseController
{
    protected $BeratModel;

    public function __construct()
    {
        $this->BeratModel = new Berat_model();
    }

    public function prosesAddBerat()
    {
        if (!$this->validate([
            'kategori_berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'keterangan_berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/berat-badan')->withInput();
        }

        $this->BeratModel->save([
            'kategori_berat' => $this->request->getVar('kategori_berat'),
            'keterangan_berat' => $this->request->getVar('keterangan_berat')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/berat-badan');
    }

    public function prosesUpdateBerat()
    {
        if (!$this->validate([
            'kategori_berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'keterangan_berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/berat-badan')->withInput();
        }

        $this->BeratModel->save([
            'id_berat' => $this->request->getVar('id_berat'),
            'kategori_berat' => $this->request->getVar('kategori_berat'),
            'keterangan_berat' => $this->request->getVar('keterangan_berat')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/berat-badan');
    }

    public function deleteBerat($id_berat)
    {
        $this->BeratModel->delete($id_berat);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/berat-badan');
    }
}
