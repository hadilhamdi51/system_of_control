<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    public function classrooms(){
        return $this->hasMany(classroom::class);
    }
    public function chef_dep(){
        return $this->belongsTo(chef_dep::class);
    }
}
