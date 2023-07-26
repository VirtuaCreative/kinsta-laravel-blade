<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $todos = ['Learn Laravel', 'Learn Blade', 'Build Cool Stuff'];
    return view('welcome', ['todos' => $todos]);
});

