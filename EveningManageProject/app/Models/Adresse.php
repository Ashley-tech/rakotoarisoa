<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = ['numero','rue','cp','ville','region'];

    public function soirees() {
        return $this->hasMany(Soiree::class);
    }

    public function habitants() {
        return $this->hasMany(Compte::class);
    }
}
