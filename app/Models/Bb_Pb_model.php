<?php

namespace App\Models;

use CodeIgniter\Model;

class Bb_Pb_model extends Model
{
    protected $table = 'bb_pb';
    protected $primaryKey = 'id_bb_pb';
    protected $useTimestamps = false;
    protected $allowedFields = ['panjang_badan_bb_pb', 'min_3_sd', 'min_2_sd', 'min_1_sd', 'median', 'plus_1_sd', 'plus_1_sd', 'plus_1_sd', 'id_jk_bb_pb'];

    public function whereJk($id_jk, $kategori)
    {
        return $this->where(['id_jk_bb_pb' => $id_jk, 'kategori_bb_pb' => $kategori])->findAll();
    }
}
