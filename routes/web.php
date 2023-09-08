<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
Route::get('login', \App\Livewire\Pages\Auth\Login::class)->name('login');
Route::get('/register', \App\Livewire\Pages\Auth\Register::class)->name('register');
