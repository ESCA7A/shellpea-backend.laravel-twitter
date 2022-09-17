{{-- HEAD --}}
@extends('templates.layouts.main.head')

{{--TWEETS STYLESHEETS--}}
@include('templates.layouts.main.tweet')

<div @class('body')
<div @class('marg-100')>
    @foreach($tweets as $tweet)
        <div class="tweet-wrap">
            <div class="tweet-header">
                <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png" alt="" class="avator">
                <div class="tweet-header-info">
                    {{$tweet->users->name}} <span><a href="{{ route('user.show', ['id' => $tweet->user_id]) }}">{{'@'. $tweet->users->username}}</a></span><span>. Jun 27</span>
                    <p>{{$tweet->content}}</p>
                </div>
            </div>
            <div class="tweet-img-wrap">
                <img src="https://pbs.twimg.com/media/Dgti2h0WkAEUPmT.png" alt="" class="tweet-img">
            </div>
            <div class="tweet-info-counts">
                <div class="comments">
                    <button>
                        <svg class="feather feather-message-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <div class="comment-count">comment</div>
                    </button>
                </div>
                <div class="retweets">
                    <button>
                        <svg class="feather feather-repeat sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
                        <div class="retweet-count">число репостов</div>
                    </button>
                </div>
                <div class="likes">
                    <button>
                        <div class="options">
                            <span class="reactions">
                                <div class="icon-container">
                                    <span data-popup="Like" class="like reaction"></span>
                                </div>
                                <div class="icon-container">
                                    <span data-popup="Love"class="love reaction"></span>
                                </div>
                                <div class="icon-container">
                                    <span data-popup="Thankful"class="thankful reaction"></span>
                                </div>
                                <div class="icon-container">
                                    <span data-popup="Haha"class="haha reaction"></span>
                                </div>
                                <div class="icon-container">
                                    <span data-popup="Wow"class="wow reaction"></span>
                                </div>
                                <div class="icon-container">
                                    <span data-popup="Sad"class="sad reaction"></span>
                                </div>
                                <div class="icon-container">
                                    <span data-popup="Angry"class="angry reaction"></span>
                                </div>
                            </span>

                            <span class="button">
                            {{$tweet->likes}} likes
                            </span>
                        </div>
{{--                        <svg class="feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>--}}
{{--                        <div class="likes-count">--}}

{{--                        </div>--}}
                    </button>
                </div>
                <div class="message">
                    <button>
                        <svg class="feather feather-send sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        <div class="repost">
                            репостнуть
                        </div>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>