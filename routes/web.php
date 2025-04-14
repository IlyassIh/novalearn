<?php

use App\Http\Controllers\AdminLogin;
use App\Models\User;
use App\Http\Controllers\Home;
use App\Http\Controllers\Mois;
use App\Http\Controllers\Note;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Etudiant;
use App\Http\Controllers\CoursProf;
use App\Http\Controllers\Validation;
use App\Http\Controllers\GestionProf;
use App\Http\Controllers\ProfileProf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consultation;
use App\Http\Controllers\CoursEtudiant;
use App\Http\Controllers\NovaController;
use App\Http\Controllers\AjouterNoteProf;
use App\Http\Controllers\GestionEtudiant;

Route::middleware('auth')->group(function () {
    Route::get('/novalearn/etudiant/accueil', [Home::class, 'index'])->name('accueil.index');

    Route::get('/novalearn/etudiant/notes', [Note::class, 'index'])->name('note.index');

    Route::get('/novalearn/etudiant/profile', [Profile::class, 'index'])->name('profile.index');

    Route::get('/novalearn/etudiant/mois-payee', [Mois::class, 'index'])->name('mois.index');

    Route::get('/novalearn/prof/ajouter-les-notes', [AjouterNoteProf::class, 'index'])->name('add-notes-prof.index');

    Route::get('/novalearn/prof/profile', [ProfileProf::class, 'index'])->name('profile-prof.index');

    Route::get('/novalearn/prof/cours', [CoursProf::class, 'index'])->name('cours.index');

    Route::get('/novalearn/etudiant/cours', [CoursEtudiant::class, 'index'])->name('cours-etudiant.index');

    Route::get('/novalearn/admin/gestion-prof', [GestionProf::class, 'index'])->name('admin-gestion-prof.index');

    Route::get('/novalearn/admin/gestion-etudiant', [GestionEtudiant::class, 'index'])->name('admin-gestion-etudiant.index');

    Route::get('/novalearn/admin/validation', [Validation::class, 'index'])->name('admin-validation.index');

    Route::get('/novalearn/admin/consultation', [Consultation::class, 'index'])->name('admin-consultation.index');

    Route::get('/novalearn/logout', [NovaController::class, 'logout'])->name('logout');

    Route::put('/novalearn/update/', [Profile::class, 'update'])->name('update.profile');

    Route::post('/novalearn/prof/create', [GestionProf::class, 'create'])->name('prof.create');

    Route::put('/novalearn/prof/update', [ProfileProf::class, 'update'])->name('update.prof');
});


Route::get('/', [NovaController::class, 'index'])->name('index');

Route::get('/novalearn', [NovaController::class, 'index'])->name('index');

Route::get('/novalearn/inscription', [NovaController::class, 'inscription'])->name('inscription');

Route::get('/novalearn/login', [NovaController::class, 'login'])->name('login');

Route::post('/novalearn/inscription/inscription/store', [NovaController::class, 'create'])->name('etudiant.create');

Route::post('/novalearn/login/login/store', [NovaController::class, 'loginStore'])->name('login.store');

Route::get('/nova-admin', [AdminLogin::class, 'index'])->name('admin');

Route::post('/nova-admin/login', [AdminLogin::class, 'store'])->name('admin.login');
