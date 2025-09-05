<html>
    <header>
        <title>
        Articles overview
        </title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </header>
    <body class="">
        <header class="max-w-6xl mx-auto bg-blue-500 text-white mb-4 flex items-center h-12">
            <div class="mr-10">
                 TNT Berlin!
            </div>
            <div>
                Navigation
            </div>
        </header>

    <main class="max-w-6xl mx-auto px-4 py-4">
        <h1 class="text-4xl font-bold">{{$article->title}}</h1>

            <div>
                {{$article->content}}
            </div>
    </main>

    <footer class="bg-blue-900 text-white mt-12 min-h-20">

        <div class="max-w-6xl mx-auto px-20 py-4">
            Thank you for coming!
        </div>
    </footer>
    </body>
</html>

