<?php

use App\Http\Controllers\AjouterNoteProf;
use App\Http\Controllers\CoursEtudiant;
use App\Http\Controllers\CoursProf;
use App\Http\Controllers\Etudiant;
use App\Http\Controllers\Home;
use App\Http\Controllers\Note;
use App\Http\Controllers\NovaController;
use App\Http\Controllers\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mois;
use App\Http\Controllers\ProfileProf;

Route::get('/', [NovaController::class, 'index'])->name('index');

Route::get('/novalearn', [NovaController::class, 'index'])->name('index');

Route::get('/novalearn/inscription', [NovaController::class, 'inscription'])->name('inscription');

Route::get('/novalearn/login', [NovaController::class, 'login'])->name('login');

Route::get('/novalearn/etudiant/accueil', [Home::class, 'index'])->name('accueil.index');

Route::get('/novalearn/etudiant/notes', [Note::class, 'index'])->name('note.index');

Route::get('/novalearn/etudiant/profile', [Profile::class, 'index'])->name('profile.index');

Route::get('/novalearn/etudiant/mois-payee', [Mois::class, 'index'])->name('mois.index');

Route::get('/novalearn/prof/ajouter-les-notes', [AjouterNoteProf::class, 'index'])->name('add-notes-prof.index');

Route::get('/novalearn/prof/profile', [ProfileProf::class, 'index'])->name('profile-prof.index');

Route::get('/novalearn/prof/cours', [CoursProf::class, 'index'])->name('cours.index');

Route::get('/novalearn/etudiant/cours', [CoursEtudiant::class, 'index'])->name('cours-etudiant.index');
