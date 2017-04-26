<?php 
	session_start();

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	include "../conexion.php";

	$sql_variable = "SELECT FROM usuarios WHERE usuario = '".$usuario."'";

	$resultado = $mysqli->query($sql_variable);
	if ($resultado->num_rows > 0){
		$row = $resultado->fetch_array(MYSQLI_ASSOC);
		if (password_verify($password, $row['password'])){
			$_SESSION['login'] = true;
			$_SESSION['user'] = $usuario;
			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + 60;
			echo "¡Bienvenido! ".$_SESSION['user'];
		}
	}
	else{
		echo "User or Password incorrectos";
	}
	
?>