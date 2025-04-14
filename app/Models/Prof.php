<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    protected $fillable = [
        'cni',
        'nom',
        'prenom',
        'email',
        'telephone',
        'password',
    ];
}
