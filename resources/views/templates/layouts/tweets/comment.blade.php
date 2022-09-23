<div class="space-y-4" style="margin-bottom: 10px;">
    <input name="author_id" value="{{ Auth::user()->id }}" type="hidden">
    <div class="flex">
        <div class="flex-shrink-0 mr-3">
            <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
        </div>
        <div class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed" style="margin-bottom: 50px">
            <strong >{{ Auth::user()->username }}</strong><span class="text-xs text-gray-400"></span>
            <p class="text-xs sm:text-sm">

                <textarea name="content" style="width: 100%" placeholder="оставьте комментарий">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-xs sm:text-sm">комментарий не должен быть пустым</p>
                @enderror
            </p>
            <div class="text-right">
                <button type="submit" class="border bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2">submit</button>
            </div>
        </div>
    </div>
</div>
