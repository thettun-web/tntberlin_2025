<html>
<head>
    <title>Articles overview</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="">
<header class="max-w-6xl mx-auto bg-blue-500 text-xl text-white mb-4 flex items-center h-12">
    <div class="mr-10">
        <a href="/articles">TRADING NEWS</a>
    </div>
    <div>
        <a href="/articles">All articles</a>
        |
        <a href="/authors">All authors</a>
    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-4">

    {{$slot}}

</main>


<footer class="max-w-7xl mx-auto mt-12 py-8 border-t text-center text-gray-500 text-sm">
    <p>&copy; 2025 Trading News. All rights reserved.</p>
    <p>Thank you for coming! Yayy!</p>
</footer>
</body>

</html>
