<?php


use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {

    //session(['name' => 'JaneDoe']);
    //return session('name');

    $request->session()->put('name', 'Billy');
    $request->session()->get('name');

    return view('welcome');
});
