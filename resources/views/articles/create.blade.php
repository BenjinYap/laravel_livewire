<x-layout>
    <h1>New Article</h1>

    <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <input type="text" name="title" placeholder="{{__('Title...')}}" value="{{old('title')}}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />

{{--@php dd($errors) @endphp--}}

        @foreach($errors->all() as $error)
    {{$error}}
@endforeach
            <button>{{ __('Submit') }}</button>
        </form>
</x-layout>
