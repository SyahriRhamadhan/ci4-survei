<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pimpinan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pimpinan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pimpinan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'jabatan_pimpinan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'username_pimpinan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'password_pimpinan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id_pimpinan', true);
        $this->forge->createTable('pimpinan');
    }

    public function down()
    {
        $this->forge->dropTable('pimpinan');
    }
}
