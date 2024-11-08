<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    use HasFactory;

    protected $fillable = ['titre_soiree','date_soiree','heure','payante','prix_place','nbre_places_max','date_publication'];

    public function propositions() {
        return $this->hasMany(Proposition::class,'id_soiree','id_soiree');
    }

    public function adresse() {
        return $this->belongsTo(Adresse::class,'id_adresse','id_adresse');
    }

    public function interet() {
        return $this->belongsTo(CentreInteret::class,'id_interet','id_interet');
    }

    public function organisateur() {
        return $this->belongsTo(Compte::class);
    }

    public function participations()
    {
        return $this->belongsToMany(Participation::class, 'id_participation');
    }
}
