<!-- This is an example component -->
<div class="max-w-2xl mx-auto absolute top-0 right-0" style="position: absolute; margin-top: 100px; margin-bottom: 100px; margin-right: 50px" >

    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700" style="width: 300px">
        <div class="flex flex-col items-center pb-10">
            <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }}</h3>
            <span class="text-sm text-gray-500 dark:text-gray-400">ПРОФЕССИЯ</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">ОПИСАНИЕ</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">
                        <a class="text-blue-600 hover:underline" href="#" target="_blank">ссылка</a>
                    </span>
            <div class="flex mt-4 space-x-3 lg:mt-6">
                <a href="#"
                   class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                    friend</a>
                <a href="#"
                   class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Message</a>
            </div>
        </div>
    </div>
</div>