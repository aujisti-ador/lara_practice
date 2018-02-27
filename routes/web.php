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

Route::get('/', function () {

    //$name = 'Ador';
    $name = [
        'Ador',
        'is a',
        'good boy',
        'You are sure'
    ];
    $description = [
        'and',
        'i know',
        'it'
    ];
    //return view('welcome')->with('name',$name);
    //return view('welcome',['name' => 'Ador 2']);
    //return view('welcome',['name' => $name]);
    return view('welcome',compact('name','description'));

});
