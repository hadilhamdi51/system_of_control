<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;
    public function composants(){
        return $this->hasMany(composant::class);
    }
    public function department(){
        return $this->belongsTo(department::class);
    }
}
