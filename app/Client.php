<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = ['nombre','apellido', 'direccion', 'fechanacimiento', 'telefono','correoelectronico', 'borrado'];

  protected $table = 'client';
  public $timestamps = false;
}
