<?php

namespace App\Controllers\Setting;

use App\Controllers\BaseController;
use App\Models\Footer_User_model;

class FooterUser extends BaseController
{
    protected $FooterUser;

    public function __construct()
    {
        $this->FooterUser = new Footer_User_model();
    }

    public function prosesUpdateFooter()
    {
        if (!$this->validate([
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi'
                ]
            ],
            'no_telpon' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'No Telpon harus diisi',
                    'numeric' => 'No Telpon harus berupa angka',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahkan');
            return redirect()->to('/footer-user')->withInput();
        }

        $this->FooterUser->save([
            'id' => $this->request->getVar('id'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telpon' => $this->request->getVar('no_telpon'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('berhasil', 'Data berhasil ditambahkan');
        return redirect()->to('/footer-user');
    }
}
