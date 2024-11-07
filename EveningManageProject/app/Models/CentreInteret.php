<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreInteret extends Model
{
    use HasFactory;

    protected $fillable = ['titre_categorie'];

    public function soirees() {
        return $this->hasMany(Soiree::class);
    }

    public function categories() {
        return $this->hasMany(Categorie::class);
    }

    public function personnes_ayant_cet_interet() {
        return $this->belongsToMany(Compte::class);
    }
}
