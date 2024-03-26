<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telegram;

class TelegramWebhookController extends Controller
{
    public function webhook(Request $request)
    {
    
        
        Telegram::create(['webhook' => 'test']);
}
}