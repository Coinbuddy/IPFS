<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(0,5,utf8_decode('asdasdasdasd' . chr(10).chr(10) . 'zxczxczx'),0);
$pdf->Output();

// if(isset($_POST['action']) && $_POST['action'] == 'savepdf'){
//
//
//
// }


 ?>
