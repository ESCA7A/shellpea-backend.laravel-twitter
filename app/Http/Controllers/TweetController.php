<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();
        return view('dashboard', ['tweets' => $tweets]);
    }
}
