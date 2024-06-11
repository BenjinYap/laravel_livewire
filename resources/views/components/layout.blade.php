<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
<body class="bg-gray-200">
<header class="bg-gray-300 flex items-center gap-4 p-2">
    <h1 class="text-3xl">Laravel Test</h1>
    <nav class="flex gap-2">
        @php
        $links = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'New Article', 'url' => action([\App\Http\Controllers\ArticleController::class, 'create'])],
            ['label' => 'GitHub', 'url' => 'https://github.com/BenjinYap/laravel_livewire'],
        ]
        @endphp
        @foreach($links as $link)
            <a class="hover:text-gray-500" href="{{$link['url']}}">{{$link['label']}}</a>
        @endforeach
    </nav>
</header>

<main class="container mx-auto p-2 md:p-4 bg-white shadow-md">
    {{$slot}}
</main>
</body>
</html>
