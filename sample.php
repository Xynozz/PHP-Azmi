<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
        <?php
            echo "<h3>HTML dalam PHP</h3>";
            echo "Saya sedang belajar php<hr>";
        ?>
</body>
</html>
<?php

// Variabel

echo "<h3>Variabel</h3>";

$nama = "Azmi Fatahilah";
$kelas = "XI RPL 2";
$alamat = "Jakarta";

echo "Nama : $nama<br>";
echo "Kelas : $kelas<br>";
echo "TTL : Bandung 10 Desember 2006<br>";
echo "Alamat : $alamat <br><hr>";



// tipe data char (karakter)

echo "<h3>Variabel</h3>";

$jenis_kelamin = 'L';

// tipe data string (teks)
$nama_lengkap = "Azmii";

// tipe data integer
$umur = 20;

// tipe data float
$berat = 48.3;

// tipe data float
$tinggi = 182.2;

// tipe data boolean
$isActive = false;
$menikah = true;

echo "Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur tahun<br>";
echo "berat badan: $berat kg<br>";
echo "tinggi badan: $tinggi cm<br>";
echo "menikah: $menikah";
?>