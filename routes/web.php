<?php

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




//sezione home
Route::get('/', function () {

    $data = [
        'dati' => [
            'anno_nascita' => 1992,
            'nome' => 'Leonardo',
            'cognome' => 'Serra' 
        ]
    ];

    return view('home', $data);
})->name('home');



//sezione about
Route::get('about-us', function () {

    $data = [
        'staff' => [
            'gianni',
            'mauro',
            'lorenzo'
        ]
    ];

    return view('about', $data);
})->name('about');
