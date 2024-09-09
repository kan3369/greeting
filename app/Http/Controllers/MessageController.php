<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //簡単なあいさつ
    public function morning() 
    {
        return view('comments.morning');
    }
    
}
