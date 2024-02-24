<?php
$gaji = 1000000;
$pajak = 0.025; // pajak 2.5%

$thp = $gaji - ($gaji * $pajak);
echo "Gaji sebelum dipotong pajak : <b>$gaji</b><br>";
echo "Gaji bersih : <b>$thp</b><br>";