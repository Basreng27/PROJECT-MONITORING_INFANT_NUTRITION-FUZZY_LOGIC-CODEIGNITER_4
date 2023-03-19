<?php

namespace App\Models;

use CodeIgniter\Model;

class Jk_model extends Model
{
    protected $table = 'jk';
    protected $primaryKey = 'id_jk';
    protected $useTimestamps = false;
    protected $allowedFields = ['jk'];
}
