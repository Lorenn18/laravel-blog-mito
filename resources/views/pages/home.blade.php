<x-layouts.main-layout title="Accueil">
    <div class="container">
        <p class="text-indigo-500 pt-10 pb-10 font-black">Blog Mito Laravel</p>
        <div class="grid grid-cols-4 gap-3" id="container_card">
            @forelse ($posts as $post)
                <a href="posts/{{ $post->id }}">
                    <x-cards.post-card :title="$post->title" :url_img="$post->url_img" :content="$post->content" />
                </a>
            @empty
                <p class="">Pas d'article disponible</p>
            @endforelse
        </div>
        <div class="my-12 flex justify-end">
            {{$posts->links('pagination::tailwind')}}
        </div>
    </div>
</x-layouts.main-layout>
