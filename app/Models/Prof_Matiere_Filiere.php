<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prof_Matiere_Filiere extends Model
{
    protected $fillable = [
        'prof_id',
        'matiere_id',
        'filiere_id',
        'semaistre',
        'annee_scolaire'
    ];
    public $timestamps = false;

}
