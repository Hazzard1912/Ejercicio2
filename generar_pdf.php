<?php
require('fpdf.php');

class PDF extends FPDF
{
  function Header()
  {

    $this->SetFont('Arial', 'B', 12);
    $this->Cell(0, 10, 'Reporte PDF', 0, 1, 'C');
  }

  function ChapterTitle($title)
  {

    $this->SetFont('Arial', 'B', 12);
    $this->Cell(0, 6, $title, 0, 1);
  }

  function ChapterBody($data)
  {

    $this->SetFont('Arial', '', 12);
    $this->MultiCell(0, 10, $data);
  }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->ChapterTitle('Datos del archivo');
$pdf->ChapterBody('');
$pdf->Output();
