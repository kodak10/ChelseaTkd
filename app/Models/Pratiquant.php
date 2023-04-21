<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pratiquant extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_passeport',
        'grade',
        'password',
        'nom',
        'prenoms',
        'date_nais',
        'lieu_nais',
        'profession',
        'contact_pratiquant',
        'nom_parent',
        'contact_parent1',
        'contact_parent2',
        'groupe_sanguin',
        'photo',

    ];
}
