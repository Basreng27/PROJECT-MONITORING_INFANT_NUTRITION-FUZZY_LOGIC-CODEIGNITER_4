<?php

namespace App\Controllers;

use App\Models\Users_model;

class Login extends BaseController
{
    protected $UsersModel;

    public function __construct()
    {
        $this->UsersModel = new Users_model();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('Pages/Login-Regist/login', $data);
    }

    public function prosesLogin()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/')->withInput();
        }

        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $cekLogin = $this->UsersModel->getUser($username, $password);
        if (empty($cekLogin)) {
            session()->setFlashdata('gagal', 'gagal untuk login');

            return redirect()->to('/');
        } else {
            $data_session = array(
                'nama' => $cekLogin['nama'],
                'username' => $cekLogin['username'],
                'stat' => "login-monitoring"
            );
            session()->set($data_session);

            return redirect()->to('/home');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
