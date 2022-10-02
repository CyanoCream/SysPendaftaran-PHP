<?php include 'config/config.php';

$result=tampildataortu();
?>
<?php 

?>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Pendaftar</th>
      <th>Ayah</th>
      <th>Ibu</th>
      <th>Wali</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Kota</th>
      <th>Kecamatan</th>
      <th>Pos</th>
      <th>No Hp</th>
      <th>Email</th>
      <th>Pendidikan Ayah</th>
      <th>Pendidikan Ibu</th>
      <th>Pekerjaan Ayah</th>
      <th>Pekerjaan Ibu</th>
      <th>Penghasilan</th>
    </tr>
  </thead>
  
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['nama_ayah'] ?></td>
        <td><?= $row['nama_ibu'] ?></td>
        <td><?= $row['nama_wali'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td><?= $row['kota'] ?></td>
        <td><?= $row['kecamatan'] ?></td>
        <td><?= $row['kodepos'] ?></td>
        <td><?= $row['nohp'] ?></td>
        <td><?= $row['email_ortu'] ?></td>
        <td><?= $row['pendidikan_ayah'] ?></td>
        <td><?= $row['pendidikan_ibu'] ?></td>
        <td><?= $row['pekerjaan_ayah'] ?></td>
        <td><?= $row['pekerjaan_ibu'] ?></td>
        <td><?= $row['penghasilan_ortu'] ?></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>
<p><a href="xlsortu2.php"><button>Export Data ke Excel</button></a></p>
