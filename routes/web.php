<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;

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

// Rotta PublicController
// Rotta per la visualizzazione della welcome page
Route::get('/', [PublicController::class, 'home'])->name('home');
// Rotta per la visualizzazione della pagina di dettaglio categoria
Route::get('/categories/{category}', [PublicController::class, 'categoryShow'])->name('categories.show');

// Rotta AnnouncementController
// Rotta per la visualizzazione della pagina di creazione di un nuovo annuncio
Route::get('/new/announcement', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcements.create');
// Rotta per la visualizzazione della pagina di dettaglio di un annuncio
Route::get('/show/announcement/{announcement}',[AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');
// Rotta per la visualizzazione della pagina di tutti gli annunci
Route::get('/index/announcement', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');

// Rotta RevisorController
// Home Revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
// Accetta Annuncio
// Abbiamo usato il metodo patch perche' non e' una modifica ma un aggiornamento
Route::patch('/accept/announcement/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');
// Rifiuta Annuncio
// Abbiamo usato il metodo patch perche' non e' una modifica ma un aggiornamento
Route::patch('/reject/announcement/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');
// Rotta per diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
// Rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
// Ricerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class, 'searchAnnouncements'])->name('announcements.search');

// Cambio lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLocale'])->name('SetLocale');

