<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdajeModel extends Model
{
    protected $table = 'prodaje';
    protected $primaryKey = array('idKorisnik', 'idNekretnina');
    protected $idKorisnik = 'idKorisnik';
    protected $idNekretnina = 'idNekretnina';

    protected $returnType = 'object';

    protected $allowedFields = ['idKorisnik', 'idNekretnina'];
}