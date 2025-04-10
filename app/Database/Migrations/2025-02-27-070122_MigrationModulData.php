<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationModulData extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' => [
                'type' => 'INT',
                'undigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'kode' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ],
            'nama_modul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ],
            'sks' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addkey('id', TRUE);
        $this->forge->createTable('tb_modul');
    }

    public function down()
    {
        $this->forge->dropTable('tb_modul');
    }
}
