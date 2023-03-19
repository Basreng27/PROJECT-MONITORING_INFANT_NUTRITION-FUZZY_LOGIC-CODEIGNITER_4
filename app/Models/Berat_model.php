<?php

namespace App\Models;

use CodeIgniter\Model;

class Berat_model extends Model
{
    protected $table = 'berat';
    protected $primaryKey = 'id_berat';
    protected $useTimestamps = false;
    protected $allowedFields = ['kategori_berat', 'keterangan_berat'];
}
