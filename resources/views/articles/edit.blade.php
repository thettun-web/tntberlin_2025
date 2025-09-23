<x-site-layout>

    <form action="/articles/{{$article->id}}" method="post">

        @method('PUT')
        @csrf

        <div>
            <label for="title">Title</label><br/>
            <input type="text" name="title" class="bg-gray-200 p-2" value="{{$article->title}}"><br/>
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content">Content</label><br/>
            <textarea name="content" class="bg-gray-200 p-2 w-3/4">{{$article->content}}</textarea><br/>
            @error('content')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <br/><br/>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">UPDATE</button>
    </form>
</x-site-layout>
