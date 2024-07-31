<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login\Login;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', Login::class)->name('login');
