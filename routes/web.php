<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

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
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/categories/{category}', [PublicController::class, 'categoryShow'])->name('categories.show');

// Rotta AnnouncementController
Route::get('/new/announcement', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcements.create');

// Rotta per visualizzazione dettaglio annuncio
Route::get('/show/announcement/{announcement}',[AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');

// Rotta tutti gli annunci
Route::get('/index/announcement', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');

