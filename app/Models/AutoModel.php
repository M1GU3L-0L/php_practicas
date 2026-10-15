<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoModel extends Model
{
    protected $table = 'autos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['marca', 'modelo', 'anio', 'descripcion'];
}
