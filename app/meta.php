<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meta extends Model
{
  protected $table = 'meta';
  protected $primaryKey = 'id';
  protected $fillable = ['key', 'value'];
}
