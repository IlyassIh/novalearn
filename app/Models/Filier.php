<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filier extends Model
{
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class, 'filiere_id'); 
    }
}
