@extends('templates.layouts.base.app')
@section('content')
    @foreach($chats as $chat)
        <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
            <strong>
                left h1
            </strong>
            <strong style="padding-left: 10%;"> sdsd</strong>
            <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">chat with {{ $chat->user_target }}</h4>
            {{-- USERS CHATS --}}
            <div class="space-y-4" style="margin-bottom: 10px; width: 40%">sdsasad
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                    </div>
                    <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <strong>header</strong> <span class="text-xs text-gray-400"></span>
                        <p class="text-xs sm:text-sm">{{ $chat->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection