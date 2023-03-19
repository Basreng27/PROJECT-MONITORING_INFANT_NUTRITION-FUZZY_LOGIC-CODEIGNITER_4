<?php

namespace App\Models;

use CodeIgniter\Model;

class Pb_U_model extends Model
{
    protected $table = 'pb_u';
    protected $primaryKey = 'id_pb_u';
    protected $useTimestamps = false;
    protected $allowedFields = ['umur_pb_u', 'min_3_sd', 'min_2_sd', 'min_1_sd', 'median', 'plus_1_sd', 'plus_1_sd', 'plus_1_sd', 'id_jk_pb_u'];

    public function whereJk($id_jk)
    {
        return $this->where(['id_jk_pb_u' => $id_jk])->findAll();
    }
}
