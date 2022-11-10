<?php

namespace App\Models;

use CodeIgniter\Model;

class Ortu_model extends Model
{
    protected $table = 'ortu';
    protected $primaryKey = 'id_ortu';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_ortu', 'jk_ortu'];
}
