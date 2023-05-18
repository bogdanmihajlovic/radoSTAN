<?php

namespace App\Models;

use CodeIgniter\Model;

class TipModel extends Model
{
    protected $table = 'tip';
    protected $primaryKey = 'idTip';
    protected $idTip = 'idTip';
    protected $naziv = 'naziv';


    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idTip', 'naziv'];
}