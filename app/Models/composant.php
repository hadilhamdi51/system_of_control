<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class composant extends Model
{
    use HasFactory;
    public function reclamation(){
        return $this->belongsTo(reclamation::class);
    }
    
    public function clubs(){
        return $this->hasMany(club::class);
    }
    public function classrooms(){
        return $this->hasMany(classroom::class);
    }
    
}
