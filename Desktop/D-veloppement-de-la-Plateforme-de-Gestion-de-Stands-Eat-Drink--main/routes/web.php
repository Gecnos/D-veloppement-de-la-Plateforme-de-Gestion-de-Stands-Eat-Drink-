<?php
// Page d'accueil principale
Route::get('/', function () {
    return view('home');
})->name('home');
// Inscription, catalogue...
Route::get('/inscription', fn() => view('inscription'))->name('inscription');
Route::get('/catalogue', fn() => view('catalogue'))->name('catalogue');

// Dashboard selon le rôle
Route::middleware('auth')->get('/dashboard', function () {
    $user = Auth::user();

    return match ($user->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'approuve' => redirect()->route('entrepreneur.dashboard'),
        default => redirect()->route('attente'),
};
})->name('dashboard');

// Dashboard admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    //... autres routes admin
});

// Dashboard entrepreneur
Route::middleware(['auth', 'approuve'])->get('/entrepreneur/dashboard', fn () => view('entrepreneur.dashboard'))->name('entrepreneur.dashboard');

// Page d’attente
Route::middleware(['auth'])->get('/attente-validation', fn () => view('attente'))->name('attente');

