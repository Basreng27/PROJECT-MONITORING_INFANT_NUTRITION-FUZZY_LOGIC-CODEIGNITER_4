<?php

namespace App\Controllers\VisiMisi;

use App\Controllers\BaseController;
use App\Models\Misi;

class MisiController extends BaseController
{
    protected $Misi;

    public function __construct()
    {
        $this->Misi = new Misi();
    }

    public function index()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $data = [
            'misi' => $this->Misi->findAll(),
            'validation' => \Config\Services::validation(),
        ];

        return view('Pages/Admin/VisiMisi/misi', $data);
    }

    public function store()
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        if (!$this->validate([
            'misi' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} Harus diisi']
            ]
        ])) {
            session()->setFlashdata('gagal', 'Data gagal ditambahakan');
            return redirect()->to('/misi')->withInput();
        };

        $id_misi = $this->request->getVar('id_misi');

        if (!empty($id_misi)) {
            $this->Misi->save([
                'id' => $id_misi,
                'misi' => $this->request->getVar('misi')
            ]);
        } else {
            $this->Misi->save(['misi' => $this->request->getVar('misi')]);
        }

        session()->setFlashdata('berhasil', 'Data berhasil ditambahakan');
        return redirect()->to('/misi');
    }

    public function delete($id)
    {
        $this->Misi->delete($id);

        session()->setFlashdata('berhasil-delete', 'Data berhasil delete');
        return redirect()->to('/misi');
    }
}
