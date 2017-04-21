<?php 

	include "conexion.php";

	$clave = $_POST['clave'];

	$query_variable = "DELETE FROM tabla_registros WHERE id_registro = ".$clave;
	if ($mysqli->query($query_variable)){
		?> <script type="text/javascript">datosBorrados();</script> <?php
	}else{
		echo $mysqli->error;
		?><script type="text/javascript">alert('Hubo un error al intentar borrar el registro');</script> <?php
	}
?>