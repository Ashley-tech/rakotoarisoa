<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['reponse'];

    public function participant() {
        return $this->belongsTo(Participation::class);
    }

    public function categorie_proposition() {
        return $this->belongsTo(Proposition::class);
    }
}
