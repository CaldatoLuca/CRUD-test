<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //aggiungo i campi che possono fare mass update
    //indico i campi che superano update, con save non serve
    // protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type'];

    //qua indico tutti i campi che non superano l' update - o esiste fillable o guarded
    //valgono anche per il create
    protected $guarded = [];
}
