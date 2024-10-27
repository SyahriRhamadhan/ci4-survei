<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LokasiPresensi extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat_lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tipe_lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'latitude' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'longitude' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'radius' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'zona_waktu' => [
                'type' => 'VARCHAR',
                'constraint' => '4',
            ],
            'nama_lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jam_masuk' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'jam_pulang' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Primary Key nya adalah Id
        $this->forge->addPrimaryKey('id');
        // Nama tabelnya adalah users
        $this->forge->createTable('lokasi_presensi');
    }

    public function down()
    {
        $this->forge->dropTable('lokasi_presensi');
    }
}
