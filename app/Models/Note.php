<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'matiere_id',
        'etudiant_id',
        'prof_id',
        'note',
        'controle_id',
        'filiere_id',
        'matiere',
        'annee_scolaire',
        'semaistre'
    ];
}
