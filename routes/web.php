<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/servizi', [PageController::class, 'services'])->name('services');
Route::get('/servizi/{service}', [PageController::class, 'service'])->name('service');
Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');
Route::get('/progetti/{project}', [PageController::class, 'project'])->name('project');
