<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pratiquant extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'nom',
        'prenoms',
        'dat_nais',
        'lieu',
        'contact',
        'profession',
        'num_passeport',
        'grade',
        'contact_urgence',
        'photo',
       
    ];}
=======
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
>>>>>>> cd4568ce7e5c3b7e5e8dee225775ddd19a50711f
