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
    echo "Selamat datang";
});

Route::get('/about', function () {
    return "<h3> Pembuat web ini bernama \n
    Alvina Marcy Syakirah Permata/2141720017";
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});
