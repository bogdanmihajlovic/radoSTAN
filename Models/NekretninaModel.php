<?php

namespace App\Models;

use CodeIgniter\Model;

class NekretninaModel extends Model
{
    protected $table = 'nekretnina';
    protected $primaryKey = 'idNekretnina';
    protected $idNekretnina = 'idNekretnina';
    protected $idTip = 'idTip';
    protected $idStanja = 'idStanja';
    protected $kvadratura = 'kvadratura';
    protected $drzava = 'drzava';
    protected $grad = 'grad';
    protected $opstina = 'opstina';
    protected $adresa = 'adresa';
    protected $idGrejanja = 'idGrejanja';
    protected $opis = 'opis';
    protected $broj_soba = 'broj_soba';
    protected $cena = 'cena';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idNekretnina', 'idTip', 'idStanja', 'kvadratura', 'drzava', 'grad', 'opstina',
        'adresa', 'idGrejanja', 'opis', 'broj_soba', 'cena'];

}