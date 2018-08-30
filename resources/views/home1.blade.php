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
    <script src="{{asset('js/scrolloverflow.js')}}"></script>
    <script src="{{asset('js/fullpage.min.js')}}"></script>
    <title>▲</title>
</head>
<body> 
    <div id="fullpage">   
        <div class= "section" data-anchor="headd">
            <div class="inter flex-center">
                @include('elements.head')
            </div>
        </div>
        <div class="section" data-anchor="about">
            <div class="inter flex-center">
                @include('elements.sobre')  
            </div>
        </div>
        <div class="section" data-anchor="acts">
            <div class="slide"> 
                <div class="inter flex-center">
                    @include('elements.batalha')
                </div>
            </div>
            <div class="slide"> 
                <div class="inter flex-center">
                    @include('elements.gal_low')
                    @include('elements.lowcura')
                </div>
            </div>
            <div class="slide"> 
                <div class="inter flex-center">
                    @include('elements.gal_lambe')
                    @include('elements.gal_muraw')
                    @include('elements.2016')
                </div>
            </div>            
        </div>
        <div class="section" data-anchor="pes">
            <div class="inter flex-center">
                @include('elements.pessoal')
            </div>
        </div>
    </div>
</body>
</html>