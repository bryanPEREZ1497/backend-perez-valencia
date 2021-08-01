<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // use HasFactory;
    protected $table = 'players';
    protected $fillable = [
        'name',
        'number',
        'position'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    //n a n
    public function teams()
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }
}
