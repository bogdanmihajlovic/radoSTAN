<?php

namespace App\Models;

use CodeIgniter\Model;

class GrejanjeModel extends Model
{
    protected $table      = 'grejanje';
    protected $primaryKey = 'idGrejanje';
    protected $idGrejanje = 'idGrejanje';
    protected $naziv = 'naziv';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';

    protected $allowedFields = ['idGrejanje', 'naziv'];

}