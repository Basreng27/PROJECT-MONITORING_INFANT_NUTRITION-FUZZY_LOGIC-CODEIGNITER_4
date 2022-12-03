<?php

namespace App\Models;

use CodeIgniter\Model;

class Hasil_model extends Model
{
    protected $table = 'hasil';
    protected $primaryKey = 'id_hasil';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_balita', 'status_bb_u', 'status_pb_u', 'status_bb_pb'];
}
