<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);



if(isset($_POST['action']) && $_POST['action'] == 'saveform'){

  echo $_POST['formdata'] . '   ' . $_POST['filedata'];

  // require('fpdf/fpdf.php');
  // $pdf = new FPDF();
  // $pdf->AddPage();
  // $pdf->SetFont('Arial','B',16);
  // $pdf->MultiCell(0,5,"asdasd \nasdasdsa \nzxczxczxc ",0);
  // $pdf->Output();


}


 ?>
