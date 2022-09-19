{{-- HEAD --}}
@extends('templates.layouts.main.app')
{{--@extends('components.templates.main')--}}

@section('content')

{{--TWEETS STYLESHEETS--}}
{{--@include('templates.layouts.tweets.tweet')--}}

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>
            <div @class('body')>
                <div @class('marg-100')>

                    @foreach($posts as $post)
                        <div class="tweet-wrap">
                            <div class="tweet-header">
                                <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo-shadow.png"
                                     alt="" class="avator">
                                <div class="tweet-header-info">
                                    {{$post->user->name}} <span><a
                                                href="{{ route('user.show', ['id' => $post->author_id]) }}">{{'@'. $post->user->username}}</a></span><span>. Jun 27</span>
                                    <p>{{$post->content}}</p>
                                </div>
                            </div>
                            <div class="tweet-img-wrap">
                                <img src="https://pbs.twimg.com/media/Dgti2h0WkAEUPmT.png" alt=""
                                     class="tweet-img">
                            </div>
                            <form class="tweet-info-counts" action="" method="get">
                                @csrf
                                <div class="comments">
                                    <button name="comment">
                                        <div class="options">
                                            <div class="comment-count">comment</div>
                                        </div>
                                    </button>
                                </div>
                                <div class="retweets">
                                    <button name="btn.retweet">
                                        <div class="options">
                                            <div class="retweet-count">число репостов</div>
                                        </div>
                                    </button>
                                </div>
                                <div class="likes">
                                    <button name="btn.like">
                                        <div class="options">
                                            @yield('reactions')
                                            <span class="button">♥ {{ $post->likes }} </span>
                                        </div>
                                    </button>
                                </div>
                                <div class="message">
                                    <button name="btn.message">
                                        <div class="options">
                                            <div class="repost"> репостнуть</div>
                                        </div>
                                    </button>
                                </div>
                            </form>

                            {{-- COMMENTS --}}
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8 col-lg-6" style="width: 100%">
                                    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                                        <form action="{{ route('dashboard.create') }}" method="post">
                                        @csrf
                                            @foreach($post->comments as $comment)
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <p> {{ $comment->content }} </p>
                                                    <span>{{ $comment->created_at }}created_at</span>

                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="25"
                                                                 height="25" />
                                                            <p class="small mb-0 ms-2"><span>{{ $comment->user->name }}</span></p>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <p class="small text-muted mb-0">Upvote?</p>
                                                            <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                                                            <p class="small text-muted mb-0">4</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @include('templates.layouts.tweets.comment')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection