<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar SMK</h2>
    <center><form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama"></td>
            </tr><br>
            <tr>
                <td>tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jk" value="Perempuan">Perempuan
            </td>
            </tr>
            <tr>
                <td>Biaya Register</td>
                <td>:</td>
                <td><input type="number" name="biaya-register"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select type="form-select" name="jurusan" id="">
                        <option selected disabled align="center" value="Jurusan">Pilih Jurusan</option>
                        <option name="RPL" value="RPL">Rekayasa Perangkat Lunak</option>
                        <option name="TKRO" value="TKRO">Teknik Kendaraan Ringan</option>
                        <option name="TBSM" value="TBSM">Teknik Sepeda Motor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name ="simpan" value='KIRIM' ></td>
            </tr>
        </table><br>
    </form></center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['tgl_lahir'];
    $c = $_POST['jk'];
    $d = $_POST['biaya-register'];
    $e = $_POST['jurusan'];

    if ($e == "RPL"){
        $bj = 2500000;
    } else if ($e == "TKRO"){
        $bj = 3000000;
    } else if ($e == "TBSM"){
        $bj = 3500000;
    }

    $total = $d + $bj;

    echo "<center>=======Struk Registrasi=======<br>";
    echo "Nama : $a <br>";
    echo "Tanggal Lahir : $b <br>";
    echo "Jenis Kelamin : $c <br>";
    echo "Biaya Registrasi : $d <br>";
    echo "Jurusan : $e <br>";
    echo "Biaya Jurusan : $bj <br>";
    echo "Total Pembayaran : $total <br></center>";
}