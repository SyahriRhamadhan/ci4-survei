<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRespondenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_responden' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_kelamin' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'usia' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'kategori_responden' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);

        $this->forge->addKey('id_responden', true);
        $this->forge->createTable('responden');
    }

    public function down()
    {
        $this->forge->dropTable('responden');
    }
}
