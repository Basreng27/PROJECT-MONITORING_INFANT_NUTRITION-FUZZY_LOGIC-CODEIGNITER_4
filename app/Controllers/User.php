<?php

namespace App\Controllers;

use App\Models\Misi;
use App\Models\Visi;

class User extends BaseController
{
    protected $Visi;
    protected $Misi;

    public function __construct()
    {
        $this->Visi = new Visi();
        $this->Misi = new Misi();
    }

    public function index()
    {
        $data = [
            'visi' => $this->Visi->findAll(),
            'misi' => $this->Misi->findAll()
        ];

        return view('Pages/User/index', $data);
    }
}
