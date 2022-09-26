@extends('templates.layouts.base.app')

@section('content')

<div style="margin-top: -10%">
    <h1 style="margin-left: 50%">followers</h1>
    @foreach($followers as $follower)
        <form method="POST" action="{{ route('followers.store', ['follower' => $follower->id]) }}">
        @csrf
            <input name="user_id" value="{{ $follower->follower->id }}" type="hidden">
            <div class="space-y-4" style="margin-bottom: 10px; width: 20%; margin-left: 40%">
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <a href="{{ route('user.show', $follower->follower->id) }}">
                            <strong>{{ $follower->follower->name }}</strong>
                            <span class="text-xs text-gray-400">{{ $follower->follower->username }}</span>
                        </a>
                        <p class="text-xs sm:text-sm">{{ 'краткая биография' }}</p>
                        <input name="follow" type="submit" value="follow" class="border border-bottom" style="padding: 1px 2px">
                    </div>
                </div>
            </div>
        </form>
    @endforeach

    <h1 style="margin-left: 50%">follows</h1>
    @foreach($follows as $follow)
        <form method="POST" action="{{ route('followers.store', ['follower' => $follower->id]) }}">
        @csrf
            <input name="user_id" value="{{ $follow->user->id }}" type="hidden">
            <div class="space-y-4" style="margin-bottom: 10px; width: 20%; margin-left: 40%">
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <a href="{{ route('user.show', $follow->user->id) }}">
                            <strong>{{ $follow->user->name }}</strong>
                            <span class="text-xs text-gray-400">{{ $follow->user->username }}</span>
                        </a>
                        <p class="text-xs sm:text-sm">{{ 'краткая биография' }}</p>
                        <input name="unfollow" type="submit" value="unfollow" class="border border-bottom" style="padding: 1px 2px">
                    </div>
                </div>
            </div>
        </form>
    @endforeach
</div>

@endsection