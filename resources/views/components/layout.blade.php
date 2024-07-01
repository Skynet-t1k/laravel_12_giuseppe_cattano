<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post it Now</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="background">
        <div class="minheight">
     
<div class="d-flex justify-content-center">
    <x-navbar />
</div>
    
    
    {{$slot}}

    

</div> 
<x-footer />   
</div> 
    
</body>
</html>