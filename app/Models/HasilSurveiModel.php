<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilSurveiModel extends Model
{
    protected $table = 'hasil_survei';
    protected $primaryKey = 'id_hasil';
    protected $allowedFields = ['tanggal_pengisian', 'id_responden'];

    protected $useTimestamps = true;
}
