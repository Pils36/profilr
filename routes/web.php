<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');

Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');

Route::get('/pricing', [App\Http\Controllers\HomeController::class, 'pricing'])->name('pricing');

Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');

Route::get('/forum', [App\Http\Controllers\HomeController::class, 'forum'])->name('forum');