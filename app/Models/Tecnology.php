<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    //esto me muestra el slug, en lugar del id de la tecnología en la barra del buscador.(link)

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function vacancies()
    {
        return $this->belongsToMany(Vacancy::class);
    }
}
