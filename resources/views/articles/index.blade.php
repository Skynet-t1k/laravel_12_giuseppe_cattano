<x-layout>
    
    <h1 class="mt-150 text-shadow text-center">Articoli</h1>
    <x-errandsuc />
    
    <div class="row w-100 d-flex justify-content-center">
        
        @if ($articles->isEmpty())
        <h2 class="mt-150 text-shadow text-center">Nessun articolo presente ancora postato. Sii il primo a inserirne uno!</h2>
        @endif
        
        @foreach ($articles as $article)
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-5">
            <x-card 
            :$article
            :$tags
            />
        </div>  
        @endforeach
        
    </div>
    
</x-layout>