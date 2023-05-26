<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pratiquant extends Model
{
    use HasFactory;

    protected $fillable = [
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
