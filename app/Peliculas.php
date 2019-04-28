<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'peliculas';
    protected $primaryKey = 'id_pelicula';
    protected $fillable = ['titulo','duracion','id_genero'];

    function getGeneros()
    {
        return $this->hasMany('App\Generos','id_genero','id_genero');
    }

}
