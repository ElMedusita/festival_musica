<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistaConcierto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    /*public function conciertos()
    {
        return $this->belongsTo(Concierto::class);
    }

    public function artistas()
    {
        return $this->belongsTo(Artista::class);
    }*/
}
