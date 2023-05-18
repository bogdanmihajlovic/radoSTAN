<?php

namespace App\Models;

use CodeIgniter\Model;

class OpremaModel extends Model
{
    protected $table = 'oprema';
    protected $primaryKey = 'idOprema';
    protected $idOprema = 'idOprema';
    protected $naziv = 'naziv';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['idOprema', 'naziv'];
}