<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{
    public function tweets()
    {

        $tweets = Tweet::all();
        foreach ($tweets as $tweet)
        {
            $users[] = $tweet;
        }

        for ($i = 1; $tweets->find($i) != $tweets->last(); $i++)
        {
            $users[] = Tweet::find($i)->users;
        }

        return view('homepage', ['tweets' => $tweets, 'users' => $users]);
    }
}
