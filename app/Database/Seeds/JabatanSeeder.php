<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JabatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'jabatan'    => 'Manager',
                
            ],
            [
                'jabatan'    => 'Supervisor',
                
            ],
            [
                'jabatan'    => 'Staff',
                
            ],
            [
                'jabatan'    => 'Operator',
                
            ],
        ];

        // Menggunakan query builder untuk insert batch data
        $this->db->table('jabatan')->insertBatch($data);
    }
}
