<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function getWelcome()
    {
        $tweets = Tweet::all()->where('id', '>', 9);
        foreach ($tweets as $tweet)
        {
            echo 'header : '. ($tweet->header). ", likes :". $tweet->likes. "<br>";
        }
    }

    public function create()
    {
        $tweetsArr = [
            [
                'header' => 'title of title',
                'content' => 'some content',
                'email' => 'some@email.com',
                'likes' => 1024
            ],
            [
                'header' => 'title of 2 title',
                'content' => 'some 2 content',
                'email' => 'some2@2email.com',
                'likes' => 2024
                ]
        ];

        foreach ($tweetsArr as $tweet)
        {
            dump($tweet);
            Tweet::create($tweet);
        }
    }
}
