<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    protected $table = 'formatos';
    protected $primaryKey='id_formato';
    protected $fillable=['descripcion'];
}
