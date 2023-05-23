<?php

namespace App\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Footer_User_model;

class User extends BaseController
{
    protected $Visi;
    protected $Misi;
    protected $FooterUser;

    public function __construct()
    {
        $this->Visi = new Visi();
        $this->Misi = new Misi();
        $this->FooterUser = new Footer_User_model();
    }

    public function index()
    {
        $contact = $this->FooterUser->findAll();

        $data = [
            'visi' => $this->Visi->findAll(),
            'misi' => $this->Misi->findAll(),
            'alamat' => $contact[0]['alamat'],
            'no_telpon' => $contact[0]['no_telpon'],
            'email' => $contact[0]['email'],
        ];

        return view('Pages/User/index', $data);
    }
}
