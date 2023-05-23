<?php

namespace App\Models;

use CodeIgniter\Model;

class Footer_User_model extends Model
{
    protected $table = 'footer_user';
    protected $primaryKey = 'id';
    protected $useTimestamps = false;
    protected $allowedFields = ['alamat', 'no_telpon', 'email'];
}
