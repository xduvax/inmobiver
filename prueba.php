
	<div class="wrapper-fila">
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
		<div class="prueba123">Elige un archivo</div> <!-- Este DIV es el problema -->
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


	.wrapper-fila{
		width: 1000px;
		white-space: nowrap; 
		font-size: 0px; /* Esto es para que no existan espacios en blanco entre los DIV contenidos */
	}

	.celda{
		width: 160px;
		font-family: 'Lato', sans-serif;
		font-size: 15px;
		min-height: 25px;
		padding: 0px;
		margin: 0px;
		text-align: center;
		display: inline-block;
		border: 1px solid #000;
		/*word-break: break-word;*/
	}

	.prueba123{
		width: 160px;
		min-height: 25px;
		background-color: yellow;
		color: #000;
		font-family: 'Lato', sans-serif;
		font-size: 15px;
		display: inline-block;
		border:1px solid #000;
		margin: 0px;
		padding: 0px;
		outline:0px;
	}