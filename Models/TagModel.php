<?php

namespace App\Models;

use CodeIgniter\Model;

class TagModel extends Model
{
    protected $table = 'tag';
    protected $primaryKey = 'idTag';
    protected $idTag = 'idTag';
    protected $naziv = 'naziv';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idTag', 'naziv'];
}