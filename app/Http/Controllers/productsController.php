<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

use Input;
use Validator;
use Redirect;
use Session;

class productsController extends Controller
{
    public function index()
    {
      $products = Products::all();
      return view('products.index', compact('products'));
    }

    public function create()
    {
      return view('products.create');
    }

    public function store(Request $request)
    {
      $input = Input::all();

      // getting all of the post data
         $file = array('image' => Input::file('image'));
         // setting up rules
         $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
         // doing the validation, passing post data, rules and the messages
        //  $validator = Validator::make($file, $rules);
        //  if ($validator->fails()) {
        //    // send back to the page with the input data and errors
        //    return Redirect::to('products/create')->withInput()->withErrors($validator);
        //  }
        //  else {
           // checking file is valid.

           if (Input::file('image')->isValid()) {
             $destinationPath = 'uploads'; // upload path
             $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
             $fileName = rand(11111111,99999999).'.'.$extension; // renameing image
             Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
             // sending back with message
             Session::flash('success', 'Upload successfully');
           }
           else {
             // sending back with error message.
             Session::flash('error', 'uploaded file is not valid');
           }
        //  }

        $entry = new Products();
        $entry->image_url = $fileName;
        $entry->name = $input['name'];
        $entry->description = $input['description'];

        $entry->save();
      // $product = Products::create( $input );

      return redirect()->action('productsController@show', $entry->id)->with('message', 'Product created!');
    }

    public function show($id)
    {
      $product = Products::find($id);
      return view('products.show', compact('product'));
    }
}
