<x-layout>
    
    <h1 class="mt-150 text-shadow text-center">Tags</h1>
    <x-errandsuc />
    
    <div class="row w-100 d-flex justify-content-center">
        
               
        @foreach ($tags as $tag)
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-5">
            <x-card 
            :$tag
            />
        </div>  
        @endforeach
        
    </div>
    
</x-layout>