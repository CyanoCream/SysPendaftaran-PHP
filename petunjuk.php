<?php include 'head.php'; ?>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>

  <style>

.jumbotron{
  background-color: #e4e4e4;
}

.navbar-default{
  margin-bottom: 0;
}
</style>
<script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
  <div class="container">
<div id="accordion">
  <h3>Isi Formulir</h3>
  <div>
    <p>
    Silahkan Meningisi Formulir pendaftaran untuk dapat melakukan Login dan melengkapi data
    </p>
  </div>
  <h3>Isi data pendidikan</h3>
  <div>
    <p>
    Jika pengisian formulir berhasil silahkan masuk ke pedidikan kemudian isikan data
    </p>
  </div>
  <h3>Isi data orang tua</h3>
  <div>
    <p>
    Jika pengisian berhasil isilah data orang tua dengan sebenar benarnya
    </p>
  </div>
  <h3>Upload Dokumen</h3>
  <div>
    <p>Upload beberapa dokumen yang diperlukan sebagai bahan perlengkapan data dalam bentuk gambar 'JPG'
    </p>
  </div>
  <h3>Pembayaran</h3>
  <div>
    <p>Jika sudah melengkapi pendaftaran silahkan lakukan pembayaran biaya pendafataran dan unggah bukti pembayaran, jika sudah divalidasi pembayaran silahkan cetak bukti pendaftaran di tombol "LUNAS" 
    </p>
  </div>
    <h3>Pengumuman</h3>
  <div>
    <p>Cetak bukti pendaftaran kemudian dikumpulkan ke pengelola sebelum masuk tahun ajaran baru
    </p>
  </div>
</div>
 </div>
 <br>


<?php include 'foot.php'; ?>