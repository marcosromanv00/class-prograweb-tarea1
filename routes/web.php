<?php

use Illuminate\Support\Facades\Route;

// Se utiliza Route::view porque son pags sencillas, no requieren un controlador
// para esta tarea.
Route::view('/', 'main')->name('main');
Route::view('/books', 'books')->name('books');
Route::view('/authors', 'authors')->name('authors');
Route::view('/publishers', 'publishers')->name('publishers');
