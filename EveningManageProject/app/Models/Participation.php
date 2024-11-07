<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [
        'note','commentaires'
    ];

    public function vote() {
        return $this->hasMany(Vote::class);
    }

    public function personne() {
        return $this->belongsTo(Compte::class);
    }

    public function soirees()
    {
        return $this->belongsToMany(Soiree::class, 'soiree');
    }
}
