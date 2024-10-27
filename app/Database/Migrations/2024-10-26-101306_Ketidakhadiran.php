<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ketidakhadiran extends Migration
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
            'id_pegawai' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'file' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'status_pengajuan' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->addForeignKey('id_pegawai', 'pegawai', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ketidakhadiran');
    }

    public function down()
    {
        $this->forge->dropTable('ketidakhadiran');
    }
}
