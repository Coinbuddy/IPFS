<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
require 'fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf => AddPage();
$pdf => SetFond('Arial', 'B', 18)
$pdf => Cell(40,10, 'This is demo')
$pdf =>output();
 ?>
