<?php

use Illuminate\Support\Facades\DB; // Import DB Facade
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::get('/new', function () {
    // $todos = DB::table('todos')->get();
    $todos = ['Learn Laravel', 'Learn Blade', 'Build Cool Stuffs'];
    return view('child', ['todos' => $todos]);
});