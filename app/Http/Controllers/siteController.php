<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Text;
use App\Meta;

use Redirect;
use Input;
use Session;

class siteController extends Controller
{
    public function index()
    {
      $text = Text::all();
      $meta = Meta::all();
      $homepage_image = Meta::where('key','homepage_image')->first();
      return view('site.index', compact('text','meta','homepage_image'));
    }

    public function homepage_image_update(Request $request)
    {

        // getting all of the post data
         $file = array('image' => Input::file('homepage_image'));
         // setting up rules
         $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000


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


      $homepage_image = Meta::where('key','homepage_image')->first();
      $homepage_image['value'] = $fileName;
      $homepage_image->save();

      return redirect()->action('siteController@index')->with('message', 'Image updated');
    }
}
