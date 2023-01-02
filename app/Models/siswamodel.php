<?php
namespace App\Models;
use CodeIgniter\Model;

class siswamodel extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'nis';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'kelas'];
    protected $useTimestamps = false;
}