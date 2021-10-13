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
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Jenis Surat</label>
    <select id="inputState" class="form-select">
      <option selected>Silahkan Pilih</option>
      <option>Surat Keputusan</option>
      <option>Surat Pernyataan</option>
      <option>Surat Penyimpanan</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Tanggal Surat</label>
    <input type="date" class="form-control" id="inputAddress">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">TTD Surat</label>
    <input type="text" class="form-control" id="inputAddress2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">TTD Menyetujui</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">TTD Mengetahui</label>
    <input type="text" class="form-control" id="inputCity">
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
</body>
<script src="../assets/js/bootsrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
