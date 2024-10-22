<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Upps extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_upps' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_upps' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_jurusan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_upps', true);
        $this->forge->addForeignKey('id_jurusan', 'jurusan', 'id_jurusan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('upps');
    }

    public function down()
    {
        $this->forge->dropTable('upps');
    }
}
