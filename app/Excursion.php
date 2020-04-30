<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
  protected $table = 'excursion';

  public $timestamps = false;

  protected $primaryKey = 'idExcursion';

  protected $guarded = [];

}