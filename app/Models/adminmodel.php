<?php

namespace App\Models;

use CodeIgniter\Model;

class adminmodel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'email', 'password'];
}