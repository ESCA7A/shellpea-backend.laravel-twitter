<form>
    @foreach($posts as $post)
    <div class="antialiased mx-auto max-w-screen-sm">
        <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>

            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                </div>
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>{{ $post->user->username }}</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                    <p class="text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                    </p>

                    <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Replies</h4>

                    <div class="space-y-4">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                                <p class="text-xs sm:text-sm">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                                <p class="text-xs sm:text-sm">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua.
                                </p>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-700 border border-white dark:border-gray-700 rounded-full float-right -mt-8 mr-0.5 flex shadow items-center ">
                            <svg class="p-0.5 h-5 w-5 rounded-full z-20 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a1' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#18AFFF'/><stop offset='100%' stop-color='#0062DF'/></linearGradient><filter id='c1' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/><feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/></filter><path id='b1' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/></defs><g fill='none'><use fill='url(#a1)' xlink:href='#b1'/><use fill='black' filter='url(#c1)' xlink:href='#b1'/><path fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/></g></svg>
                            <svg class="p-0.5 h-5 w-5 rounded-full -ml-1.5 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a2' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#FF6680'/><stop offset='100%' stop-color='#E61739'/></linearGradient><filter id='c2' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/><feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/></filter><path id='b2' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/></defs><g fill='none'><use fill='url(#a2)' xlink:href='#b2'/><use fill='black' filter='url(#c2)' xlink:href='#b2'/><path fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/></g></svg>
                            <span class="text-sm ml-1 pr-1.5 text-gray-500 dark:text-gray-300">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</form>
