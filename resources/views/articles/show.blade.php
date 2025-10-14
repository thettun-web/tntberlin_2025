<x-site-layout>
    <main class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-4xl font-bold">{{$article->title}}</h1>

            <div>
                {{$article->content}}<br/>
            </div>

        <div class="mt-2 mb-6 text-gray-600">
            By <a href="{{ route('authors.show', $article->author) }}" class="font-semibold text-blue-800 hover:underline">{{ $article->author->name }}</a>
        </div>

        {{--        Debug author id and user id mismatch--}}
        {{--        {{ dd('Logged-in User ID:', auth()->id(), 'Article Author ID:', $article->author_id) }}--}}
        {{--        Comes out that user ID is an integer and author ID is a string "12"--}}

    @can('manage-article', $article)
        <div class="flex items-center gap-x-2">
                <a href="{{ route('articles.edit', $article->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">EDIT</a>
            <form action="/articles/{{$article->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">DELETE</button>
            </form>
        </div>
    @endcan

        <h2 class="text-xl font-bold mt-4 italic">Comments</h2>
        <div>

            @foreach($article->comments as $comment)
                <div class="border-b py-4">
                    {{-- This block now has the corrected SVG code for the stars. --}}
                    @if($comment->rating)
                        <div class="flex items-center mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $comment->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                    @endif

                    <p class="text-gray-800">{{ $comment->content }}</p>
                    <p class="text-xs text-gray-500 mt-2">
                        By: {{ $comment->author->name }}
                    </p>
                </div>
            @endforeach
            <br/>

            <form action="/comments" method="post">
                    @csrf

                    <input type="hidden" name="article_id" value="{{$article->id}}"/>
                    <div>
                        <label for="content">Share your idea</label><br/>

                        <!-- Star Rating Input -->
                        <div class="flex items-center mt-2" x-data="{ rating: 0 }">
                            <span class="mr-2 text-gray-600">Your Rating:</span>
                            <template x-for="star in [1, 2, 3, 4, 5]" :key="star">
                                <label :for="'star_' + star" class="cursor-pointer">
                                    <input type="radio" name="rating" :id="'star_' + star" :value="star" class="sr-only" x-model="rating">
                                    <svg class="w-6 h-6" :class="star <= rating ? 'text-yellow-400' : 'text-gray-300'" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </label>
                            </template>
                        </div>

                        <textarea name="content" class="bg-gray-200 p-2 w-3/4">{{old('content')}}</textarea><br/>
                        @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <br/>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Comment</button>
            </form>
        </div>
    </main>
</x-site-layout>
