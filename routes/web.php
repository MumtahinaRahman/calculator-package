<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('calculator', function() {
    echo 'hello from the other siiiiiiide!!!!';
});

Route::get('add/{a}/{b}', 'Mumtahina\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Mumtahina\Calculator\CalculatorController@subtract');

?>
