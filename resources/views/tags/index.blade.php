<x-layout>
    
    <h1 class="mt-150 text-shadow text-center">Tags</h1>
    <div class="container-fluid d-flex justify-content-center w-100">
    <x-errandsuc />
    </div>
    
    <div class="row w-100 d-flex justify-content-center">
        @if ($tags->isEmpty())
        <h2 class="mt-150 text-shadow text-center">Nessun Tag presente. Sii il primo a inserirne uno!</h2>
        @endif
        
               
        @foreach ($tags as $tag)
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-5">
            <x-card 
            :$tag
            />
        </div>  
        @endforeach
        
    </div>
    
</x-layout>