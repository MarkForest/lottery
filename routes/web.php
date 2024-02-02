<?php

use App\Http\Controllers\LotteryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

Route::get('/', [LotteryController::class, 'index']);
Route::get('/lottery', [LotteryController::class, 'lottery'])->name('lottery.lottery');
Route::post('/lottery/start', [LotteryController::class, 'lotteryStart'])->name('lottery.start');
Route::post('/tickets/generate', [TicketController::class, 'ticketGenerate'])->name('tickets.generate');
Route::post('/users/get-by-tickets', [UserController::class, 'getByTickets'])->name('users.get_by_tickets');
