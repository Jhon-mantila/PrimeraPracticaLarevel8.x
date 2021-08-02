<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../../css/bootstrap.min.css">
</head>
<body>

<div class="container">
	
		<div class="cabecera p-3 mb-2 bg-white text-dark"">
			
			<div class="float-left">
			<h1>Primeros Pasos en Laravel 8.x</h1>
			</div>
			<div class="float-right">
				<img src="/images/ABC.png" class="imagen_cabecera" alt="" >
			</div>
			<div class="clearfix"></div>
		@yield("cabecera")
		</div>

		
			
		@yield("contenido")
		


		<div class="">
			<p class="p-2 mb-2 bg-secondary text-white rounded text-center text-uppercase h6">Primeros Pasos Laravel 8.x Elaborado por Jhon mantilla 2021</p>
		@yield("pie")
		</div>

</div>


<script src="../../../js/jquery-3.6.0.min.js"></script>
<script src="../../../js/popper.min.js" ></script>
<script type="text/javascript" src="../../../js/bootstrap.min.js"></script>	
</body>
</html>