<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/authors', function () {
    return view('authors');
})->name('authors');

Route::get('/publishers', function () {
    return view('publishers');
})->name('publishers');