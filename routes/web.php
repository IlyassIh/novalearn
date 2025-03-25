<?php

use App\Http\Controllers\Etudiant;
use App\Http\Controllers\Note;
use App\Http\Controllers\NovaController;
use App\Http\Controllers\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [NovaController::class, 'index'])->name('index');

Route::get('/novalearn', [NovaController::class, 'index'])->name('index');

Route::get('/novalearn/inscription', [NovaController::class, 'inscription'])->name('inscription');

Route::get('/novalearn/login', [NovaController::class, 'login'])->name('login');

// Route::get('/novalearn/etudiant', [Etudiant::class, 'index'])->name('etudiant.index');

Route::get('/novalearn/etudiant/notes', [Note::class, 'index'])->name('note.index');

Route::get('/novalearn/etudiant/profile', [Profile::class, 'index'])->name('profile.index');


