<x-layout>
    <h1 class="text-3xl">Articles</h1>

    @foreach($articles as $article)
        <h2>{{$article->title}}</h2>
        <h3>{{$article->created_at}}</h3>
    @endforeach
</x-layout>
