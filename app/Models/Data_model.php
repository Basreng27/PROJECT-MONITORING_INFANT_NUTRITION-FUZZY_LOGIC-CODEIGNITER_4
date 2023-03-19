<?php

namespace App\Models;

use CodeIgniter\Model;

class Data_model extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id_data';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_balita', 'umur', 'tinggi', 'berat', 'tanggal'];

    public function dataXbalita()
    {
        $this->join('balita', 'balita.id_balita = data.id_balita');
        $this->join('jk', 'jk.id_jk = balita.id_jk_balita');
        $this->join('ortu', 'ortu.id_ortu = balita.id_ortu');

        return $this->findAll();
    }

    public function vHitung()
    {
        $this->select('*, data.id_data AS idData');
        $this->join('balita', 'balita.id_balita = data.id_balita');
        $this->join('jk', 'jk.id_jk = balita.id_jk_balita');
        $this->join('ortu', 'ortu.id_ortu = balita.id_ortu');
        // $this->join('hasil', 'balita.id_balita = hasil.id_balita', 'LEFT');
        $this->join('hasil', 'data.id_data = hasil.id_data', 'LEFT');

        return $this->findAll();
    }
}
