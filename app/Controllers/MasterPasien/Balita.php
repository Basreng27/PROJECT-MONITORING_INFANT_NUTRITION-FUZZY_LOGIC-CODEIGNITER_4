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
                    'required' => '{field} harus diisi'
                ]
            ],
            'id_ortu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tinggi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'berat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/balita')->withInput();
        }

        $this->OrtuModel->save([
            'nama_ortu' => $this->request->getVar('nama_ortu'),
            'jk_ortu' => $this->request->getVar('jk_ortu')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/orang-tua');
    }

    public function prosesUpdateOrtu()
    {
        if (!$this->validate([
            'nama_ortu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/orang-tua')->withInput();
        }

        $this->OrtuModel->save([
            'id_ortu' => $this->request->getVar('id_ortu'),
            'nama_ortu' => $this->request->getVar('nama_ortu'),
            'jk_ortu' => $this->request->getVar('jk_ortu')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/orang-tua');
    }

    public function deleteOrtu($id_ortu)
    {
        $this->OrtuModel->delete($id_ortu);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/orang-tua');
    }
}
