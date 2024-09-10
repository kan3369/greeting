<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //ランダムな挨拶を返す
    public function random() 
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんわ', 'おやすみ'];
        $randomGreeting = $greetings[array_rand($greetings)];
        return view('comments.random', ['greeting' => $randomGreeting]);
    }
    
}
