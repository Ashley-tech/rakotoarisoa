<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    use HasFactory;

    protected $fillable = ['titre_soiree','date_soiree','heure','payante','prix_place','nbre_places_max'];

    public function propositions() {
        return $this->hasMany(Proposition::class);
    }

    public function adresse() {
        return $this->belongsTo(Adresse::class);
    }

    public function interet() {
        return $this->belongsTo(CentreInteret::class);
    }

    public function organisateur() {
        return $this->belongsTo(Compte::class);
    }

    public function participations()
    {
        return $this->belongsToMany(Participation::class, 'participation');
    }
}
