<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biro extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_biro' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_biro' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id_biro', true);
        $this->forge->createTable('biro');
    }

    public function down()
    {
        $this->forge->dropTable('biro');
    }
}
