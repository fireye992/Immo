<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiensController;
use App\Http\Controllers\ContactController;

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
// Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index']);

// Route pour la page de contact
Route::get('/contact', [ContactController::class, 'index']);

// Route pour la page des annonces, avec un nom pour faciliter la génération d'URL
Route::get('/annonces', [BiensController::class, 'index'])->name('annonces');

// Route pour le tableau de bord, accessible seulement aux utilisateurs authentifiés et vérifiés
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Groupe de routes protégées par l'authentification pour la gestion du profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclut les routes d'authentification
require __DIR__.'/auth.php';
