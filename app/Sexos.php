<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexos extends Model
{
    protected $table = 'sexo';
    protected $primaryKey='id_sexo';
    protected $fillable=['sexo'];
}
