<?php

namespace App\Models;

use CodeIgniter\Model;

class Misi extends Model
{
    protected $table = 'misi';
    protected $useTimestamps = false;
    protected $allowedFields = ['misi'];
}
