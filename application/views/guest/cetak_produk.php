<?php
/**
* @author thony
*/

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage("", "A4");
$pdf->SetAuthor("CV. Lancar Jaya");
$pdf->SetTitle($judul);

$pdf->Image(base_url().'assets/img/logo-org.jpg');
$pdf->Ln(10);

$pdf->Image($isi_gambar, null, null, 120, 80);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'BU', '14');
$pdf->Write(5, 'Produk :');
$pdf->Ln();
$pdf->SetFont('Arial', '', '14');
$pdf->Write(10, $nama_produk);
$pdf->Ln();
$pdf->SetFont('Arial', 'BU', '14');
$pdf->Write(10, 'Keterangan :');
$pdf->Ln();
$pdf->SetFont('Arial', '', '14');
$pdf->Write(10, $deskripsi_produk);
$pdf->Ln();

$pdf->Output($judul.".pdf", "I");
?>