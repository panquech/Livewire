<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\CreatePost;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', CreatePost::class)
    ->name('dashboard');
});
