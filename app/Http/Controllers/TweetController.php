<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function getWelcome()
    {
        $tweet = Tweet::find(1);
        dd($tweet);
    }
}
