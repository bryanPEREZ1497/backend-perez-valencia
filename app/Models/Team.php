<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // use HasFactory;
    protected $table = 'teams';
    protected $fillable = [
        'name',
        'identification',
        'owner'
    ];

    // public function players()
    // {
    //     return $this->hasMany(Player::class);
    // }
//n a n
    public function players()
    {
        return $this->belongsToMany(Player::class)->withTimestamps();
    }
    
}
