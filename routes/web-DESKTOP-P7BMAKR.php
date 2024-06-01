<?php

use App\Http\Controllers\EventController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

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
'EventController';

Route::get('/', [EventController::class, 'index' ]);
Route::get('/events/user', [EventController::class, 'user' ]);
Route::post('/events', [EventController::class, 'store' ]);