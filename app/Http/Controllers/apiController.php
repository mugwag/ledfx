<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function getData()
    {
      $data = Products::all();
                  

      $data = Response::json(
          $data, $status=200, $headers=['Content-Type: application/json'], $options=JSON_PRETTY_PRINT
      );

      return $data;
    }
}
