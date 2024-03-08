<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheteur extends Model
{
    use HasFactory;
     
    protected $table = 'acheteurs';
    protected $primaryKey = 'id';
    protected $fillable = [
    'nom',
    'prenom',
    'NNI',
    'telephone',
    'adresse'
];
}
