@extends('templates.layouts.base.app')

@section('content')

    @include('templates.layouts.tweets.create-post')

    @foreach($posts as $post)
        <div class="antialiased mx-auto max-w-screen-sm" style="margin-top: 100px;">
            <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                         src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                </div>
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>
                        <a href="{{ route('user.show', $post->user->id) }}">{{ $post->user->username }}</a>
                    </strong>
                    <strong style="padding-left: 10%;">{{ $post->header }}</strong>
                    <span class="text-xs text-gray-400" style="margin-left: 10%;">{{ $post->created_at }}</span>
                    <p class="text-sm" style="margin: 20px">
                        <label>{{ $post->content }}</label></p>

                    <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

                    {{-- USERS COMMENTS --}}
                    @include('templates.layouts.tweets.comments')
                    <div>
                        <div>
                            {{-- POST.FORM-COMMENT AREA --}}
                            @include('templates.layouts.tweets.comment-form')
                        </div>
                        <div>
                            {{-- LIKES AREA --}}
                            @include('templates.layouts.tweets.like')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection