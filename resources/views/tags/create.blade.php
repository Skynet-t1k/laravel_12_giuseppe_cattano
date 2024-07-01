<x-layout>
    
    <h1 class="mt-150 text-shadow text-center">Crea Tag</h1>
    
    <x-errandsuc />
    
    <div class="container formcontainer">
        <form 
        method="POST" 
        action="{{route('tags.store')}}"
        class="bg-body-secondary p-3 mt-2 rounded-4 shadow"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome tag</label>
            <input name="name" type="text" value="{{old('name')}}" class="form-control shadow" id="name">
        </div>
        
        <button type="submit" class="btn btn-secondary shadow mt-3">Salva tag</button>
    </form>
    
</div>
</x-layout>