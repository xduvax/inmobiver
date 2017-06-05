<?php
	include "mpdf/mpdf.php";

	$completo = $_GET['completo'];

	$stylesheet = file_get_contents('estilos/estilospdf.css');
	$mpdf=new mPDF(); 
	$mpdf->WriteHTML($stylesheet,1);
	$mpdf->WriteHTML($completo,2);
	$mpdf->Output();

?>