<x-layouts.main-layout title="Création article">
    <div class="container">
        <h1 class="font-bold text-4xl pt-10 pb-10">New Post</h1>
        <form action=" {{ route('posts.store') }} " method="POST">
            @csrf
            <div class="max-w-md mx-auto">
                {{-- title --}}
                <input type="text" class="block w-full rounded-lg border-gray-400" name="title"
                    placeholder="Titre du post">
                {{-- content --}}
                <textarea name="content" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400"
                    placeholder="Votre contenu..."></textarea>
                {{-- image --}}
                <input type="text" name="url_img" placeholder="Url de votre image"
                    value="https://source.unsplash.com/640x480/?animals?1"
                    class="block w-full rounded-lg border-gray-400">
                <button class="btn-primary btn mt-6 w-full ">Envoyer</button>
            </div>
        </form>
    </div>
</x-layouts.main-layout>
