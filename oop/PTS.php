<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PTS</title>
</head>
<body>
        
    <!-- Header -->
    <center>
    <div>
        <img src="logo-ass.png" alt=""class="mt-4 mb-3" width="280px">
    </div>
    <div>
        <h3 class="mt-3 mb-5">
            PENGGAJIHAN
            <P>GURU/KARYAWAN YAYASAN ASSALAAM</P>
        </h3>
    </div>
    </center>
    <!-- /Header -->

    <!-- CONTENT -->
    <center>
    <div class="card border-dark mb-3 mt-3" style="max-width: 50rem;">
  <div class="card-header text-left"><h5  >Data Penggajihan</h5></div>
  <div class="card-body text-dark">
  <form method="post" action="">
  <div class="form-group text-left">
    <label for="">No</label>
    <input type="text" name="no" class="form-control" placeholder="No">
  </div>
  <div class="form-group text-left">
    <label for="">Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama">
  </div>
  <div class="form-group text-left">
    <label for="">Unit Pendidikan</label>
    <select name="unit_pendidikan" id="" class="form-control">
        <option value="" selected disabled>Pilih Unit Pendidikan</option>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="SMK">SMK</option>
    </select>
  </div>
  <div class="form-group text-left">
    <label for="">Tanggal Gaji</label>
    <input type="date" name="tgl_gaji" class="form-control" placeholder="Tanggal Gaji">
  </div>
  <div class="row">
    <div class="col">
        <h3 class="font-italic">Gaji</h3>
    </div>
    <div class="col">
        <h3 class="font-italic">Potongan</h3>
    </div>
  </div>
  <div class="row text-left mt-3 mb-3">
    <div class="col">
        <label for="">Jabatan</label>
        <select name="jabatan" id="" class="form-control">
            <option value="" selected disabled>Pilih Jabatan</option>
            <option value="Kepala Sekolah">Kepala Sekolah</option>
            <option value="Wakasek">Wakasek</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
        </select>
    </div>
    <div class="col">
    <label for="">BPJS</label>
    <input type="number" name="bpjs" class="form-control" placeholder="BPJS">
    </div>
  </div>
  <div class="row text-left mt-3 mb-3">
    <div class="col">
        <label for="">Lama Kerja</label>
        <input type="number" name="lama_kerja" class="form-control" placeholder="Lama Kerja">
    </div>
    <div class="col">
        <label for="">Pinjaman</label>
        <input type="number" name="pinjaman" class="form-control" placeholder="Pinjaman">
    </div>
  </div>
  <div class="row text-left mt-3 mb-3">
    <div class="col">
        <label for="">Status Kerja</label>
        <select name="status_kerja" id="" class="form-control">
            <option value="" selected disabled>Pilih Status Kerja</option>
            <option value="Tetap">Tetap</option>
            <option value="kontrak">Kontrak</option>
        </select>
    </div>
    <div class="col">
        <label for="">Tabungan</label>
        <input type="number" name="tabungan" class="form-control" placeholder="Tabungan">
    </div>
  </div>
  <div class="row text-left mt-3 mb-3">
    <div class="col">

    </div>
    <div class="col">
        <label for="">Lainnya</label>
        <input type="number" name="lainnya" class="form-control" placeholder="Lainnya">
    </div>
  </div>
  <button type="submit" name="proses" class="btn btn-primary">Proses</button>
</form>
  </div>
  </center>
</div>
    <!-- /CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>


<?php

if (isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tgl_gaji = $_POST['tgl_gaji'];
    $jabatan = $_POST['jabatan'];
    $bpjs = $_POST['bpjs'];
    $lama_kerja = $_POST['lama_kerja'];
    $pinjaman = $_POST['pinjaman'];
    $status_kerja = $_POST['status_kerja'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    
        if ($jabatan == "Kepala Sekolah") {
            $gaji = 5000000;
        } elseif ($jabatan == "Wakasek"){
            $gaji = 4000000;
        } elseif ($jabatan == "Guru"){
            $gaji = 3000000;
        } elseif ($jabatan == "Karyawan"){
            $gaji = 2000000;
        } else{
            $gaji = 0;
        }

        if ($status_kerja == "Tetap") {
            $bonus = 1000000;
        } else{
            $bonus = 0;
        }

        $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

    class hasil{

        public function penggajihan($no2,$nama2,$unit_pendidikan2,$tgl_gaji2,$jabatan2,$gaji2,$bpjs2,$lama_kerja2,$pinjaman2,$status_kerja2,$bonus2,$tabungan2,$lainnya2,$gaji_bersih2){
            ?>
            <center>
            <div class="card border-info mb-3 mt-5" style="max-width: 50rem;">
          <div class="card-header text-primary"><h3>YAYASAN ASSALAAM</h3></div>
          <div class="card-body text-primary bg-light">
            <h5 class="card-title">STRUK GAJI</h5>
                <table>
                  <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><?php echo $no2 ?> </td>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $nama2 ?> </td>
                  <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td><?php echo $unit_pendidikan2 ?> </td>
                  <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><?php echo $tgl_gaji2 ?> </td>
                  </tr>
                  <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $jabatan2 ?> </td>
                  </tr>
                  <tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td><?php echo $gaji2 ?> </td>
                  </tr>
                  <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo $lama_kerja2 ?> </td>
                  </tr>
                  <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td><?php echo $status_kerja2 ?> </td>
                  </tr>
                  <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td><?php echo $bonus2 ?> </td>
                  </tr>
                  <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td><?php echo $bpjs2 ?> </td>
                  </tr>
                  <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><?php echo $pinjaman2 ?> </td>
                  </tr>
                  <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><?php echo $tabungan2 ?> </td>
                  </tr>
                  <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td><?php echo $lainnya2 ?> </td>
                  </tr>
                  <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td><?php echo $gaji_bersih2 ?> </td>
                  </tr>
                </table>
          </div>
          </center>

<?php
        }
    }

$cetak = new hasil();
echo $cetak ->penggajihan($no,$nama,$unit_pendidikan,$tgl_gaji,$jabatan,$gaji,$bpjs,$lama_kerja,$pinjaman,$status_kerja,$bonus,$tabungan,$lainnya,$gaji_bersih);
}