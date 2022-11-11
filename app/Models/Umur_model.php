<?php

namespace App\Models;

use CodeIgniter\Model;

class Umur_model extends Model
{
    protected $table = 'umur';
    protected $primaryKey = 'id_umur';
    protected $useTimestamps = false;
    protected $allowedFields = ['kategori_umur', 'keterangan_umur'];
}
