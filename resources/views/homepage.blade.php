@extends('layouts.main')
<div>
    <nav>
        <ul>
            <li>
                <h1>
                    <a href="{{ route('welcome.view')}}">welcome</a>
                </h1>
            </li>
        </ul>
    </nav>
</div>
@foreach($tweets as $tweet)
    <div class="d-flex justify-content-center py-2">
        <div class="second py-2 px-2"> <span class="text1">{{'header : '. ($tweet->header). ", likes :". $tweet->likes}}</span>
            <div class="d-flex justify-content-between py-1 pt-2">
                <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="18"><span class="text2">Curtis</span></div>
                <div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div>
            </div>
        </div>
    </div>
@endforeach
