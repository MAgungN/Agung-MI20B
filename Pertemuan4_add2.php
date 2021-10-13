<?php
$con = new mysqli("localhost", "root", "", "db_surat_agung");

$tgl = date ('d F Y');

$query = mysqli_query($con, 'SELECT * FROM tbl_surat')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Surat</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    <row>
        <div class="card">
        <h2 class="text-center">TAMBAH SURAT</h2>
        <div class="card-body">
        <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">No Surat</label>
    <input type="email" class="form-control" id="noSurat" name="no_surat">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Jenis Surat</label>
    <select id="jenisSurat" class="form-select" name="jenis_surat">
      <option selected>Silahkan Pilih</option>
      <option>Surat Keputusan</option>
      <option>Surat Pernyataan</option>
      <option>Surat Penyimpanan</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Tanggal Surat</label>
    <input type="date" class="form-control" id="tglSurat" name="tgl_surat">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">TTD Surat</label>
    <input type="text" class="form-control" id="ttdSurat" name="ttd_surat">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">TTD Menyetujui</label>
    <input type="text" class="form-control" id="ttdMenyetujui" name="ttd_menyetujui">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">TTD Mengetahui</label>
    <input type="text" class="form-control" id="ttdMengetahui" name="ttd_mengetahui">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add</button>
    <button type="submit" class="btn btn-danger">Cancel</button>
  </div>
</form>
        </div>
</div>
</row>
</div>

<?php

if(isset($_POST['submit'])) {
    $no_surat = $_POST['noSurat'];
    $jenis_surat = $_POST['jenisSurat'];
    $tgl_surat = $_POST['tglSurat'];
    $ttd_surat = $_POST['ttdSurat'];
    $ttd_mengetahui = $_POST['ttdMengetahui'];
    $ttd_menyetujui = $_POST['ttdMenyetujui'];

    $result = mysqli_query($mysqli, "INSERT INTO tbl_surat (id, no_surat, jenis_surat, ttd_surat, ttd_mengetahui, ttd_menyetujui)
                            VALUES('','$no_surat','$jenis_surat','$tgl_surat','$tgl_surat', '$ttd_mengetahui',
                            '$ttd_menyetujui')");

    echo "User added successfully. <a href='view.php'>List Surat</a>";
}
?>
</body>
<script src="../assets/js/bootsrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
