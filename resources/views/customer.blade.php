{{--HEADER LAYOUT--}}
{{--@extends('templates.layouts.main.head')--}}

{{--TWEETS STYLESHEETS--}}
@extends('templates.layouts.main.tweet')

<style>
    /*div {*/
    /*    border: 1px solid red;*/
    /*    padding: 10px;*/
    /*}*/
</style>

@if(isset($user))
    <div>
        <span> bio: <br></span>
        <span> id: {{$user->id}} <br></span>
        <span> name: {{$user->name}} <br></span>
        <span> email: {{$user->email}} <br></span>
        <span>username: {{$user->username}} <br></span>
        <div>
            @if(isset($customerTweets))
                @foreach($customerTweets as $tweet)
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
{{--                        <a href="{{route('/user/'. $user->id)}}">{{'@'. $tweet->users->username}}</a>--}}
                        </span><span class="thumbup"><i class="fa fa-thumbs-o-up">{{$tweet->likes}}</i></span>
                                    <p><time>{{$tweet->created_at}}</time> created_at</p>
                                    <p><time>{{$tweet->updated_at}}</time> updated_at</p>
                                    <span class="text4">txt4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endif