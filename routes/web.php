<?php

use App\Http\Controllers\CharacterCreatorController;
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


