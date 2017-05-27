<?php
	include "cabecera.php";
?>

	<div class="tabla_principal">
		<div class="contenido">
			<div class="titulo">INMOBIVER</div>
			<div id="invisi"></div>
		</div>
	</div>

<div class="tabla_principal">
	<div id="posicionado" class="contenido">

		<a href='tabla_principal.php' id="boton_atras">Regresar</a>
		
		<div class="form-wrapper">
			<input type="radio" name="consulta" value="primer_aviso" checked> Primer aviso
			<input type="radio" name="consulta" value="testimonio"> Testimonio
		</div>
		<div class="form-wrapper">
			De:<input id="fecha1" class="campo-fecha" type="text">
			a:<input id="fecha2" class="campo-fecha" type="text">
		</div>
		<div class="form-wrapper">
			<button class="boton_consulta">Consuta</button>
		</div>

	</div>
</div>

<div class="tabla_principal">
	<div id="content" class="contenido">

		<div id="wrapper2" class="wrapper">

		</div>
		<!--<div class="total">Total: </div>-->
		
	</div>
</div>