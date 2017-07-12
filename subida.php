<?php
	$auxiliar = "";
	$path_archivo = "";
	$ext_archivo = "";
	$error = 0;

	if(isset($_FILES['archivo']['name'])){

		$carpeta = "uploads/";
		$path_archivo = $carpeta.$_FILES['archivo']['name']; // uploads/domi.jpg
		$ext_archivo = pathinfo($path_archivo,PATHINFO_EXTENSION);

		if (file_exists($path_archivo)) {
			$auxiliar = "Este nombre de archivo ya existe en el servidor.";
			$error = 1;
		}
		else{
			if ($_FILES['archivo']['size'] > 500000) {
				$auxiliar = "El peso del archivo sobrepasa lo establecido (500KB).";
				$error = 1;
			}
			else{
				if ($ext_archivo != "pdf") {
					$auxiliar = "Solo se aceptan archivos PDF.";
					$error = 1;
				}
			}

		}

		if ($error == 1) {
			echo "Ha habido un error: ".$auxiliar;
		}
		else{
			if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path_archivo)) {
				echo "El archivo ".$_FILES['archivo']['name']." se ha subido correctamente.";
			}
		}

	}
	else{
		echo "Vacio...";
	}

?>