<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\FilaController;
use App\Http\Controllers\UnidadeDeSaudeController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;

// Redireciona a home para a lista de filas
Route::get('/', [FilaController::class, 'index'])->name('home');

// Rotas dos recursos principais
Route::resource('pacientes', PacienteController::class);
Route::resource('medicos', MedicoController::class);
Route::resource('filas', FilaController::class);
Route::resource('unidades', UnidadeDeSaudeController::class);

// Dashboard
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Rotas protegidas para configurações
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

// Autenticação (gerado pelo Breeze, Jetstream ou Fortify)
require __DIR__.'/auth.php';
