<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class text extends Model
{
  protected $table = 'text';
  protected $primaryKey = 'id';
  protected $fillable = ['text', 'lang_id'];
}
