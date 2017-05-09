<?php 
	include "cabecera.php";
?>

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
					<input type="text" id='caja5' class="entrada" placeholder="Costo">
					<input type="text" id='caja6' class="entrada fechaingreso" placeholder="Segundo Aviso">
					<input type="text" id='caja7' class="entrada fechaingreso" placeholder="Testimonio">
					<input type="text" id='caja8' class="entrada" placeholder="Costo">
					<input type="text" id='caja9' class="entrada fechaingreso" placeholder="Fecha Pago">
					<input type="text" id='caja10' class="entrada fechaingreso" placeholder="Fecha Salida">
					<input type="text" id='caja11' class="entrada fechaingreso" placeholder="Fecha Entrega">
					<input type="text" id='caja12' class="entrada" placeholder="Costo">
				</div>
			</div>

		</div>
	</div>

	<div class="tabla_principal">
		<div class="contenido">
			<a href="consultas.php" class="boton_eleccion">Ir a consultas</a>
		</div>
	</div>

</body>
</html>