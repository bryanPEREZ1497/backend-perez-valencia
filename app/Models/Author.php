<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'app.authors';
    protected $fillable = [
        'email',
        'identification',
        'names',
        'phone',
        'age'
    ];

    //un autor tiene un solo proyecto
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    //muchos a muchos
    // public function projects()
    // {
    //     return $this->belongsToMany(Project::class);
    // }
}
