<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'tbl_prodi';
    protected $primaryKey = 'kode_prodi';
    protected $returnType = 'array';
    protected $allowedFields = ['kode_prodi', 'kode_jur', 'prodi'];
}
