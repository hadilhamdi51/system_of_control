<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamation extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(user::class);
    }
    public function composants(){
        return $this->hasMany(composant::class);
    }
}
