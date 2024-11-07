<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    use HasFactory;

    public function votes() {
        return $this->hasMany(Vote::class);
    }

    public function soiree() {
        return $this->belongsTo(Soiree::class);
    }

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
}
