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
	<div class="contenido">
		
		<div class="form-wrapper">
			<input type="radio" name="consulta" value="primer" checked> Primer aviso
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
	<div class="contenido">

		<div id="wrapper2" class="wrapper">
			<div class="wrapper-fila">
				<div class="celda_titulo clave">Clave</div>
				<div class='celda_titulo corto'>Escritura</div>
				<div class='celda_titulo nombres'>Enajenante</div>
				<div class='celda_titulo nombres'>Adquiriente</div>
				<div class='celda_titulo'>Primer Aviso</div>
				<div class='celda_titulo corto'>Costo</div>
				<div class='celda_titulo'>Segundo Aviso</div>
				<div class='celda_titulo'>Testimonio</div>
				<div class='celda_titulo corto'>Costo</div>
				<div class='celda_titulo'>Fecha Pago</div>
				<div class='celda_titulo'>Fecha Salida</div>
				<div class='celda_titulo'>Fecha Entrega</div>
				<div class='celda_titulo corto'>Costo</div>
			</div>
			
		</div>
		
	</div>
</div>