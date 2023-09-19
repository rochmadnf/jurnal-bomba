<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
Route::get('login', \App\Livewire\Pages\Auth\Login::class)->name('login');
Route::get('/register', \App\Livewire\Pages\Auth\Register::class)->name('register');

Route::prefix('policy')->group(function () {
    Route::get('focus-and-scope', \App\Livewire\Pages\Policy\FocusAndScope::class)->name('focus-and-scope');
    Route::get('author-fees', \App\Livewire\Pages\Policy\AuthorFees::class)->name('author-fees');
    Route::get('check-plagiarism', \App\Livewire\Pages\Policy\CheckPlagiarism::class)->name('check-plagiarism');
    Route::get('publication-ethics', \App\Livewire\Pages\Policy\PublicationEthics::class)->name('publication-ethics');
    Route::get('review-process', \App\Livewire\Pages\Policy\ReviewProcess::class)->name('review-process');
    Route::get('open-access-statement', \App\Livewire\Pages\Policy\OpenAccessStatement::class)->name('open-access-statement');
    Route::get('copyright-and-license', \App\Livewire\Pages\Policy\CopyrightAndLicense::class)->name('copyright-and-license');
});

Route::prefix('issue')->group(function () {
    Route::get('current', \App\Livewire\Pages\Issue\Current::class)->name('current-issue');
    Route::get('archive', \App\Livewire\Pages\Issue\Archive::class)->name('archive-issue');
    Route::get('search/{keyword?}', \App\Livewire\Pages\Issue\Search::class)->name('search-issue');
});

Route::prefix('editorial-board')->group(function () {
    Route::get('peer-reviewer', \App\Livewire\Pages\EditorialBoard\PeerReviewer::class)->name('peer-reviewer');
});
