@foreach($post->comments as $comment)
    <div class="space-y-4" style="margin-bottom: 10px;">
        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
            </div>
            <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                <strong>{{ $comment->user->username }}</strong> <span class="text-xs text-gray-400"></span>
                <p class="text-xs sm:text-sm">{{ $comment->content }}</p>
                <div class="bg-white dark:bg-gray-700 border border-white dark:border-gray-700 rounded-full float-right -mt-8 mr-0.5 flex shadow items-center ">
                    <svg class="p-0.5 h-5 w-5 rounded-full -ml-1.5 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'>
                        <defs><linearGradient id='a2' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#FF6680'/><stop offset='100%' stop-color='#E61739'/></linearGradient>
                            <filter id='c2' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/>
                                <feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1'  k3='1' operator='arithmetic'  result='shadowInnerInner1'/>
                                <feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/>
                            </filter><path id='b2' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/>
                        </defs>
                        <g fill='none'><use fill='url(#a2)' xlink:href='#b2'/><use fill='black' filter='url(#c2)' xlink:href='#b2'/><path fill='white'  d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/></g>
                    </svg>
                    <span class="text-sm ml-1 pr-1.5 text-gray-500 dark:text-gray-300">like</span>
                </div>
            </div>
        </div>
    </div>
@endforeach