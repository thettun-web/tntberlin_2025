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
                <div class="text-sm">
                    {{$comment->content}}
                </div>
            @endforeach
            <br/>

            <form action="/comments" method="post">
                    @csrf

                    <input type="hidden" name="article_id" value="{{$article->id}}"/>
                    <div>
                        <label for="content">Share your idea</label><br/>
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
