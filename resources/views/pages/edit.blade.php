<x-layouts.main-layout title="Création article">
    <div class="container">
        <h1 class="font-bold text-4xl pt-10 pb-10">Update Post</h1>
        <form action=" {{ route('posts.update', $post->id) }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="max-w-md mx-auto">
                {{-- title --}}
                <input type="text" class="block w-full rounded-lg border-gray-400" name="title"
                    placeholder="Titre du post" value="{{ old('title', $post->title) }}">
                <x-error-msg name="title" />
                {{-- content --}}
                <textarea name="content" id="" cols="30" rows="10"
                    class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre contenu...">{{ old('content', $post->content) }}</textarea>
                <x-error-msg name="content" />
                {{-- is_published --}}
                <div class="">
                    <label for="">Publication</label>
                    <input @checked(old('is_published', $post->is_published)) type="checkbox" name="is_published" value="is_published">
                </div>
                {{-- image --}}
                <div class="">
                    <label for="">Choisir une image:</label>
                    <input type="file" name="url_img" id="" class="block">
                    <x-error-msg name="url_img" />

                </div>
                {{-- <input type="text" name="url_img" placeholder="Url de votre image"
                  value="https://source.unsplash.com/640x480/?cars?1" class="block w-full rounded-lg border-gray-400"> --}}
                <button class="btn-primary btn mt-6 w-full ">Update</button>
            </div>
        </form>
    </div>
</x-layouts.main-layout>
