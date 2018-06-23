<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.fullpage.min.css')}}"> 
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/app.min.js')}}"></script>
        <script src="{{asset('js/jquery.fullpage.min.js')}}"></script>
        <title>▲</title>
    </head>
    <body>
        <div id="geral">    
            <div class="section" data-anchor="page1">
                <div id="head">
                    <div id="titulo">
                        transaKryTica
                    </div>

                    <div id="menu">
                        <a href="#sobre">sobre</a>
                        <a href="#">lowcura</a>
                        <a href="#">flerte</a>
                        <a href="#">gentes</a>
                        <a href="#">mídia</a>
                    </div>
                </div>
            </div>
            <div class="section" data-anchor="page2"><a id="sobre"></a>
                <div class="conteudo">
                    <div id="sobre">
                        <h1>transa</h1>
                        <p>
                           Lorem ipsum ultrices ut semper congue nec, bibendum faucibus aptent phasellus adipiscing tortor ut, in curabitur semper ut facilisis. mi lacinia malesuada et sapien nostra mi cubilia rhoncus nullam venenatis eros potenti curae, quam est phasellus suspendisse sapien lectus turpis dictum taciti suscipit a. luctus nisi etiam sagittis malesuada massa vulputate feugiat lorem, habitant fames risus vel tortor sollicitudin sem facilisis, posuere semper luctus duis massa varius purus. curae nisi volutpat nunc arcu cras hac ullamcorper varius, tristique erat in donec posuere etiam habitant placerat, dui ultrices eu cubilia et neque orci.                         
                       </p>
                       <p>
                           Congue dictumst nullam leo hendrerit, volutpat ut cras. 
                       </p>  
                   </div> 
                </div>
            </div>
        </div>
    </body>
</html>