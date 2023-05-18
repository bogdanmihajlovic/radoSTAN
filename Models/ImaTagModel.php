<?php

namespace App\Models;

use CodeIgniter\Model;

class ImaTagModel extends Model
{
    protected $table = 'ima_tag';
    protected $primaryKey = array('idTag', 'idNekretnina');
    protected $idTag = 'idTag';
    protected $idNekretnina = 'idNekretnina';

    protected $returnType = 'object';

    protected $allowedFields = ['idTag', 'idNekretnina'];
}