<?php

namespace App\Models;

use CodeIgniter\Model;

class RespondenModel extends Model
{
    protected $table = 'responden';
    protected $primaryKey = 'id_responden';
    protected $allowedFields = ['jenis_kelamin', 'usia', 'kategori_responden'];

    protected $useTimestamps = true;
}
