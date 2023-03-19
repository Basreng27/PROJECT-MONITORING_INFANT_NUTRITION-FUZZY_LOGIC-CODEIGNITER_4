<?php

namespace App\Models;

use CodeIgniter\Model;

class Bb_U_model extends Model
{
    protected $table = 'bb_u';
    protected $primaryKey = 'id_bb_u';
    protected $useTimestamps = false;
    protected $allowedFields = ['umur_bb_u', 'min_3_sd', 'min_2_sd', 'min_1_sd', 'median', 'plus_1_sd', 'plus_1_sd', 'plus_1_sd', 'id_jk_bb_u'];

    public function whereJk($id_jk)
    {
        return $this->where(['id_jk_bb_u' => $id_jk])->findAll();
    }
}
