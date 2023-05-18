<?php

namespace App\Models;

use CodeIgniter\Model;

class ZahtevModel extends Model
{
    protected $table = 'zahtev';
    protected $primaryKey = 'idZahtev';
    protected $idZahtev = 'idZahtev';
    protected $ime_prezime = 'ime_prezime';
    protected $email = 'email';
    protected $username = 'username';
    protected $password = 'password';
    protected $telefon = 'telefon';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idZahtev', 'ime_prezime', 'email', 'username', 'password', 'telefon'];
}