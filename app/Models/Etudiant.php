<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'adresse',
        'niveau',
        'cni',
        'centre',
        'filiere_id',
    ];
    


    public function filier()
    {
        return $this->belongsTo(Filier::class, 'filiere_id');
    }
}
