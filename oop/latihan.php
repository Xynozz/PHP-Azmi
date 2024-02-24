<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<!-- Header -->
    <center>
        <div class="mt-4 mb-3">
    <img src="logo-ass.png" width="200rem" alt="">
    </div>
    <div>
    <h3 class="mb-5 mt-3">PENGGAJIHAN
        <p>GURU/KARYAWAN YAYASAN ASSALAAM</p>
    </h3>
    </div>
    </center>
<!-- /Header -->

<!-- Content -->
<center>
<div class="card border-dark mb-4" style="max-width: 50rem;">
  <div class="card-header text-left">Data Penggajihan</div>
  <div class="card-body text-dark text-left">
  <form>
  <div class="form-group">
    <label for="">No</label>
    <input type="text" class="form-control" placeholder="No">
  </div>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="">Unit Pendidikan</label>
    <select name="" id="" class="form-control">
        <option value="" selected disabled>Pilih Unit Pendidikan</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="">Tanggal Gaji</label>
    <input type="text" class="form-control" placeholder="Tanggal Gaji">
  </div>
  <div class="row text-center" >
    <div class="col">
        <h4 class="font-italic">Gaji</h4>
    </div>
    <div class="col">
        <h4 class="font-italic">Potongan</h4>
    </div>
    </div>
    <div class="row">
  <div class="form-group col">
    <label for="">Jabatan</label>
    <select name="" id="" class="form-control">
      <option value="1" selected disabled>Pilih Jabatan</option>
      <option value="2">Guru</option>
      <option value="3">Karyawan</option>
    </select>
  </div>
  <div class="form-group col">
    <label for="">BPJS</label>
    <input type="text" class="form-control" placeholder="" style="max-width: 23rem;">
  </div>
  </div>
    <div class="row">
  <div class="form-group col">
    <label for="">Lama Kerja</label>
    <input type="text" class="form-control" placeholder="Lama Kerja" style="max-width: 23rem;">
  </div>
  <div class="form-group col">
    <label for="">Pinjaman</label>
    <input type="text" class="form-control" placeholder="Pinjaman" style="max-width: 23rem;">
  </div>
  </div>
    <div class="row">
  <div class="form-group col">
    <label for="">Status Kerja</label>
    <select name="" id="" class="form-control">
      <option value="1" selected disabled>Pilih Status Kerja</option>
      <option value="2">Guru</option>
      <option value="3">Karyawan</option>
    </select>
  </div>
  <div class="form-group col">
    <label for="">Tabungan</label>
    <input type="text" class="form-control" placeholder="Tabungan" style="max-width: 23rem;">
  </div>
  </div>
    <div class="row">
  <div class="form-group col">
    <label for=""></label>
  </div>
  <div class="form-group col">
    <label for="">Lainnya</label>
    <input type="text" class="form-control" placeholder="Lainnya" style="max-width: 23rem;">
  </div>
  </div>
  <center><button type="submit" class="btn btn-primary">Proses</button></center>
</form>
  </div>
</div>
</center>
<!-- /Content -->
</body>
</html>