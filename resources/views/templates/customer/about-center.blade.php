<div class="py-16 white" style="margin-top: -200px;">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">What's {{ $user->username }} say</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-6">
                <div class="swiper-slide">
                    <div class="mx-auto text-center space-y-6 md:w-8/12 lg:w-7/12">
                        @if($user->bio)
                        <p class="text-gray-600"> <span class="font-serif">"</span>{{ $user->bio }}<span class="font-serif">"</span></p>
                        @endif
                        <div>
                            <span class="text-xs text-gray-500">{{ $user->profession }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
