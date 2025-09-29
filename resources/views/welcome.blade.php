<x-site-layout>

        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        You are logged in. Welcome! {{auth()->user()->name}}!
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-blue-600 hover:text-blue-800">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-md bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white font-semibold ...">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <section class="text-center py-20 px-6">
            <h1 class="text-5xl font-extrabold text-gray-900">Your Hub for Financial News and Analysis</h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">Join a community of market enthusiasts. Read insightful articles, publish your own analysis, and engage in meaningful discussions.</p>
            <div class="mt-8">
                <a href="/articles" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg">Read the Articles</a>
            </div>
        </section>
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Latest News</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($latestArticles as $article)
                        <div class="bg-gray-50 border rounded-lg p-6 shadow-sm">
                            <h3 class="font-serif text-xl font-bold mb-2">
                                <a href="{{ route('articles.show', $article) }}" class="hover:text-blue-600">{{ $article->title }}</a>
                            </h3>
                            <p class="text-gray-600 text-sm mb-4">
                                By <a href="{{ route('authors.show', $article->author) }}" class="font-semibold hover:underline">{{ $article->author->name }}</a>
                            </p>
                            <p class="text-gray-700">
                                {{ Str::limit($article->content, 120) }}
                            </p>
                        </div>
                    @endforeach
            </div>
        </section>
        <section class="py-20 px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-12">Engage with the Market in Three Simple Ways</h2>
                <div class="grid md:grid-cols-3 gap-12">
                    <div class="flex flex-col items-center">
                        <svg class="h-16 w-16 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18"/></svg>
                        <h3 class="text-xl font-bold mb-2">Read Articles</h3>
                        <p class="text-gray-600">Stay informed with up-to-the-minute news and in-depth analysis from our network of authors.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <svg class="h-16 w-16 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L15.232 5.232z"/></svg>
                        <h3 class="text-xl font-bold mb-2">Publish Your Analysis</h3>
                        <p class="text-gray-600">Register as an author to share your unique perspective and contribute to the financial discourse.</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <svg class="h-16 w-16 text-blue-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        <h3 class="text-xl font-bold mb-2">Join the Discussion</h3>
                        <p class="text-gray-600">Read an article you find interesting? Post a comment, share your views, and engage with other readers.</p>
                    </div>
                </div>
            </div>
        </section>
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</x-site-layout>
