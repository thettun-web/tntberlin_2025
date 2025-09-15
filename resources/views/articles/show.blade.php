<x-site-layout>
    <main class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-4xl font-bold">{{$article->title}}</h1>

            <div>
                {{$article->content}}
            </div>
        <h2 class="text-2xl font-bold mt-4">Comments</h2>
        <div>
            @foreach($article->comments as $comment)
                <div>
                    {{$comment->content}}
                </div>
            @endforeach
        </div>
    </main>
</x-site-layout>
