<x-site-layout>
    <main class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-4xl font-bold">{{$author->name}}</h1>

        <h2 class="text-2xl font-bold">List of articles</h2>
        <ul class="space-y-2">
            @foreach($author->articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article) }}" class="text-lg text-blue-600 hover:underline">
                        {{ $article->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
</x-site-layout>
