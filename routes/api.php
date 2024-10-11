<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MessageController;

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

// Correção no grupo de rotas
Route::group(['middleware'=>['auth:sanctum']], function() {

    Route::get('/users', [UserController::class, 'index'])->name('user.index'); // Corrigido

    Route::get('/messages/{user}',[MessageController::class,'listMessages'])->name('message.listMessages');
});
