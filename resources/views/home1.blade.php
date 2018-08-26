@include('gengal')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullpage.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">  
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/lightbox.js')}}"></script>
    <script src="{{asset('js/galleria-1.5.7.min.js')}}"></script>
    <script src="{{asset('js/galleria.flickr.min.js')}}"></script>
    <script src="{{asset('js/fullpage.min.js')}}"></script>
    <title>▲</title>
</head>
<body> 
    <div id="fullpage">   
        <div class= "section" data-anchor="page1">
            <div class="inter flex-center">
                @include('elements.head')
            </div>
        </div>
        <div class="section" data-anchor="page2">
            <div class="inter flex-center">
                @include('elements.sobre')  
            </div>
        </div>
        <div class="section" data-anchor="page3">
            <div class="inter flex-center">
                @include('elements.auto_gal1')
            </div>          
        </div>
{{--         <div class="section" data-anchor="page4">
            <div class="inter flex-center">
                @include('elements.galeria2')
            </div>
        </div> --}}
        <div class="section" data-anchor="page4">
            <div class="inter flex-center">
                @include('elements.pessoal')
            </div>
        </div>
    </div>
</body>
</html>