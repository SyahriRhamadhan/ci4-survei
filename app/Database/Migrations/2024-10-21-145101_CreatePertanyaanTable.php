<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePertanyaanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pertanyaan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'pertanyaan' => [
                'type' => 'TEXT',
            ],
            'tipe_pertanyaan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id_pertanyaan', true);
        $this->forge->createTable('pertanyaan');
    }

    public function down()
    {
        $this->forge->dropTable('pertanyaan');
    }
}
