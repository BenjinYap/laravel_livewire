<x-layout>
    <section class="mb-4">
        <h1 class="text-3xl font-bold">New Article</h1>
    </section>

    <form id="the-form" method="POST" action="{{ route('articles.store') }}">
        @csrf

        <section class="mb-2">
            <input type="text" name="title" placeholder="{{__('Fancy New Title...')}}" value="{{old('title')}}" class="block w-full focus:outline-none text-lg" />
        </section>

        <section class="mb-2">
            <label class="">Content</label>
            <input type="hidden" name="content" />
            <div id="editorjs" class="border"></div>
        </section>

{{--@php dd($errors) @endphp--}}

        @foreach($errors->all() as $error)
    {{$error}}
@endforeach
        <section>
            <button type="submit" class="bg-gray-300 hover:bg-gray-200 active:bg-gray-400 px-2 py-1 rounded">{{ __('Submit') }}</button>
        </section>
    </form>
</x-layout>

<script>
function onSubmit(e) {

}

document.addEventListener('DOMContentLoaded', () => {
    const editor = new window.EditorJS.EditorJS({
        holder: 'editorjs',
        tools: {
            header: window.EditorJS.Header,
        },
    });

    document.getElementById('the-form').addEventListener('submit', (e) => {
        const form = e.target;

        e.preventDefault();

        editor.save().then(a => {
            if(a.blocks.length > 0) {
                form.elements.content.value = JSON.stringify(a.blocks);
            }

            form.submit();
        });
    });
});
</script>
