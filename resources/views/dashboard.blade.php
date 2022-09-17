{{-- HEAD --}}
@extends('templates.layouts.main.head')

{{--TWEETS STYLESHEETS--}}
@include('templates.layouts.main.tweet')

<div @class('body')
<div @class('marg-100')>
    @foreach($tweets as $tweet)
            <div @class('d-flex justify-content-center py-2')>
                <div @class('second py-2 px-2')><span @class('text1')>{{$tweet->header}}</span>
                    <div @class('d-flex justify-content-between py-1 pt-2')>
                        <div>
                            <img src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" width="12">
                            <span @class('thumbupo')>{{$tweet->content}}</span>
                            <div>
                                <span @@class('text4')>{{$tweet->users->name}}</span>
                            </div>
                            <div @class('text3')><p @class('tm-s')>лайкнули: маша и еще..</p>
                                <span @class('thumbup')><i @class('fa fa-thumbs-o-up')>{{$tweet->likes}}</i></span>
                                <span @class('text4')></span>
                                <a href="{{ route('user.show', ['id' => $tweet->user_id]) }}">{{'@'. $tweet->users->username}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
</div>
</div>