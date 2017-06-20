<?php
	include "mpdf/mpdf.php";

	$completo = $_GET['completo'];

	$arreglado = str_replace(' ', '+', $completo);
	$decodificado = base64_decode($arreglado);

	$stylesheet = file_get_contents('estilos/estilospdf.css');
	$mpdf=new mPDF(); 
	$mpdf->WriteHTML($stylesheet,1);
	$mpdf->WriteHTML($decodificado,2);
	$mpdf->Output();

?>