<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover" src="{{$article->cover}}" alt="Articel Image">
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">auteur </h2>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    {{$article->name}}
                </p>
                <div class="flex mb-4">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">titre:</span>
                        <span class="text-gray-600 dark:text-gray-300"> {{$user->titre }}</span>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300">description </span>
                        <span class="text-gray-600 dark:text-gray-300"> {{$article->content }} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 p-6">
    <h2 class="text-lg font-bold mb-4">Comments</h2>
    <div class="flex flex-col space-y-4">

        <div class="bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-bold">
                {{$commainte }}
            </h3>
            <p class="text-gray-700 text-sm mb-2">{{ }}</p>
            <p class="text-gray-700">{{ }}</p>
            <a href=""> edit</a>
            <a href=""> delete</a>
        </div>



        <form class="bg-white p-4 rounded-lg shadow-md" action="/commentaire/store" method="POST">
            @csrf
            <h3 class="text-lg font-bold mb-2">Add a comment</h3>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="comment">
                    Comment
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="content" rows="3" placeholder="Enter your comment"></textarea>
            </div>
            <button
                class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Submit
            </button>
        </form>
    </div>
</div>