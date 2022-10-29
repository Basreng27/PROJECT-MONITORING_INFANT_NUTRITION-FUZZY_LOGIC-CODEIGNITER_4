<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('Pages/Admin/home');
    }

    public function orangTua()
    {
        return view('Pages/Admin/orang_tua');
    }

    public function balita()
    {
        return view('Pages/Admin/balita');
    }

    public function statusGizi()
    {
        return view('Pages/Admin/status_gizi');
    }
}
