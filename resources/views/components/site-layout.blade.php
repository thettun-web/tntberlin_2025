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

<html>
<head>
    <title>Trading News</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="flex flex-col min-h-screen">
<header class="max-w-7xl mx-auto py-6 border-b w-full">
    <div class="text-center mb-4">
        <a href="/articles" class="font-serif text-5xl font-extrabold text-black">TRADING NEWS</a>
        <p class="text-sm text-gray-500">Your Daily Source for Market Insights - Berlin, Germany</p>
    </div>
    <nav class="flex justify-center gap-x-8 text-sm font-medium text-gray-800">
        <a href="/articles" class="hover:underline">All Articles</a>
        <a href="/authors" class="hover:underline">All Authors</a>
    </nav>
</header>

<main class="max-w-6xl mx-auto px-4 py-4 flex-grow w-full">
    {{$slot}}
</main>

<footer class="max-w-7xl mx-auto mt-auto py-8 border-t text-center text-gray-500 text-sm w-full">
    <p>&copy; 2025 Trading News. All rights reserved.</p>
    <p>Thank you for coming! Yayy!</p>
</footer>
</body>
</html>
