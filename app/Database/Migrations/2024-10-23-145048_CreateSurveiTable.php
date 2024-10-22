<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSurveiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_survei' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_survei' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'deksripsi' => [
                'type'       => 'TEXT',
            ],
            'tgl_mulai' => [
                'type' => 'DATE',
            ],
            'tgl_selesai' => [
                'type' => 'DATE',
            ],
            'status_survei' => [
                'type'       => 'ENUM',
                'constraint' => ['aktif', 'nonaktif'],
                'default'    => 'nonaktif',
            ],
            'id_pertanyaan' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'id_hasil' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addKey('id_survei', true);
        $this->forge->addForeignKey('id_pertanyaan', 'pertanyaan', 'id_pertanyaan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_hasil', 'hasil_survei', 'id_hasil', 'CASCADE', 'CASCADE');
        $this->forge->createTable('survei');
    }

    public function down()
    {
        $this->forge->dropTable('survei');
    }
}
