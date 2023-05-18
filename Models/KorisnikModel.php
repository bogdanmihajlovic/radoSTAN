<?php

namespace App\Models;

use CodeIgniter\Model;

class KorisnikModel extends Model
{
    protected $table = 'korisnik';
    protected $primaryKey = 'idKorisnik';
    protected $korisnik = 'idKorisnik';
    protected $ime_prezime = 'ime_prezime';
    protected $email = 'email';
    protected $username = 'username';
    protected $password = 'password';
    protected $telefon = 'telefon';
    protected $isAdmin = 'isAdmin';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';

    protected $allowedFields = ['idKorisnik', 'ime_prezime', 'email', 'username', 'password', 'telefon', 'isAdmin'];
}