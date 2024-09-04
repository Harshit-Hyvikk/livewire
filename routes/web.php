<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\HelloInternet;
use App\Livewire\PostCreate;
use App\Livewire\Posts\PostCreate as PostsPostCreate;
use App\Livewire\Posts\PostShow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/counter', HelloInternet::class)->name('Counter');

Route::get('/posts-create', PostCreate::class)->name('Posts.demo');

Route::get('/posts', PostShow::class)->name('Posts.index');
Route::get('/posts-create', PostsPostCreate::class)->name('Posts.create');



});

require __DIR__.'/auth.php';

