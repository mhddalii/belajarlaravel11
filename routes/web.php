<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/programming-languages', function () {
    $programmingLanguages = ['PHP', 'Java', 'C', 'JavaScript', 'Dart'];
    return response()->json($programmingLanguages);
});