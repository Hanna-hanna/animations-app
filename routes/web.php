<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Entrance', [
    ]);
});

Route::get('/cards', function () {
    return Inertia::render('CoolCardDeck', [
    ]);
});

Route::get('/layer-card', function () {
    return Inertia::render('LayerCard', [
    ]);
});

Route::get('/perspective-card', function () {
    return Inertia::render('PerspectiveCard', [
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
