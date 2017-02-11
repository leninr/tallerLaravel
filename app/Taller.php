<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
  protected $table = "tallers";

  public $primaryKey  = 'idTaller';

  protected $fillable = ['nombre','apellido',];
}
