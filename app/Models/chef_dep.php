<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chef_dep extends Model
{
    use HasFactory;
    public function department(){
        return $this->belongsTo(department::class);
    }
    public function students(){
        return $this->hasMany(student::class);
    }
}
