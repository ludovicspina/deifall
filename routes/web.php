<?php

use App\Http\Controllers\AdventureController;
use App\Http\Controllers\CharacterCreatorController;
use App\Http\Controllers\ItemController;
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


Route::view('/', 'home')->name('home');
Route::view('/magic', 'magic')->name('magic');
Route::view('/technology', 'technology')->name('technology');
Route::view('/society', 'society')->name('society');
Route::view('/races', 'races')->name('races');
Route::view('/classes', 'classes')->name('classes');
Route::view('/divinity', 'divinity')->name('divinity');

Route::get('/character_creator', [CharacterCreatorController::class, 'index'])->name('character_creator');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::view('/gm/main', 'gm-main')->name('gm-main');
    Route::get('/adventures/create', [AdventureController::class, 'create'])->name('adventures.create');
    Route::post('/adventures', [AdventureController::class, 'store'])->name('adventures.store');
    Route::get('/items', [ItemController::class, 'index'])->name('items.index');



});
