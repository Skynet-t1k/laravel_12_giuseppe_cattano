<x-layout>
  
  
  <h1 class="mt-150 text-shadow text-center">Edit Article</h1>
  <x-errandsuc />
  
  <div class="container formcontainer">
    <form 
    method="POST" 
    action="{{route('articles.update', compact('article'))}}"
    class="bg-body-secondary p-3 rounded-4 shadow my-5 form"
    enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="title" class="form-label">article</label>
      <input name="title" type="text" value="{{$article->title}}" class="form-control shadow" id="title">
    </div>
    <div class="mb-3">
      <label for="introduction" class="form-label">article</label>
      <input name="introduction" type="text" value="{{$article->introduction}}" class="form-control shadow" id="introduction">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Main Content</label>
      <textarea class="form-control shadow" name="body" id="body" cols="60" rows="10">{{$article->body}}</textarea>
    </div>
    @if ($tags->isNotEmpty())
    <label for="tags">Tags:</label>
    <select id="tags" name="tags[]" multiple>
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}" @if($article->tags->contains($tag)) selected @endif>{{ $tag->name }}</option>
        @endforeach
    </select>
    @endif
    <div class="d-flex align-items-center mt-3">
      <button type="submit" class="btn btn-warning shadow me-2">Salva</button>
      <a href="{{ route('articles.index') }}" class="shadow p-2 btn btn-secondary">Cancel</a>
    </div>
  </form>
</div>


</x-layout>