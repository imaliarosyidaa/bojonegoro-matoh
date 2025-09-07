<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public $history=[];

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        $message = $request->input('message');

        $historyiValue = ["q"=>$message];

       $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            "Content-Type"   => "application/json",
            "x-goog-api-key" => env('GEMINI_API_KEY'),
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent", [
            "contents" => [
                [
                    "parts" => [
                        ["text" => $message]
                    ]
                ]
            ]
        ]);

        if($response->successful()){
            $text = $response->json()['candidates'][0]['content']['parts'][0]['text'];
        } else{
            $text = "Something is wrong.";
        }

        $historyiValue['a'] = $text;
        $this->history[]=$historyiValue;

        $history = $this->history;

        return view('chat.index', compact('history'));
    }
}
