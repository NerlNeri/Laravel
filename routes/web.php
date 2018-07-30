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

/*Route::get('/', function () {
return view('welcome');
});*/

Route::get('/middleware/{age}', function
($age){
    return view ('age',array('age'=>$age));
})->middleware('age');

Route::get('/', function()
{
return 'Welcome to our home page!';
});

Route::get('/foo', function(){
	return view ('foo');
})->name ('foo');

Route::get('/bar', function(){
	return view ('bar');
})->name ('bar');


Route::get('/shoutout/{text}', function($text){
 $colors = array(
 	       //Key        //Value
 	       "Red"    => "For Passion",
           "Green"  => "color of nature",
           "Blue"  => "is the color of the sky",
           "White"  => "pureness",
           "Black"  => "being bold",
           "Silver"  => "authentic",
           "Yellow"  => "warmth",
       );
 return view('shoutout',
        array(
        'text' => $text,
        'colors' => $colors,
    ));
})->name('shoutout');




//Assignment
Route::get('/basicarithmetic/{op}/{num}/{num1}', function($op, $num, $num1){
  return view("basicarithmetic", array("op" => $op,
                                              "num" => $num ,  //dividen
                                              "num1" => $num1  //Divisor
                                               ));
})->name ('basicarithmetic');




