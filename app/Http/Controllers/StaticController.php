<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function hello()
    {
        //return 'Hello World';
        return view('statics.hello');
    }

    public function about()
    {
          return view('statics.about');
    }    
}
