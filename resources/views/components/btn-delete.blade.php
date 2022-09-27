@props(['post'])

<div class="">
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
        onsubmit="return confirm('Es-tu sur de vouloir supprimer ceci ?')">
        <button class="btn btn-error">Supprimer</button>
        @csrf
        @method('DELETE')
    </form>
</div>
