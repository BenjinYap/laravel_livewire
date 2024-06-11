@php use App\Http\Controllers\ArticleController; @endphp
<x-layout>
    <section class="mb-4">
        <h1 class="text-3xl font-bold">Home</h1>
    </section>

    <section class="mb-4">
        <p>This is a demo Laravel website that lets you view, create, and edit articles. View the source code <a class="text-blue-500 hover:text-blue-300" href="https://github.com/BenjinYap/laravel_livewire">here</a>.</p>
    </section>

    <section>
        <h1 class="text-2xl font-bold mb-2">Recent Articles</h1>

        <div>
            @foreach($articles as $article)
                <div class="[&:not(:last-child)]:border-b py-1">
                    <h2 class="text-lg hover:text-blue-300">
                        <a href="{{action([ArticleController::class, 'show'], ['article' => $article->id])}}">{{$article->title}}</a>
                    </h2>
                    <div class="flex gap-2 text-gray-400 text-sm">
                        <div class="flex items-center gap-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span>{{$article->created_at}}</span>
                        </div>
                        <div class="flex items-center gap-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <span>{{$article->author}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
