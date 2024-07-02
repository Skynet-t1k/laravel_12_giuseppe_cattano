<x-layout>
  
  <h1 class="mt-150 text-shadow text-center">Posta Articolo</h1>
  
  <x-errandsuc />
  
  <div class="container formcontainer">
    <form 
    method="POST" 
    action="{{route('articles.store')}}"
    class="bg-body-secondary p-3 mt-2 rounded-4 shadow"
    enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input name="title" type="text" value="{{old('title')}}" class="form-control shadow" id="title">
    </div>
    <div class="mb-3">
      <label for="introduction" class="form-label">Breve Introduzione</label>
      <input name="introduction" type="text" value="{{old('introduction')}}" class="form-control shadow" id="introduction">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Contenuto Principale</label>
      <textarea class="form-control shadow" name="body" id="body" cols="60" rows="10">{{old('body')}}</textarea>
    </div>

    @if ($tags->isNotEmpty())
    <div class="form-group">
      <label for="tags">Tags:</label>
      <select id="tags" name="tags[]" multiple>
        @foreach($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
      </select>
    </div>
    @endif
        
    <button type="submit" class="btn btn-secondary shadow mt-3">Salva</button>
  </form>
  
</div>
</x-layout>