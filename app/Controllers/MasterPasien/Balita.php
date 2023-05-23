<?php

namespace App\Controllers\MasterPasien;

use App\Controllers\BaseController;
use App\Models\Balita_model;

class Balita extends BaseController
{
    protected $BalitaModel;

    public function __construct()
    {
        $this->BalitaModel = new Balita_model();
    }

    public function prosesAddBalita()
    {
        if (!$this->validate([
            'nama_balita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Balita harus diisi'
                ]
            ],
            'id_ortu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Orang Tua harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/balita')->withInput();
        }

        $this->BalitaModel->save([
            'nama_balita' => $this->request->getVar('nama_balita'),
            'id_jk_balita' => $this->request->getVar('id_jk_balita'),
            'id_ortu' => $this->request->getVar('id_ortu')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/balita');
    }

    public function prosesUpdateBalita()
    {
        if (!$this->validate([
            'nama_balita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Balita harus diisi'
                ]
            ],
            'id_ortu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Orang Tua harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/balita')->withInput();
        }

        $this->BalitaModel->save([
            'id_balita' => $this->request->getVar('id_balita'),
            'nama_balita' => $this->request->getVar('nama_balita'),
            'id_jk_balita' => $this->request->getVar('id_jk_balita'),
            'id_ortu' => $this->request->getVar('id_ortu')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/balita');
    }

    public function deleteBalita($id_balita)
    {
        $this->BalitaModel->delete($id_balita);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/balita');
    }
}
