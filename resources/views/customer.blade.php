@extends('templates.layouts.main.head')

{{--TWEETS STYLESHEETS--}}
@include('templates.layouts.main.tweet')

<link href="{{ asset('css/templates/tweet-window.css') }}" rel="stylesheet">

@if(isset($user))
    <br><br><br><br>
    <div @class('marg-100')>
        <span> bio: <br></span>
        <span> id: {{$user->id}} <br></span>
        <span> name: {{$user->name}} <br></span>
        <span> email: {{$user->email}} <br></span>
        <span> username: {{$user->username}} <br></span>
        <div @class('marg-100')>
            @if(isset($customerTweets))
                @foreach($customerTweets as $tweet)
                    <div @class("d-flex justify-content-center py-2")>
                        <div @class("second py-2 px-2")><span @class("text1")>{{$tweet->header}}</span>
                            <div @class("d-flex justify-content-between py-1 pt-2")>
                                <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="12">
                                    <span @class("thumbupo")>{{$tweet->content}}</span>
                                    <span @class("text4")>{{$tweet->users->name}}</span>
                                </div>
                                <div>
                    <span @class("text3")>
                        <a href="{{ route('user.show', ['id' => $tweet->user_id]) }}">{{'@'. $tweet->users->username}}</a>
                        </span><span @class('thumbup')><i @class("fa fa-thumbs-o-up")>{{$tweet->likes}}</i></span>
                                    <p><time>{{$tweet->created_at}}</time> <p @class('tm-s')> created_at </p></p>
                                    <p><time>{{$tweet->updated_at}}</time> <p @class('tm-s')> updated_at </p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endif