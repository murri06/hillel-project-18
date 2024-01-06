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


Route::get('/users', [UserController::class, 'list'])->name('users');
Route::get('/users/create', function () {
    return view('Users.create');
})->name('usersCreate');
Route::post('users/create', [UserController::class, 'addUser']);
Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']);
Route::get('/users/{id}', [UserController::class, 'details']);


Route::get('/events', [EventController::class, 'list'])->name('events');
Route::get('/events/create', [EventController::class, 'addEventForm']);
Route::post('/events/create', [EventController::class, 'addEvent']);
Route::get('/events/delete/{id}', [EventController::class, 'deleteEvent']);
Route::get('/events/{id}', [EventController::class, 'details']);

