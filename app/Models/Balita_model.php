<?php

namespace App\Models;

use CodeIgniter\Model;

class Balita_model extends Model
{
    protected $table = 'balita';
    protected $primaryKey = 'id_balita';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_balita', 'id_jk_balita', 'id_ortu', 'umur', 'tinggi', 'berat'];

    public function balitaXortuXbalita()
    {
        // $this->join('ortu', 'balita.id_ortu = ortu.id_ortu')->find();
        $this->join('ortu', 'balita.id_ortu = ortu.id_ortu');
        $this->join('jk', 'jk.id_jk = balita.id_jk_balita');
        return  $this->findAll();
    }
}
