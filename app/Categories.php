<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'categories';
  protected $primaryKey = 'id';
  protected $fillable = ['name' , 'description', 'sort_order'];

  public function Products() {
        return $this->belongsToMany('App\Products', 'categories_products', 'cat_id', 'prod_id');
      }
}
