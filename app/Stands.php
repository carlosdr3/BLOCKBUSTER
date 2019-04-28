<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stands extends Model
{
    protected $table = 'stand';
    protected $primaryKey='id_stand';
    protected $fillable=['descripcion'];
}
