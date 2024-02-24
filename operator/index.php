<?php
$nama = "Hansen";
$umur = 23;
$nilai = 87.5;
$status = true;

echo "Nama : $nama<br>";
echo 'Umur :' . $umur . '<br>';
printf("Nilai : %.3f <br>", $nilai);
if($status) {
    echo "Status Siswa Aktif";
}else {
    echo "Status Siswa tidak aktif";
}
?>