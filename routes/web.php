<?php

use App\Http\Controllers\Controller;
use App\Livewire\CategoryComponent;
use App\Livewire\Post;
use App\Livewire\User;
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
    return view('welcome');
});

Route::get('/drag-drop', function () {
    return view('drag_drop');
});


    Route::get('/user', User::class)->name('user');
    Route::get('/post', Post::class)->name('post');
    Route::get('/category', CategoryComponent::class)->name('category')->middleware('set.request.lang');

Route::get('/get-audio', [Controller::class, 'getAudio']);
Route::get('get/user', [Controller::class, 'getUser']);
