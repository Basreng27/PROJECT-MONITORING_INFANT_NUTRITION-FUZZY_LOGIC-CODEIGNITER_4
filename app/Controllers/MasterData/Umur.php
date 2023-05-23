<?php

namespace App\Controllers\MasterData;

use App\Controllers\BaseController;
use App\Models\Umur_model;

class Umur extends BaseController
{
    protected $UmurModel;

    public function __construct()
    {
        $this->UmurModel = new Umur_model();
    }

    public function prosesAddUmur()
    {
        if (!$this->validate([
            'kategori_umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Umur harus diisi'
                ]
            ],
            'keterangan_umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Umur harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/umur')->withInput();
        }

        $this->UmurModel->save([
            'kategori_umur' => $this->request->getVar('kategori_umur'),
            'keterangan_umur' => $this->request->getVar('keterangan_umur')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/umur');
    }

    public function prosesUpdateUmur()
    {
        if (!$this->validate([
            'kategori_umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori Umur harus diisi'
                ]
            ],
            'keterangan_umur' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan Umur harus diisi'
                ]
            ],
            'umur_dari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Umur Dari harus diisi'
                ]
            ],
            'umur_sampai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Umur Sampai harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/umur')->withInput();
        }
        $umur_dari = $this->request->getVar('umur_dari');
        $umur_sampai = $this->request->getVar('umur_sampai');

        if ($umur_dari > $umur_sampai || $umur_dari == $umur_sampai) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/umur')->withInput();
        }

        $this->UmurModel->save([
            'id_umur' => $this->request->getVar('id_umur'),
            'umur_dari' => $umur_dari,
            'umur_sampai' => $umur_sampai,
            'kategori_umur' => $this->request->getVar('kategori_umur'),
            'keterangan_umur' => $this->request->getVar('keterangan_umur')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/umur');
    }

    public function deleteUmur($id_umur)
    {
        $this->UmurModel->delete($id_umur);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/umur');
    }
}
