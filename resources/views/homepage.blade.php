{{--HEADER LAYOUT--}}
@extends('templates.layouts.main.head')

{{--TWEETS STYLESHEETS--}}
@extends('templates.layouts.main.tweet')


@foreach($tweets as $tweet)
    <div class="d-flex justify-content-center py-2">
        <div class="second py-2 px-2"><span class="text1">{{$tweet->header}}</span>
            <div class="d-flex justify-content-between py-1 pt-2">
                <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="12">
                    <span class="thumbupo">{{$tweet->content}}</span>
                    <span class="text4">{{$tweet->users->name}}</span>
                </div>
                <div>
                    <span class="text3">
                        <a href="{{$tweet->users->customer_link}}">{{'@'. $tweet->users->username}}</a>
                        </span><span class="thumbup"><i class="fa fa-thumbs-o-up">{{$tweet->likes}}</i></span>
                    <span class="text4">txt4</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
