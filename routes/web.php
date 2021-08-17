<?php

use Illuminate\Support\Facades\Route;
use App\Menu;
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
    $Menu = Menu::all();
    return view('info')->with('Menu', $Menu);
});

Route::get('/map', function () {
    $Menu = Menu::all();
    return view('index_map')->with('Menu', $Menu);
});

Route::get('/logo', function () {
    $Menu = Menu::all();
    return view('index_logo')->with('Menu', $Menu);
});

Route::get('/farm', function () {
    $Menu = Menu::all();
    return view('farm')->with('Menu', $Menu);
});

Route::get('/berry', function () {
    $Menu = Menu::all();
    return view('strawberry')->with('Menu', $Menu);
});

Route::get('/greenhouse', 'GreenhouseController@index');
Route::get('/page/{url}', 'PageController@getpage');

Route::get('/tea', function () {
    $Menu = Menu::all();
    return view('tea')->with('Menu', $Menu);
});