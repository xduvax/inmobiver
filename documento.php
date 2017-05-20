<?php

	include "mpdf/mpdf.php";

	$documento = $_POST['documento'];

	$mpdf=new mPDF(); 
	$mpdf->WriteHTML($documento);
	$mpdf->Output();
	echo "Terminado";
	exit;

?>