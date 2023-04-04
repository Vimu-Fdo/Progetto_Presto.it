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

// Rotta AnnouncementController
Route::get('/new/announcement', [AnnouncementController::class, 'create'])->name('announcements.create');
