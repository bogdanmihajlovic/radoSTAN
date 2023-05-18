<?php

namespace App\Models;

use CodeIgniter\Model;

class ImaOpremaModel extends Model
{
    protected $table = 'ima_oprema';
    protected $primaryKey = array('idNekretnina','idOprema');
    protected $idNekretnina = 'idNekretnina';
    protected $idOprema = 'idOprema';

    protected $returnType = 'object';

    protected $allowedFields = ['idNekretnine', 'idOprema'];
}