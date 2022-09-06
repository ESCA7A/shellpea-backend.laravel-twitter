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
        <div class="second py-2 px-2"> <span class="text1">{{$tweet->header}}</span>
            <div class="d-flex justify-content-between py-1 pt-2">
                    <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="18"><span class="text2">{{$tweet->users->name}}</span></div>
                <div>
                    <span class="text3">{{'@'. $tweet->users->username}}</span><span class="thumbup"><i class="fa fa-thumbs-o-up">{{$tweet->likes}}</i></span>
                    <span class="text4"></span>
                </div>
            </div>
        </div>
    </div>
@endforeach
