<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
        protected $table = 'vendeurs';
        protected $primaryKey = 'id';
        protected $fillable = [
        'nom',
        'prenom',
        'NNI',
        'telephone',
        'adresse'
    ];
    use HasFactory;
}
