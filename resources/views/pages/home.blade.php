<x-layouts.main-layout title="Accueil">
    <div class="container">
        <p class="text-indigo-500 pt-10 pb-10 font-black">Blog Mito Laravel</p>
        <div class="grid grid-cols-4 gap-3">
            @foreach ($posts as $post)
                <a href="posts/{{ $post->id }}">
                    <x-cards.post-card :title="$post->title" :url_img="$post->url_img" :content="$post->content" />
                </a>
            @endforeach
        </div>
    </div>
</x-layouts.main-layout>
