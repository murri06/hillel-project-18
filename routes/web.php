<?php

use App\Http\Controllers\{EventController, UserController};
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

Route::get('/', function () {
    return view('home');
});

Route::get('/users', [UserController::class, 'list']);
Route::get('/users/{id}', [UserController::class, 'details']);

Route::get('/events', [EventController::class, 'list']);
Route::get('/events/{id}', [EventController::class, 'details']);
Route::get('/events/create', function () {
    return view('Event.create');
});
Route::post('/events/create', [EventController::class, 'addEvent']);
