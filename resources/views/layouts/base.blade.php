<!DOCTYPE html>
<html>
<head>
    <title>◣◢</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
</head>
<body>
	<div id="geral">
		<div id="box">
			<div class="row" id="titulo">
				<div id="box-titulo">
					transaKrYtica
				</div>
			</div>
			<div class="row" id="menu">
				<div id="box-menu">
					<div class="sub-menu">item1</div>
					<div class="sub-menu">item2</div>
					<div class="sub-menu">item3</div>
					<div class="sub-menu">item4</div>
					<div class="sub-menu">item5</div>
				</div>
			</div>
			<div class="row" id="conteudo">
				@yield('conteudo')
			</div>
		</div>
		</div>
</body>