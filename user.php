<?php include 'head.php';

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
$result=tampilpendaftar($id);
$result1=tampildataortu($id);
$result2=tampilpendidikan($id);
$result3=tampildok($id);
$result4=tampilpembayaran($id);
?>


<style>
    .block-web.success-box {
        background: rgb(252, 252, 252);
        padding: 10px;
        /* color: white; */
    }
    
    .block-web.dark-box {
        background: darksalmon;
        padding: 10px;
        margin-top: 1%;
    }
    
    .header {
        background: #89b0d2;
        padding: 10px;
        margin-top: 10%;
        color: white;
    }
    
    .navbar {
        margin-bottom: 0;
    }
    
    .daftar {
        background-color: #e4e4e4;
    }
    
    #kepada {
        background-color: rgb(252, 252, 252);
    }

    .konfirm{
      background: rgb(252, 252, 252);
    }
</style>

<div class="container">
    <div class="col-md-6">
        <div class="header">
            <h3>Informasi</h3>
        </div>
        <div class="block-web success-box">

            <div class="porlets-content">
                <?php while ($row=mysqli_fetch_array($result)) { ?>

                <p style="font-weight:bold">Yth Sdr-i.
                    <?php echo strtoupper($row['nama_lengkap']) ?>
                </p>

                <p>Selamat, Anda telah berhasil melakukan Aktivasi Pengisian Formulir. Silahkan melakukan pembayaran sesuai Invoice yang tayang di laman ini.</p>
                <p>Pertanyaan dan Informasi, silahkan kontak Panitia di pkbmmandirimluweh@gmail.com</p>
            </div>
        </div>

        <div class="header">
            <h3>Progress Pengisian Blanko (Formulir)</h3>
        </div>
        <div class="block-web primary-box">

     <div>
      <legend></legend>
      <a class="btn btn-success btn-block" href="orangtua.php">Orang Tua</a><br>
      <a class="btn btn-success btn-block" href="pendidikan.php">Pendidikan</a><br>
      <a class="btn btn-success btn-block" href="dokumen.php">Dokumen</a><br>
    </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="header">
            <h3>Rincian Pembayaran</h3>
        </div>
        <div class="block-web success-box" id="kepada">

            <div class="porlets-content">
                <table width=90%>
                    <tr>
                        <td>No Formulir</td>
                        <td>
                            <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id']);?> </td>
                    </tr>
                    <tr>

                        <td>Kepada</td>
                        <td>
                            <?php echo strtoupper($row['nama_lengkap']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengisian Formulir</td>
                        <td>
                            <?php echo $row['tgl_daftar'] ?>
                        </td>
                    </tr>
                </table>

                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>Biaya</th>
                                <th style="width:25%;">Nominal (Rp.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Formulir</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    - </td>
                            </tr>

                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Bangunan</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    1.680.000 </td>
                            </tr>
                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>SSP (Sumbangan Pembinaan Pendidikan) 1</strong></div>
                                </td>
                                <td class="angka ssp" style="border:0">
                                    300.000 </td>
                            </tr>

                            <tr id="total-bea">
                                <td>TOTAL BIAYA PENDAFTARAN:</td>
                                <td> 1.980.000</td>
                            </tr>
                            <tr>
                                <td>Status Pembayaran</td>
                                <?php if($_SESSION['statusbayar']==1){ ?>
                                <td><a href="exportpdf.php" class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span> Lunas (Cetak) </a></td>
                                <?php }else {?>
                                <td><a class="btn btn-danger btn-block ">Belum Lunas</a></td> 
                                <?php }?>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
      </div>
      </div>
<?php } ?>
      <div class="container">     
      <div class="header">
            <h3>Konfirmasi Pembayaran</h3>
      </div>
        <div class="col-md-12 konfirm">
            <form role="form" action="transfer.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Bank - Atas nama rekening (Contoh : BCA - Atas nama Rian)</label>
                    <div>
                        <input type="text" class="form-control" name="namabank" placeholder="Nama Bank - Atas nama rekening" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Bukti Transfer</label>
                    <div>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" name="bayar" class="btn btn-default btn-primary">konfirmasi</button>
                    </div>
            </form>
        </div>
        </div>
        </form></div></div><br>
    <?php } include 'foot.php'; ?>