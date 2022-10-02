<?php include 'config/config.php';

$result=tampilpendidikan();
?>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pendaftar</th>
	  <th>NIK</th>
      <th>Sekolah Asal</th>
      <th>Kota</th>
      <th>Kecamatan</th>
      <th>Kode Pos</th>
      <th>Nama SMP</th>
      <th>No Ijazah</th>
      <th>Tahun Lulus</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
		<td><?= $row['NIK'] ?></td>
        <td><?= $row['status_slta'] ?></td>
        <td><?= $row['kota'] ?></td>
        <td><?= $row['kecamatan'] ?></td>
        <td><?= $row['kode_pos'] ?></td>
        <td><?= $row['nama_slta'] ?></td>
        <td><?= $row['no_ijazah'] ?></td>
        <td><?= $row['tahun lulus'] ?></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>
<p><a href="xlspendidikan2.php"><button>Export Data ke Excel</button></a></p>