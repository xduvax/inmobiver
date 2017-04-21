<?php 	
	include "conexion.php";

	function cambiarFecha($fecha){
		if ($fecha == '') {return ;}
		if ($fecha == '0000-00-00') {return "";}
		$date = new DateTime($fecha);
		return $date->format('d/m/Y');
	}

	$query_variable = "SELECT * FROM tabla_registros";
	$resultado = $mysqli->query($query_variable);
	while ($rows = $resultado->fetch_assoc()):

		$auxiliar1 = $rows['primer_aviso'];
		$auxiliar2 = $rows['segundo_aviso'];
		if ($rows['primer_aviso'] == '0000-00-00' ) {
			$auxiliar1 = '';
		}
		if ($rows['segundo_aviso'] == '0000-00-00') {
			$auxiliar2 = '';
		}
?>
		<div class="wrapper-fila">
			<input type="text" readonly class="celda clave" value='<?= $rows["id_registro"] ?>'>
			<input type="text" class="celda escritura" value='<?= $rows["escritura"] ?>'>
			<input type="text" class="celda nombres" value='<?= $rows["enajenante"] ?>'>
			<input type="text" class="celda nombres" value='<?= $rows["adquiriente"] ?>'>
			<input type="text" class="celda aviso" value='<?= cambiarFecha($auxiliar1) ?>'>
			<input type="text" class="celda aviso" value='<?= cambiarFecha($auxiliar2) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_recepcion"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_pago"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_salida"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_entrega"]) ?>'>
			<input type="text" class="celda" value='<?= $rows["costo"] ?>'>
		</div>
<?php
	endwhile;
	$resultado->free();
?>