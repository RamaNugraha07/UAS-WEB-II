<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nis'                 =>  '1',
                'nama'                =>  'Umar',
                'jenis_kelamin'       =>  'laki',
                'tempat_lahir'        =>  'Solo',
                'tanggal_lahir'       =>  '2013-05-23',
                'alamat'              =>  'jl. mawar - solo',
                'kelas'               =>  '4'
            ],
            [
                'nis'                 =>  '2',
                'nama'                =>  'Amar',
                'jenis_kelamin'       =>  'laki',
                'tempat_lahir'        =>  'Jombang',
                'tanggal_lahir'       =>  '2013-02-12',
                'alamat'              =>  'jl. kamboja - jombang',
                'kelas'               =>  '4'
            ],
            [
                'nis'                 =>  '3',
                'nama'                =>  'Siti',
                'jenis_kelamin'       =>  'perempuan',
                'tempat_lahir'        =>  'jogja',
                'tanggal_lahir'       =>  '2014-10-02',
                'alamat'              =>  'jl. anggrek - jogja',
                'kelas'               =>  '4'
            ],
            [
                'nis'                 =>  '4',
                'nama'                =>  'Fatimah',
                'jenis_kelamin'       =>  'perempuan',
                'tempat_lahir'        =>  'jogja',
                'tanggal_lahir'       =>  '2014-09-15',
                'alamat'              =>  'jl. tulip - jogja',
                'kelas'               =>  '4'
            ],
            [
                'nis'                 =>  '5',
                'nama'                =>  'Udin',
                'jenis_kelamin'       =>  'laki',
                'tempat_lahir'        =>  'bandung',
                'tanggal_lahir'       =>  '2014-12-29',
                'alamat'              =>  'jl. matahari - bandung',
                'kelas'               =>  '4'
            ]
        ];
        $this->db->table('siswa')->insertBatch($data);
    }
}
