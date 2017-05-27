<?php
	include "mpdf/mpdf.php";

	$documento = $_GET['documento'];

	$stylesheet = file_get_contents('estilos/estilospdf.css');
	$mpdf=new mPDF(); 
	$mpdf->WriteHTML($stylesheet,1);
	$mpdf->WriteHTML($documento,2);
	$mpdf->Output();

?>