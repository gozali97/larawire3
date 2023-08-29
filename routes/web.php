<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::get('/', \App\Livewire\Home::class)->name('home');

    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/contact', \App\Livewire\About::class)->name('contact');
    Route::get('/contact', \App\Livewire\Contact::class)->name('contact');
    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');
    Route::get('/timeline', \App\Livewire\Timeline::class)->name('timeline.index');

    Route::get('/users/{user}', \App\Livewire\User\Show::class)->name('users.show');
    Route::post('/logout', \App\Http\Controllers\LogoutController::class)->name('logout');

});

Route::get('/login', \App\Livewire\Login::class)->name('login')->middleware('guest');
