<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plot',
        'release_year',
        'genre',
        'duration'
    ];
    protected $with = ['roles'];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
