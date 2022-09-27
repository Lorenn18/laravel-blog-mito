<x-layouts.main-layout title="Accueil">
    <p class="text-red-500 ">Hello World</p>
    @foreach ($posts as $post)
        <p class="font-bold">{{ $post->name }}</p>
        <p>{{ $post->description }}</p>
    @endforeach

</x-layouts.main-layout>
