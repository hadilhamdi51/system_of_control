<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(user::class);
    }
    public function sessions(){
        return $this->hasMany(sessions::class);
    }
}
