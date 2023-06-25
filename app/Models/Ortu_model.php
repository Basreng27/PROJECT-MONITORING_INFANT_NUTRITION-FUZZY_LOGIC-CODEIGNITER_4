<?php

namespace App\Models;

use CodeIgniter\Model;

class Ortu_model extends Model
{
    protected $table = 'ortu';
    protected $primaryKey = 'id_ortu';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_ortu', 'id_jk_ortu', 'alamat', 'pekerjaan', 'no_telpon', 'nik'];

    public function ortuXjk($jk = null)
    {
        $this->join('jk', 'jk.id_jk = ortu.id_jk_ortu');

        if ($jk)
            $this->where('ortu.id_jk_ortu', $jk);

        $query = $this->findAll();

        return $query;
    }
}
