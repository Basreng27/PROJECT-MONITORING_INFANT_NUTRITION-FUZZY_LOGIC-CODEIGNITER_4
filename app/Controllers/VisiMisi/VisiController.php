<?php

namespace App\Controllers\VisiMisi;

use App\Controllers\BaseController;
use App\Models\Visi;

class VisiController extends BaseController
{
    protected $Visi;

    public function __construct()
    {
        $this->Visi = new Visi();
    }

    public function index()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'visi' => $this->Visi->findAll(),
            'validation' => \Config\Services::validation(),
        ];

        return view('Pages/Admin/VisiMisi/visi', $data);
    }

    public function store()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        if (!$this->validate([
            'visi' => [
                'rules' => 'required',
                'errors' => ['required' => 'Visi Harus diisi']
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahakan');
            return redirect()->to('/visi')->withInput();
        };

        $id_visi = $this->request->getVar('id_visi');

        if (!empty($id_visi)) {
            $this->Visi->save([
                'id' => $id_visi,
                'visi' => $this->request->getVar('visi')
            ]);
        } else {
            $this->Visi->save(['visi' => $this->request->getVar('visi')]);
        }

        session()->setFlashdata('berhasil', 'Data berhasil ditambahakan');
        return redirect()->to('/visi');
    }

    public function delete($id)
    {
        $this->Visi->delete($id);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/visi');
    }
}
