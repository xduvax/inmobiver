<?php 
	session_start();
	include "../conexion.php";

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$sql_variable = "SELECT * FROM usuarios WHERE usuario = '".$usuario."'";

	$resultado = $mysqli->query($sql_variable);
	if($row = $resultado->fetch_assoc()){

		if(password_verify($password, $row['password'])){

			$_SESSION['login'] = true;
	    	$_SESSION['usuario'] = $usuario;
	   		$_SESSION['start'] = time();
	    	$_SESSION['expira'] = $_SESSION['start'] + 30;
			echo "¡Bienvenido! ".$_SESSION['usuario'];
			?>
			<script type="text/javascript">location.href='../index.php';</script>
			<?php
		}
		else{
			echo "User or password incorrectos...";
		}
	}
	else{
		echo "User or password incorrectos...";
	}
	
	
?>