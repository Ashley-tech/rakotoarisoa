<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','mel','naissance','age','mdp'];

    public function adresse()
    {
        return $this->belongsTo(Adresse::class,'id_adresse','id_adresse');
    }
}
