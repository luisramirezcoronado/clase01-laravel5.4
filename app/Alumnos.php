<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumnos extends Model
{
	use SoftDeletes;
	
    protected $table    = 'alumnos';
    protected $fillable = ['nombres','apellidos','especialidad','ciclo'];
}
