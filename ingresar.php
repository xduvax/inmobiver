<?php 
	
	include "conexion.php";

	$escritura = $_POST['escritura'];
	$enajenante = $_POST['enajenante'];
	$adquiriente = $_POST['adquiriente'];
	$primer = $_POST['primer'];
	$entrega_primer = $_POST['entrega_primer'];
	$costo_primer = $_POST['costo_primer'];
	$segundo = $_POST['segundo'];
	$testimonio = $_POST['testimonio'];
	$entrega_testimonio = $_POST['entrega_testimonio'];
	$costo_testimonio = $_POST['costo_testimonio'];
	$pago = $_POST['pago'];
	$salida = $_POST['salida'];
	$entrega = $_POST['entrega'];
	$costo = $_POST['costo'];

	if ($primer == "") {$primer = "0000-00-00";}
	if ($entrega_primer == ""){$entrega_primer = "0000-00-00";}
	if ($segundo == "") {$segundo = "0000-00-00";}
	if ($testimonio == "") {$testimonio = "0000-00-00";}
	if ($entrega_testimonio == "") {$entrega_testimonio = "0000-00-00";}
	if ($pago == "") {$pago = "0000-00-00";}
	if ($salida == "") {$salida = "0000-00-00";}
	if ($entrega == "") {$entrega = "0000-00-00";}

	$query_variable = "INSERT INTO tabla_registros
		(escritura,
		enajenante,
		adquiriente,
		primer_aviso,
		entrega_primer,
		costo_primer,
		segundo_aviso,
		testimonio,
		entrega_testimonio,
		costo_testimonio,
		fecha_pago,
		fecha_salida,
		fecha_entrega,
		costo)
		VALUES 
		('".$escritura."',
		'".$enajenante."',
		'".$adquiriente."',
		'".$primer."',
		'".$entrega_primer."',
		'".$costo_primer."',
		'".$segundo."',
		'".$testimonio."',
		'".$entrega_testimonio."',
		'".$costo_testimonio."',
		'".$pago."',
		'".$salida."',
		'".$entrega."',
		'".$costo."')";

	if ($mysqli->query($query_variable)){
		?> <script type="text/javascript">datosInsertados();</script> <?php
	}else{
		echo $mysqli->error;
		?>
		<script type="text/javascript">alert('Hubo un error al intentar ingresar los datos');</script>
		<?php
	}

?>