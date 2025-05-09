<?php

namespace App\Models;

use App\Models\Filier;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'cni',
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'niveau_etude',
        'adresse',
        'filiere_id',
        'centre',
        'role',
        'validation',
        'annee_scolaire',
        'semaistre'
    ];

    public function filiere()
    {
        return $this->belongsTo(Filier::class, 'filiere_id');
    }
}
