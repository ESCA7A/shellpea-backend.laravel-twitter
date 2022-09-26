@extends('templates.layouts.base.app')

@section('content')
<form method="POST" action="{{ route('settings.update', Auth::user()) }}">
@csrf
@method('PATCH')

    <h1 style="margin-left: 45%; margin-top: -10%; margin-bottom: 10%">SETTINGS</h1>
    <div class="antialiased mx-auto max-w-screen-sm" style="margin-bottom: 50px;">
        <div class="flex" style="margin: 20px">
            <div class="flex-shrink-0 mr-3">
                NAME
            </div>
            <div class="flex-1 border rounded-lg sm:px-6 sm:py-4">
                <p class="text-sm">
                    <input name="name" type="text" value="{{ $authUser->name }}" style="width: 100%">
                </p>
            </div>
        </div>

        <div class="flex" style="margin: 20px">
            <div class="shrink-0 mr-3">
                USERNAME
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <p class="text-sm">
                    <input name="username" type="text" value="{{ $authUser->username }}" style="width: 100%">
                </p>
            </div>
        </div>

        <div class="flex" style="margin: 20px">
            <div class="flex-shrink-0 mr-3">
                EMAIL
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <p class="text-sm">
                    <input name="email" type="email" value="{{ $authUser->email }}" style="width: 100%">
                </p>
            </div>
        </div>

        <div class="flex" style="margin: 20px">
            <div class="flex-shrink-0 mr-3">
                PROFESSION
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <p class="text-sm">
                    <input name="profession" type="text" value="{{ $authUser->profession }}" style="width: 100%">
                </p>
            </div>
        </div>

        <div class="flex" style="margin: 20px">
            <div class="flex-shrink-0 mr-3">
                BIOGRAPHY
            </div>
            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <p class="text-sm">
                    <input name="bio" type="text" value="{{ $authUser->bio }}" style="width: 100%">
                </p>
            </div>
        </div>
        <button type="submit" style="margin: 10px;" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">change</button>

    </div>
</form>
@endsection