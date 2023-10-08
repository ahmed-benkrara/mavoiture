<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\MotorisationController;
use App\Http\Controllers\PriceRangeController;

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
    return view('client.home');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'sendMail']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/test', function(){
    return view('client.search');
});
//clients
Route::get('/clients', [ClientController::class, 'index']);
//brands
Route::get('/brands', [MarkController::class, 'index']);
Route::get('/brands/create', [MarkController::class, 'create']);
Route::post('/brands/create', [MarkController::class, 'store']);
Route::get('/brands/edit/{id}', [MarkController::class, 'edit']);
Route::put('/brands/edit/{id}', [MarkController::class, 'update'])->name('brands.update');
Route::delete('/brands/delete/{id}', [MarkController::class, 'destroy'])->name('brands.delete');
//modele
Route::get('/modeles', [ModeleController::class, 'index']);
Route::get('/modeles/create', [ModeleController::class, 'create']);
Route::post('/modeles/create', [ModeleController::class, 'store']);
Route::get('/modeles/edit/{id}', [ModeleController::class, 'edit']);
Route::put('/modeles/edit/{id}', [ModeleController::class, 'update'])->name('modeles.update');
Route::delete('/modeles/delete/{id}', [ModeleController::class, 'destroy'])->name('modeles.delete');
//generations
Route::get('/generations', [GenerationController::class, 'index']);
Route::get('/generations/create', [GenerationController::class, 'create']);
Route::post('/generations/create', [GenerationController::class, 'store']);
Route::get('/generations/edit/{id}', [GenerationController::class, 'edit']);
Route::put('/generations/edit/{id}', [GenerationController::class, 'update'])->name('generations.update');
Route::delete('/generations/delete/{id}', [GenerationController::class, 'destroy'])->name('generations.delete');
//motorisation
Route::get('/motorisations', [MotorisationController::class, 'index']);
Route::get('/motorisations/create', [MotorisationController::class, 'create']);
Route::post('/motorisations/create', [MotorisationController::class, 'store']);
Route::get('/motorisations/edit/{id}', [MotorisationController::class, 'edit']);
Route::put('/motorisations/edit/{id}', [MotorisationController::class, 'update'])->name('motorisations.update');
Route::delete('/motorisations/delete/{id}', [MotorisationController::class, 'destroy'])->name('motorisations.delete');
//pricerange
Route::get('/pricerange', [PriceRangeController::class, 'index']);
Route::get('/pricerange/create', [PriceRangeController::class, 'create']);
Route::post('/pricerange/create', [PriceRangeController::class, 'store']);
Route::get('/pricerange/edit/{id}', [PriceRangeController::class, 'edit']);
Route::put('/pricerange/edit/{id}', [PriceRangeController::class, 'update'])->name('pricerange.update');
Route::delete('/pricerange/delete/{id}', [PriceRangeController::class, 'destroy'])->name('pricerange.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
