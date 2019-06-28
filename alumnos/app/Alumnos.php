<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    public $timestamps = false;
  protected $table = 'alumnos';  // tabla alumnos
  protected $primaryKey = 'idalumnos';
  protected $fillable = ['nombre','apellido','IdentIfIcacIon','direccion','genero','fechanacimiento']; // campos de  la tabla

}
