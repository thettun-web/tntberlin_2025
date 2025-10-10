<x-site-layout>
<main class="max-w-6xl mx-auto px-4 py-4">
    <h1 class="text-4xl font-bold">Articles overview</h1>

    @foreach($articles as $article)
    <div>
        <a href="/articles/{{$article->id}}" class="text-lg text-blue-600 hover:underline">{{ $article->title }}</a>
    </div>
    @endforeach
</main>
</x-site-layout>
