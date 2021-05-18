<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languaje extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function languaje_level(){
        return $this->belongsTo(Languaje_Level::class);
    }
}
