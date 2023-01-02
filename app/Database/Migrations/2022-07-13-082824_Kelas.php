<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kelas'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 250,
            ],
            'wali_kelas'    => [
                'type'          => 'VARCHAR',
                'constraint'    => 250,
            ]
            ]);
            $this->forge->addPrimaryKey('kelas');
            $this->forge->createTable('kelas'); 
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
