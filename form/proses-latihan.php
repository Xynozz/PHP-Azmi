<?php
$nama = @$_REQUEST['nama'];
$jenis = @$_REQUEST['jk'];
$tanggal = @$_REQUEST['tgl_lahir'];
$kategori = @$_REQUEST['kategori'];
$kelas = @$_REQUEST['kelas'];
$kemampuan = @$_REQUEST['kemampuan'];
$metode = @$_REQUEST['pembayaran'];
$potongan = 0;

if ($kategori == "Sepak Bola") {
    $harga = 0;
        if ($kelas == "pemula") {
            $harga += 200000;
        } elseif ($kelas == "menengah") {
            $harga += 250000;
        } elseif ($kelas == "lanjutan") {
            $harga += 300000;
        }
} else if ($kategori == "Bulu Tangkis") {
    $harga = 0;
        if ($kelas == "pemula") {
            $harga += 150000;
            if ($jenis == "Wanita") {
                $potongan += $harga * 0.1;
            }
        } elseif ($kelas == "menengah") {
            $harga += 200000;
            if ($jenis == "Wanita") {
                $potongan += $harga * 0.1;
            }
        } elseif ($kelas == "lanjutan") {
            $harga += 250000;
            if ($jenis == "Wanita") {
                $potongan += $harga * 0.1;
            }
        }
} else if ($kategori == "Renang") {
    $harga = 0;
        if ($kelas == "pemula") {
            $harga += 180000;
        } elseif ($kelas == "menengah") {
            $harga += 220000;
        } elseif ($kelas == "lanjutan") {
            $harga += 270000;
        }
}

$total = $harga - $potongan;

if ($total > 500000) {
    $hasil = "Selamat Anda Mendapatkan Merchandise Gratiss!!";
} else {
    $hasil = "Sayang sekali Anda tidak mendapatkan merchandise, Apakah anda ingin menambah kelas?";
}
echo "<center>";
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "Jenis Kelamin : $jenis<br>";
echo "Tanggal Lahir : $tanggal<br>";
echo "Kategori : $kategori<br>";
echo "Kelas : $kelas <br>";
echo "Kemampuan Fisik : $kemampuan<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $potongan<br>";
echo "Total Harga : Rp. $total<br>";
echo $hasil;
echo "</center>";

?>