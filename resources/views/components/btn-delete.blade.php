@props(['post'])

<div class="">
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        <button class="btn btn-error">Supprimer</button>
        @csrf
        @method('DELETE')
    </form>
</div>
