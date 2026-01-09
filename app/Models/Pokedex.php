<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    protected $table = 'pokedexs';

    //ชื่อคอลัมน์ที่อนุญาตให้เพิ่มข้อมูลได้
    protected $fillable = [
        'name',
        'type',
        'species',
        'height',
        'weight',
        'hp',
        'attack',
        'defense',
        'image_url'
    ];
}
