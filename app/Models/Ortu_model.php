<?php

namespace App\Models;

use CodeIgniter\Model;

class Ortu_model extends Model
{
    protected $table = 'ortu';
    protected $primaryKey = 'id_ortu';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_ortu', 'id_jk_ortu'];

    public function ortuXjk()
    {
        return $this->join('jk', 'jk.id_jk = ortu.id_jk_ortu')->findAll();
    }
}
