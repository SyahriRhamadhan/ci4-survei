<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_unit' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_unit' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'username_unit' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'password_unit' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'bandage_image_url' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_layanan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_upa' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_lembaga' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_upps' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_unit', true);
        $this->forge->addForeignKey('id_upa', 'upa', 'id_upa', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_lembaga', 'lembaga', 'id_lembaga', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_upps', 'upps', 'id_upps', 'CASCADE', 'CASCADE');
        $this->forge->createTable('unit');
    }

    public function down()
    {
        $this->forge->dropTable('unit');
    }
}
