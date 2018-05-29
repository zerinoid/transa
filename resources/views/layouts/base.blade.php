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
			<div id="titulo">
				<div id="box-titulo">
					transaKryTica
				</div>
			</div>
			<div id="menu">
				<div id="box-menu1">
					<div class="sub-menu">item1</div>
					<div class="sub-menu">item2</div>
					<div class="sub-menu">item3</div>
					<div class="sub-menu">item4</div>
					<div class="sub-menu">item5</div>
				</div>
				<div id="box-menu2">
					<div class="sub-menu">item6</div>
					<div class="sub-menu">item7</div>
					<div class="sub-menu">item8</div>
					<div class="sub-menu">item9</div>
					<div class="sub-menu">item10</div>
				</div>
			</div>
			<div id="conteudo">
				@yield('conteudo')
			</div>
		</div>
		</div>
</body>