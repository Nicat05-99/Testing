<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        $chatId = '932589292'; // Telegram kullanıcı veya grup ID'si
        $message = 'murad yaxsi oglandir!'; // Gönderilecek mesaj

        $token = '6308090167:AAE5jRs-DoYfgEH_eJV1z5Wjl--DqQs7-Dk'; // Telegram botunuzun tokeni

        $url = "https://api.telegram.org/bot$token/sendMessage";
        $data = [
            'chat_id' => $chatId,
            'text' => $message,
        ];

        $client = new Client();
        $response = $client->post($url, [
            'json' => $data
        ]);

        // İsteğin sonucunu almak için response'ı kullanabilirsiniz
        $statusCode = $response->getStatusCode();
        $content = $response->getBody();

        return $content; // İsteğin sonucunu döndürür, isterseniz farklı bir işlem yapabilirsiniz.
    }
}
