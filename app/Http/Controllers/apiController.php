<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Categories;

use Response;

class apiController extends Controller
{
    public function getData()
    {
      $data = [];

      $data = [
        'categories' => Categories::all(),
        'products' => Products::all()
      ]
      ;

      $data_json = Response::json(
          $data, $status=200, $headers=['Content-Type: application/json'], $options=JSON_PRETTY_PRINT
      );

      return $data_json;
    }
}
