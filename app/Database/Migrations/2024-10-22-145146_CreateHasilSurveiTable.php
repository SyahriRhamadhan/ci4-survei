<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHasilSurveiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_hasil' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_pengisian' => [
                'type' => 'DATE',
            ],
            'id_responden' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('id_hasil', true);
        $this->forge->addForeignKey('id_responden', 'responden', 'id_responden', 'CASCADE', 'CASCADE');
        $this->forge->createTable('hasil_survei');
    }

    public function down()
    {
        $this->forge->dropTable('hasil_survei');
    }
}
