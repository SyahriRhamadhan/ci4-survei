<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lembaga extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lembaga' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_lembaga' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_biro' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_lembaga', true);
        $this->forge->addForeignKey('id_biro', 'biro', 'id_biro', 'CASCADE', 'CASCADE');
        $this->forge->createTable('lembaga');
    }

    public function down()
    {
        $this->forge->dropTable('lembaga');
    }
}
