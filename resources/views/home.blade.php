<x-layout>
    <h1 class="text-3xl">Articles</h1>

    @foreach($articles as $article)
        <a href="{{action([\App\Http\Controllers\ArticleController::class, 'show'], ['article' => $article->id])}}"><h2>{{$article->title}}</h2></a>
        <h3>{{$article->created_at}}</h3>
    @endforeach
</x-layout>
