<?php

namespace App\Models;

use CodeIgniter\Model;

class Balita_model extends Model
{
    protected $table = 'balita';
    protected $primaryKey = 'id_balita';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_balita', 'jk_balita', 'id_ortu', 'umur', 'tinggi', 'berat'];
}
