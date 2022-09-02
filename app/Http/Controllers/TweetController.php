<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function homepage()
    {
        $tweets = Tweet::all();
        return view('homepage', compact('tweets'));
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

    public function update()
    {
        $tweet = Tweet::find(6);
        $tweet->update([
            'header' => 'updated header',
            'content' => 'updated content',
            'email' => 'updated@email.up',
            'likes' => 0
        ]);
        dd('updated');
    }

    public function delete()
    {
        $tweet = Tweet::find(16);
        $tweet->delete();
        dd('hardcore delete');
    }

    public function restore()
    {
        $tweet = Tweet::withTrashed()->find(16);
        $tweet->restore();
        dd('restored!');
    }
}
