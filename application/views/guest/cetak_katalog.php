<?php
require('fpdf/fpdf.php');

class PDF extends FPDF{
	function Header(){
		$this->Image(base_url().'assets/img/logo-org.jpg', 10, 10, 70);
		$this->SetFont('Arial', 'B', 14);
		$this->Cell(0, 10, 'Katalog Produk', 0, 0, 'R');
		$this->Ln(10);
	}

	function Footer(){
		// Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Halaman '.$this->PageNo(), 0, 0, 'C');
	}
}

$pdf = new PDF();
$pdf->AddPage('P', 'A4');
$pdf->SetAuthor('CV. LANCAR JAYA');
$pdf->SetTitle($judul);

foreach ($produk as $p) {
	$id = $p['id_produk'];
	$nama = $p['nama_produk'];
	$desk = $p['deskripsi_produk'];
	$gambar = $p['isi_gambar'];
	$pos_y = $pdf->GetY();

	$pdf->Image(base_url().'assets/img/produk/'.$gambar, 150, $pos_y, 40);
	$pdf->SetFont('Arial', 'B', 10);
	$pdf->MultiCell(140, 10, $nama, 1, 'L');
	$pdf->SetFont('Arial', '', 10);
	$pdf->MultiCell(140, 10, $desk, 1, 'L');
	$pdf->Ln(5);
}

$pdf->Output($judul.'.pdf', 'I');
?>