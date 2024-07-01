<x-layout>

<div class="container d-flex justify-content-center align-items-center mt-150">

<div class="card shadow m-3 text-center" style="width: 22rem; height: 34rem; display: flex; flex-direction: column;">
    
    <div class="card-body d-flex flex-column">
        <h3 class="card-title">{{ $article->title }}</h3>
        <p class="card-text">{{ $article->introduction }}</p>
        <p class="card-text">{{ $article->body }}</p>
        @if($article->tags->isNotEmpty())
        <div class="d-flex my-3">
        @foreach ($article->tags as $tag)
        <span class="mx-1 badge rounded-pill text-bg-info">#{{$tag->name}}</span>
        @endforeach
        </div>
        @endif
        <div class="mt-auto">
            <a href="{{ route('articles.edit', compact('article')) }}" class="pt-2 btn btn-warning mx-2">Edit</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModalart" class="pt-2 btn btn-danger">Delete</a>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModalart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Stai per cancellare l'articolo, questa azione e' irreversibile!!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{route('articles.destroy', compact('article'))}}" class="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</x-layout>