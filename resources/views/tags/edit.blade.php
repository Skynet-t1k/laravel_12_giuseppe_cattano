<x-layout>
  
  
    <h1 class="mt-150 text-white text-shadow text-center">Edit Tag</h1>
    <x-errandsuc />
    
    <div class="container formcontainer">
    <form 
    method="POST" 
    action="{{route('tags.update', compact('tag'))}}"
    class="bg-body-secondary p-3 rounded-4 shadow my-5 form"
    enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" value="{{$tag->name}}" class="form-control shadow" id="name">
    </div>
    
    <div class="d-flex align-items-center mt-3">
      <button type="submit" class="btn btn-warning shadow me-2">Update</button>
      <a href="{{ route('tags.index') }}" class="shadow p-2 btn btn-secondary">Cancel</a>
  </div>
  
  </form>
</div>
  
  
  </x-layout>