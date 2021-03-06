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
	$filas = $resultado->num_rows;
	$i = 0;
	while ($rows = $resultado->fetch_assoc()):
	$i = $i + 1;
	$identificador = "identificador".$i;
?>
		<div id="<?= $identificador ?>" class="wrapper-fila">

			<input type="text" readonly class="celda clave" value='<?= $rows["id_registro"] ?>'>
			<select id="municipio" class="celda corto prueba">
				<option selected="true" disabled="disabled"><?= $rows['municipio'] ?></option>
				<option>Veracruz</option>
				<option>Boca del Rio</option>
			</select>
			<input type="text" class="celda corto" value='<?= $rows["escritura"] ?>'>
			<input type="text" class="celda nombres" value='<?= $rows["enajenante"] ?>'>
			<input type="text" class="celda nombres" value='<?= $rows["adquiriente"] ?>'>
			<input type="text" class="celda fecha" value='<?= cambiarFecha($rows["primer_aviso"]) ?>'>
			
			<?php echo "<script type='text/javascript'>idDinamicos(".$i.");</script>"; ?>
			<!--<input id="archivo1" type="file" name="name_archivo">
			<label id="label1" for="archivo1">Elige un archivo</label>
			<div id="boton_archivo">Sube archivo</div>-->
		
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