<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\TelegramWebhookController;
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

Route::get('/telegrambot',[TelegramController::class,'sendMessage']);
Route::match(['post', 'get'],'/telegramWebhook', [TelegramWebhookController::class, 'webhook'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/insert',[TelegramWebhookController::class,'webhook']);

Route::get('/test', function () {
    echo "Merhaba, bu bir test sayfasıdır.";
});