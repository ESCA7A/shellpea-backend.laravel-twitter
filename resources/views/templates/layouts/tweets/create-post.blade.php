<div style="margin-top: -10%">
    <form action="{{ route('post.store') }}" method="post" style="width: 30%; margin-left: 36%; border: 1px solid maroon; border-radius: 15px; padding: 1% 60px 60px;">
        @csrf
        <div class="flex-shrink-0 mr-3">
            <input name="user_data" value="{{ Auth::user() }}" type="hidden">
            <input name="author_id" value="{{ Auth::user()->id }}" type="hidden">
            <input name="email" value="{{ Auth::user()->email }}" type="hidden">
            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="path/to/avatar" alt="">
        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ Auth::user()->username }}</label>
        <input name="header" style="margin-bottom: 10px" placeholder="Загаловок" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <textarea name="content" placeholder="Give a post" type="text" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        </div>
        <button type="submit" style="margin: 10px;" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">send post</button>
    </form>
</div>
