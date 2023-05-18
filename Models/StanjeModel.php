<?php

namespace App\Models;

use CodeIgniter\Model;

class StanjeModel extends Model
{
    protected $table = 'stanje';
    protected $primaryKey = 'idStanje';
    protected $idStanje = 'idStanje';
    protected $naziv = 'naziv';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idStanje', 'naziv'];
}