<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
Route::get('login', \App\Livewire\Pages\Auth\Login::class)->name('login');
Route::get('/register', \App\Livewire\Pages\Auth\Register::class)->name('register');

Route::prefix('policy')->group(function () {
    Route::get('focus-and-scope', \App\Livewire\Pages\Policy\FocusAndScope::class)->name('focus-and-scope');
    Route::get('author-fees', \App\Livewire\Pages\Policy\AuthorFees::class)->name('author-fees');
    Route::get('check-plagiarism', \App\Livewire\Pages\Policy\CheckPlagiarism::class)->name('check-plagiarism');
});
