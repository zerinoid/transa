<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullpage.min.css')}}"> 
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/galleria-1.5.7.min.js')}}"></script>
    <script src="{{asset('js/galleria.flickr.min.js')}}"></script>
    <script src="{{asset('js/fullpage.min.js')}}"></script>
    <title>▲</title>
</head>
<body> 
    <div id="fullpage">   

        <div class= "section" data-anchor="page1">
            <div class="inter flex-center">
                <div id="head">
                    <div class="diff" id="titulo-h">
                        transaKryTica
                    </div>
                    <div id="menu">                        
                        <a href="#page2">sobre</a>
                        <a href="#page3">flerte</a>
                        <a href="#">lowcura</a>
                        <a href="#">gentes</a>
                        <a href="#">contato</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="page2">
            <div class="inter flex-center">
                <div class="black-box">
                    <div id="sobre">
                        <h1>transa</h1>
                        <p>
                           Lorem ipsum ultrices ut semper congue nec, bibendum faucibus aptent phasellus adipiscing tortor ut, in curabitur semper ut facilisis. mi lacinia malesuada et sapien nostra mi cubilia rhoncus nullam venenatis eros potenti curae, quam est phasellus suspendisse sapien lectus turpis dictum taciti suscipit a. luctus nisi etiam sagittis malesuada massa vulputate feugiat lorem, habitant fames risus vel tortor sollicitudin sem facilisis, posuere semper luctus duis massa varius purus. curae nisi volutpat nunc arcu cras hac ullamcorper varius, tristique erat in donec posuere etiam habitant placerat, dui ultrices eu cubilia et neque orci.                         
                       </p>
                       <p>
                           Congue dictumst nullam leo hendrerit, volutpat ut cras. 
                       </p>
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
       <div class="section" data-anchor="page3">
        <div class="inter flex-center">
            <div class="gal">
                <div class="diff" id="titulo-g">
                  <p>2016 ------------------</p>
                </div>
                <div class="galleria">
                </div>
                <script>
                    (function() { 
                        Galleria.loadTheme('{{asset('js/themes/classic/galleria.classic.min.js')}}');
                        Galleria.run('.galleria',{
                          flickr: 'set:72157695507835492',
                          flickrOptions: {
                                sort: 'date-posted-desc'
                             }
                        });
                    }());
                </script>
            </div>
        </div>
    </div>
</div>
</body>
</html>