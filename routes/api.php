<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\createPrompt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::delete('/user/{id}', [UserController::class, 'delete']);
// Route::post('/users', [UserController::class, 'store']);


Route::get('/prompts', [createPrompt::class, 'index']);
Route::get('/prompts/{id}', [createPrompt::class, 'show']);
Route::delete('/prompts/{id}', [createPrompt::class, 'delete']);
Route::post('/prompts', [createPrompt::class, 'store'])->name('prompts.store');
Route::put('/prompts/{id}', [createPrompt::class, 'update'])->name('prompts.update');






