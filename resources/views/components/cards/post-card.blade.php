@props(['url_img', 'title', 'content'])

<div class="max-w-md shadow-xl">
    <img src="{{ $url_img }}" alt="{{ $title }}">
    <div class="min-h-[220px]  p-4">
        <p class="font-bold text-2xl">{{ $title }}</p>
        <p> {{ Str::substr($content, 0, 80) }} </p>
    </div>
</div>
