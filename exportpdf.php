<?php
# koneksi database
mysql_connect("localhost","root","");
mysql_select_db("pkbm");

 

# include fdpf tergantung direktori file kamu
include "fpdf/fpdf.php";
$tgl = date('d-M-Y');
$pdf = new FPDF('P','mm',array(297,210));
$pdf->Open();
$pdf->addPage();
$pdf->setAutoPageBreak(false);

# header
$pdf->setFont('Arial','',12);
$pdf->text(56,20,'PUSAT KEGIATAN BELAJAR MASYARAKAT');
$pdf->text(70,26,'PKBM MANDIRI MLUWEH '.date('Y'));
$yi = 44;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(15,6,'PAKET',1,0,'C',1);
$pdf->CELL(45,6,'Email',1,0,'C',1);
$pdf->CELL(35,6,'NAMA',1,0,'C',1);
$pdf->CELL(40,6,'Alamat',1,0,'C',1);
$pdf->CELL(35,6,'Tanggal Lahir',1,0,'C',1);
$pdf->CELL(25,6,'Jenis Kelamin',1,0,'C',1);

# menampilkan data dari database
$sql = mysql_query("select * from formulir_mhs order by id asc ");
$no = 1;
$row = 6;
$ya = $yi + $row;
while($data = mysql_fetch_array($sql)){
  $pdf->setXY(10,$ya);
  $pdf->setFont('arial','',9);
  $pdf->setFillColor(255,255,255);
  $pdf->cell(15,6,$data['no_jaket'],1,0,'L',1);
  $pdf->cell(45,6,$data['email'],1,0,'L',1);
  $pdf->CELL(35,6,$data['nama_lengkap'],1,0,'L',1);
  $pdf->cell(40,6,$data['alamat'],1,0,'L',1);
  $pdf->cell(35,6,$data['tgl_lahir'],1,0,'L',1);
  $pdf->CELL(25,6,$data['jenis_kelamin'],1,0,'L',1);
  $ya = $ya+$row;
  $no++;
}



# untuk menuliskan nama bulan dengan format Indonesia
$bln_list = array(
  '01' => 'Januari',
  '02' => 'Februari',
  '03' => 'Maret',
  '04' => 'April',
  '05' => 'Mei',
  '06' => 'Juni',
  '07' => 'Juli',
  '08' => 'Agustus',
  '09' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember'
);

# footer
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->SetX(120);
$pdf->MultiCell(95,10,'Ungaran Timur, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,0, 'Ketua Pengelola PKBM Mandiri Mluweh',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,20, ' ',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, 'ARIF NURCAHYADI, S.PD',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,1, '',0,'C');
$pdf->SetX(120);
$pdf->MultiCell(95,8, '',0,'C');
$pdf->Ln();
$pdf->output();
?>