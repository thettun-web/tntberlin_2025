<x-site-layout>
    <main class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-4xl font-bold">{{$article->title}}</h1>

            <div>
                {{$article->content}}
            </div>
        <h2 class="text-xl font-bold mt-4 italic">Comments</h2>
        <div>
            @foreach($article->comments as $comment)
                <div class="text-sm">
                    {{$comment->content}}
                </div>
            @endforeach
        </div>
    </main>
</x-site-layout>
