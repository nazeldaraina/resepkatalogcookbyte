<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbResepmakananTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'r_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('r_id', true);
        $this->forge->createTable('tb_resepmakanan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_resepmakanan');
    }
}
