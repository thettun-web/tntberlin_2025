<x-site-layout>
    <main class="max-w-6xl mx-auto px-4 py-4"
          <h2 class="text-2xl font-bold mb-4">Authors</h2>
    <ul>
        @foreach($authors as $author)
            <li>
                <a href="{{ route('authors.show', $author) }}" class="text-blue-600 hover:underline">
                {{$author->name}}
                </a>
            </li>
        @endforeach
    </ul>
</main>
</x-site-layout>
