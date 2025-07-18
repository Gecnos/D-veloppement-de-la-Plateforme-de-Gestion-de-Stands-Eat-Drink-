<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemandeStandController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsEntrepreneur;

// Page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Redirection selon rôle après login
Route::middleware(['auth'])->get('/dashboard', function () {
    $user = Auth::user();
    return match ($user->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'entrepreneur_approuve' => redirect()->route('dashboard.entrepreneur'),
        default => redirect()->route('attente'),
};
})->name('dashboard');

// Page d'attente pour les entrepreneurs non approuvés
Route::middleware(['auth'])->get('/attente-validation', fn () => view('attente'))->name('attente');

// Page de demande de stand
Route::get('/demande-stand', fn () => view('demande-stand'))->name('demande.stand');
Route::post('/demande-stand', [DemandeStandController::class, 'submit'])->name('demande.stand.submit');

//  Routes pour l'administrateur
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
    Route::post('/admin/reject/{id}', [AdminController::class, 'reject'])->name('admin.reject');
    Route::post('/admin/suspendre/{id}', [AdminController::class, 'suspendre'])->name('admin.suspendre');
    Route::post('/admin/desuspendre/{id}', [AdminController::class, 'desuspendre'])->name('admin.desuspendre');
    Route::post('/admin/faire-appel/{id}', [AdminController::class, 'faireAppel'])->name('admin.faire_appel');
    Route::get('/admin/afficher-entrepreneurs', [AdminController::class, 'afficherEntrepreneurs'])->name('admin.afficher');
});

// Routes pour l'entrepreneur approuvé
Route::middleware(['auth', 'role:entrepreneur_approuve'])->group(function () {
    Route::get('/dashboard-entrepreneur', fn () => view('entrepreneur.dashboard'))->name('dashboard.entrepreneur');

    // Gestion du stand
    Route::get('/mon-stand', [StandController::class, 'show'])->name('mon-stand');
    Route::get('/stand/edit', [StandController::class, 'edit'])->name('edit-stand');
    Route::post('/stand/update', [StandController::class, 'update'])->name('update-stand');

    // Gestion des produits
    Route::resource('produits', ProductController::class);
});

// Auth Laravel (Breeze, Fortify, etc.)
require __DIR__. '/auth.php';
