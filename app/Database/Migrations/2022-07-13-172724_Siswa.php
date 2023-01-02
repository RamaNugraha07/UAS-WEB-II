<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nis'                => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'              => [
                'type'          => 'VARCHAR',
                'constraint'    => 250,

            ],
            'jenis_kelamin'         => [
                'type'              => 'ENUM',
                'constraint'        => "'laki','perempuan'",
            ],
            'tempat_lahir'          => [
                'type'              => 'VARCHAR',
                'constraint'        => 250,
            ],
            'tanggal_lahir' => [
                'type'           => 'DATE'
            ],
            'Alamat'              => [
                'type'          => 'VARCHAR',
                'constraint'    => 250,
            ],
            'Kelas'              => [
                'type'          => 'VARCHAR',
                'constraint'    => 250,
            ],
            ]);
            $this->forge->addPrimaryKey('nis');
            $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
