<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveiModel extends Model
{
    protected $table = 'survei';
    protected $primaryKey = 'id_survei';
    protected $allowedFields = ['judul_survei', 'deksripsi', 'tgl_mulai', 'tgl_selesai', 'status_survei'];

    protected $useTimestamps = true;
}
