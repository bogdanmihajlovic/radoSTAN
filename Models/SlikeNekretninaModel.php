<?php

namespace App\Models;

use CodeIgniter\Model;

class SlikeNekretninaModel extends Model
{
    protected $table = 'slike_nekretnina';
    protected $primaryKey = 'idSlika';
    protected $idSlika = 'idSlika';
    protected $idNekretnina = 'idNekretnina';
    protected $slika = 'slika';
    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idSlika', 'idNekretnina', 'slika'];
}