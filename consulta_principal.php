<?php
	session_start();
	if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
		
	}
	else{
		echo "Para ingresar a esta pagina, debe iniciar sesion...<br>";
		echo "<a href='login'>Aqui</a>";
		exit;
	}
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
?>
		<div class="wrapper-fila">
			<input type="text" readonly class="celda clave" value='<?= $rows["id_registro"] ?>'>
			<input type="text" class="celda corto" value='<?= $rows["escritura"] ?>'>
			<input type="text" class="celda nombres" value='<?= $rows["enajenante"] ?>'>
			<input type="text" class="celda nombres" value='<?= $rows["adquiriente"] ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["primer_aviso"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["entrega_primer"]) ?>'>
			<input type="text" class="celda corto" value='<?= $rows["costo_primer"] ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["segundo_aviso"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["testimonio"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["entrega_testimonio"]) ?>'>
			<input type="text" class="celda corto" value='<?= $rows["costo_testimonio"] ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_pago"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_salida"]) ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["fecha_entrega"]) ?>'>
			<input type="text" class="celda corto" value='<?= $rows["costo"] ?>'>
		</div>
<?php
	endwhile;
	$resultado->free();
?>