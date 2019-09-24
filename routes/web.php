<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('Hello');
    //return view('World');
//    return view('statics.hello');
    
//});

//Route::get('/', 'StaticController@hello');

//Route::get('/about', function() {
    //return '<h1>About</h1>';
//    return view('statics.about');
//}); 

//Route::get('/name', function () {
//    return view('statics.name');
//    return view('statics.surname');
//       -> with(['name' => 'Arnon', 'surname' => 'Chotineeranat']);
//});

//Route::get('/', 'StaticController@hello');

//Route::get('/about', 'StaticController@about');

//Route::get('/name/{surname?}', 'StaticController@surname');

//Route::get('/name/{surname?}', function ($surname = 'Chotineeranat') {
  //  //return $surname;
    //return view('statics.name')
      //  ->with(['surname' => $surname]);

      Route::get('/customer', 'CustomerController@index');
      Route::get('/customer/{id}', 'CustomerController@show');
      





