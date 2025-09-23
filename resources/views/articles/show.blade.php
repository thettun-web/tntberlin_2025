<x-site-layout>
    <main class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-4xl font-bold">{{$article->title}}</h1>

            <div>
                {{$article->content}}<br/>
            </div>

        <div class="mt-2 mb-6 text-gray-600">
            By <a href="{{ route('authors.show', $article->author) }}" class="font-semibold text-blue-800 hover:underline">{{ $article->author->name }}</a>
        </div>

        <div class="flex items-center gap-x-2">

{{--        referral link error--}}
{{--            <a href="articles/{{$article->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">EDIT</a>--}}

{{--            // fix the link error when clicking edit from the page--}}
            <a href="{{ route('articles.edit', $article->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">EDIT</a>
        <form action="/articles/{{$article->id}}" method="post">
            @method('DELETE')
            @csrf
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">DELETE</button>
        </form>

        </div>

        <h2 class="text-xl font-bold mt-4 italic">Comments</h2>
        <div>
            @foreach($article->comments as $comment)
                <div class="text-sm">
                    {{$comment->content}}
                </div>
            @endforeach
            <br/>

            <form action="" method="post"
                  @csrf
                <div>
                    <label for="content">Share your idea</label><br/>
                    <textarea name="content" class="bg-gray-200 p-2 w-3/4">{{old('content')}}</textarea><br/>
                    @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            <br/>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Comment</button>

        </div>
    </main>
</x-site-layout>
