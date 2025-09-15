<x-site-layout>
    <main>
    <h2 class="text-4xl font-bold mb-4">Authors</h2>
    <ul>
        @foreach($authors as $author)
            <li>
                <a href="{{ route('authors.show', $author) }}" class="text-xl text-blue-600 hover:underline">
                {{$author->name}}
                </a>
            </li>
        @endforeach
    </ul>
</main>
</x-site-layout>
