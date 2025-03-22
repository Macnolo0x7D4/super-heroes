<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $table = 'superheroes';

    protected $fillable = ['name', 'real_name', 'universe_id', 'gender_id', 'image_url'];
}
