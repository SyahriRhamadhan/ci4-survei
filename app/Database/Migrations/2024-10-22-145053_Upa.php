<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Upa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_upa' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_upa' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id_upa', true);
        $this->forge->createTable('upa');
    }

    public function down()
    {
        $this->forge->dropTable('upa');
    }
}
