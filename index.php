<!DOCTYPE html>
<html>
<head>
	<title>Inmobiver 3</title>
	<meta charset="utf-8">

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery-confirm.min.js"></script>

	<link rel="stylesheet" type="text/css" href="estilos/estilos.css" media="all" />
	<link rel="stylesheet" type="text/css" href="estilos/jquery-confirm.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="estilos/jquery-ui.min.css" media="all" />

</head>
<body>

	<div class="tabla_principal">
		<div class="contenido">
			<div class="titulo">INMOBIVER</div>
			<div id="invisible"></div>
		</div>
	</div>

	<div class="tabla_principal">
		<div class="contenido">
			
			<div id="wrapper1" class="wrapper">
				<div class="wrapper-fila">
					<div class="celda_titulo clave">Clave</div>
					<div class='celda_titulo escritura'>Escritura</div>
					<div class='celda_titulo nombres'>Enajenante</div>
					<div class='celda_titulo nombres'>Adquiriente</div>
					<div class='celda_titulo'>Primer Aviso</div>
					<div class='celda_titulo'>Segundo Aviso</div>
					<div class='celda_titulo'>Fecha Recepcion</div>
					<div class='celda_titulo'>Fecha Pago</div>
					<div class='celda_titulo'>Fecha Salida</div>
					<div class='celda_titulo'>Fecha Entrega</div>
					<div class='celda_titulo'>Costo</div>
				</div>
				<?php include "consulta_principal.php"; ?>
			</div>

		</div>
	</div>

	<div class="tabla_principal">
		<div class="contenido">

			<div class="wrapper">
				<div class="wrapper-fila">
					<input type="text" id='caja1' class="entrada escritura" placeholder="Escritura">
					<input type="text" id='caja2' class="entrada nombres" placeholder="Enajenante">
					<input type="text" id='caja3' class="entrada nombres" placeholder="Adquiriente">
					<input type="text" id='caja4' class="entrada fechaingreso" placeholder="Primer Aviso">
					<input type="text" id='caja5' class="entrada fechaingreso" placeholder="Segundo Aviso">
					<input type="text" id='caja6' class="entrada fechaingreso" placeholder="Fecha Recepcion">
					<input type="text" id='caja7' class="entrada fechaingreso" placeholder="Fecha Pago">
					<input type="text" id='caja8' class="entrada fechaingreso" placeholder="Fecha Salida">
					<input type="text" id='caja9' class="entrada fechaingreso" placeholder="Fecha Entrega">
					<input type="text" id='caja10' class="entrada" placeholder="Costo">
				</div>
			</div>

		</div>
	</div>

</body>
</html>