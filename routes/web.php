<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Route Definitions
|--------------------------------------------------------------------------
*/

Route::get('/show-event-calendar', [EventController::class, 'index']);
Route::post('/manage-events', [EventController::class, 'manageEvents']);
