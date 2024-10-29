<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/query', [QueryController::class, 'show']);
Route::get('/books', [QueryController::class, 'books']);
