{{--<html>--}}
{{--<head>--}}
{{--    <title>Trading News</title>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <header class="max-w-7xl mx-auto py-6 border-b">--}}
{{--        <div class="text-center mb-4">--}}
{{--            <a href="/articles" class="font-serif text-5xl font-extrabold text-black">TRADING NEWS</a>--}}
{{--            <p class="text-sm text-gray-500">Your Daily Source for Market Insights - Berlin, Germany</p>--}}
{{--        </div>--}}
{{--        <nav class="flex justify-center gap-x-8 text-sm font-medium text-gray-800">--}}
{{--            <a href="/articles" class="hover:underline">All Articles</a>--}}
{{--            <a href="/authors" class="hover:underline">All Authors</a>--}}
{{--        </nav>--}}
{{--    </header>--}}

{{--<main class="max-w-6xl mx-auto px-4 py-4">--}}
{{--    {{$slot}}--}}
{{--</main>--}}

{{--<footer class="max-w-7xl mx-auto mt-12 py-8 border-t text-center text-gray-500 text-sm">--}}
{{--    <p>&copy; 2025 Trading News. All rights reserved.</p>--}}
{{--    <p>Thank you for coming! Yayy!</p>--}}
{{--</footer>--}}
{{--</body>--}}

{{--</html>--}}

{{--<html>--}}
{{--<head>--}}
{{--    <title>Trading News</title>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>--}}
{{--</head>--}}
{{--<body class="flex flex-col min-h-screen">--}}
{{--<header class="max-w-7xl mx-auto py-6 border-b w-full">--}}
{{--    <div class="text-center mb-4">--}}
{{--        <a href="/articles" class="font-serif text-5xl font-extrabold text-black">TRADING NEWS</a>--}}
{{--        <p class="text-sm text-gray-500">Your Daily Source for Market Insights - Berlin, Germany</p>--}}
{{--    </div>--}}
{{--    <nav class="flex justify-center gap-x-8 text-sm font-medium text-gray-800">--}}
{{--        <a href="/articles" class="hover:underline">All ARTICLES</a>--}}
{{--        <a href="/authors" class="hover:underline">All AUTHORS</a>--}}
{{--    </nav>--}}
{{--</header>--}}

{{--<main class="max-w-6xl mx-auto px-4 py-4 flex-grow w-full">--}}
{{--    {{$slot}}--}}
{{--</main>--}}

{{--<footer class="max-w-7xl mx-auto mt-auto py-8 border-t text-center text-gray-500 text-sm w-full">--}}
{{--    <p>&copy; 2025 Trading News. All rights reserved.</p>--}}
{{--    <p>Thank you for coming! Yayy!</p>--}}
{{--</footer>--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading News</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Lato', sans-serif; }
        h1, h2, h3, .font-serif { font-family: 'Merriweather', serif; }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">
<header class="max-w-7xl mx-auto py-6 border-b w-full">
    <div class="text-center mb-4">
        <a href="{{ route('home') }}" class="font-serif text-5xl font-extrabold text-black">TRADING NEWS</a>
        <p class="text-sm text-gray-500">Your Daily Source for Market Insights - Berlin, Germany</p>
    </div>
    <nav class="flex justify-center gap-x-8 text-sm font-medium text-gray-800">
        <a href="{{ route('articles.index') }}" class="hover:underline">All Articles</a>
        <a href="{{ route('authors.index') }}" class="hover:underline">All Authors</a>

        @auth

        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="hover:underline">{{auth()->user()->name}} | Log Out</button>
        </form>
        @endauth
    </nav>
</header>

<main class="max-w-7xl mx-auto px-4 py-4 flex-grow w-full">
    {{ $slot }}
</main>

<footer class="max-w-7xl mx-auto mt-auto py-8 border-t text-center text-gray-500 text-sm w-full">
    <p>&copy; 2025 Trading News | Thet Naing Tun. All rights reserved.</p>
</footer>
</body>
</html>
