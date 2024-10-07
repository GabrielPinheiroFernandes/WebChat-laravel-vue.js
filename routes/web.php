<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Web\PageController; // Importação do PageController

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

Route::get('/', [PageController::class, 'Welcome'])->name('welcome');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', [PageController::class, 'DashBoard'])->name('dashboard'); // Corrigido para 'dashboard'
    Route::get('/chat', [PageController::class, 'Chat'])->name('chat');
});
