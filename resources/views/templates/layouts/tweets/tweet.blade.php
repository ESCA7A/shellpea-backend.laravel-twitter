{{-- TWEET STYLESHEET --}}
<link href="{{ asset('css/templates/tweet/like.btn.css') }}" rel="stylesheet">
<link href="{{ asset('css/templates/tweet-window.css') }}" rel="stylesheet">

{{-- INCLUDE JQUERY --}}
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

{{-- INCLUDE Jquery script --}}
@vite('resources/js/tweets/like.reactions.js')

@section('reactions')
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
@endsection