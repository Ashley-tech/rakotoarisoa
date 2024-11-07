<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['nom_categorie','type_categorie'];

    public function propositions() {
        return $this->hasMany(Proposition::class);
    }

    public function interet() {
        return $this->belongsTo(CentreInteret::class);
    }

}
