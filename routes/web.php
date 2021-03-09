<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified', 'CheckManager'])->group(function () {
    
    Route::resource('projects', ProjectController::class);

    Route::get('users/{user}', [UserController::class, 'show']);
    Route::get('users', [UserController::class, 'index']);

    Route::post('Ajax/Projects', [UserController::class, 'filter_user_by_experience']);
    Route::post('/Ajax/user/add_project', [UserController::class, 'add_project_to_user']);
    
});