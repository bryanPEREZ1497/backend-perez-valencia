<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Project extends Model
{
    use HasFactory;
    protected $table = 'app.projects';
    protected $fillable = [
        'title',
        'approved', //booleans en pasado,
        'date',
        'description',
        'code'

    ]; //todas menos las foreign keys

    // protected $attributes = ['full_name']; //esto es necesario 

    protected $casts = [
        'approved' => 'boolean',
        'date' => 'datetime:Y-m-d'
    ];

    //un pryecto tiene un solo autor
    // public function author()
    // {
    //     return $this->hasOne(Author::class);
    // }

    //tiene muchos autores
    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    // muchos a muchos
    // public function authors()
    // {
    //     return $this->belongsToMany(Author::class);
    // }

    //mutators. cambian el valores antes de enviar a la bd
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }

    //accesors. altera datos que vienen de la bd
    // public function getPasswordAttribute()
    // {
    //     return strtolower($this->attributes['password']);
    // }

    // public function getFullNameAttribute() //busca en fillable, si no hay busca en attributes
    // {
    //     return $this->attributes['code'] . $this->attributes['description'];
    // }
}
