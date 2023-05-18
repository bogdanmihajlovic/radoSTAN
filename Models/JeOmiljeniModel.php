<?php

namespace App\Models;

use CodeIgniter\Model;

class JeOmiljeniModel extends Model
{
    protected $table = 'je_omiljeni';
    protected $primaryKey = array('idKorisnik', 'idNekretnina');
    protected $idKorisnik = 'idKorisnik';
    protected $idNekretnina = 'idNekretnina';

    protected $returnType = 'object';

    protected $allowedFields = ['idKorisnik', 'idNekretnina'];
}