<?php

namespace App\Models;

use CodeIgniter\Model;

class Tinggi_model extends Model
{
    protected $table = 'tinggi';
    protected $primaryKey = 'id_tinggi';
    protected $useTimestamps = false;
    protected $allowedFields = ['kategori_tinggi', 'keterangan_tinggi'];
}
