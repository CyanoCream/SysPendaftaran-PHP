<?php include 'config/config.php';

$result=tampilpendaftar();
?>

<table border="1">

  <thead>
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Tempat Lahir</th>
      <th>Tgl Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>No HP</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Ukuran Jaket</th>
      <th>Email</th>
      <th>Tgl Daftar</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_lengkap'] ?></td>
        <td><?= $row['tempat_lahir'] ?></td>
        <td><?= $row['tgl_lahir'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['agama'] ?></td>
        <td><?= $row['no_hp'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td><?= $row['no_jaket'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['tgl_daftar'] ?></td>
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>
<p><a href="xlsformulir2.php"><button>Export Data ke Excel</button></a></p>