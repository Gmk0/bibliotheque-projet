<?php

use Illuminate\Support\Facades\Route;


Route::get('/',\App\Livewire\Home::class)->name('Home');
Route::get('/publier', \App\Livewire\Publier::class)->name('publier');



Route::get('/domains', \App\Livewire\DomaineView::class)->name('domaines');

Route::get('/works', \App\Livewire\WorkView::class)->name('works');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/domains/{id}', \App\Livewire\WorkDomaines::class)->name('WorkDomaines');
    Route::get('/works/{matricule}', \App\Livewire\WorkViewOne::class)->name('worksOne');
});
