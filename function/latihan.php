<?php

function luasPersegi(){
$sisi = 5;
$luas = $sisi * $sisi;

    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Rumus : sisi x sisi <br>";
    echo "Sisi : 5 <br>";
    echo "Luasnya : $luas";
    
}
function luasPersegiPanjang(){
$panjang = 5;
$lebar = 4;
$luas = $panjang * $lebar;

    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Rumus : panjang x lebar <br>";
    echo "Panjang : 5 <br>";
    echo "Lebar : 4 <br>";
    echo "Luasnya : $luas <br>";
}
function segitiga(){
$alas = 12;
$tinggi = 10;
$luas = 1/2 * $tinggi * $alas ;

    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo "Rumus : 1/2 x Alas x Tinggi <br>";
    echo "Tinggi : 10<br>";
    echo "Alas : 12<br>";
    echo "Luasnya : $luas cm";
}
function lingkaran(){
$r = 7;
$π = $r * $r * 22/7;

    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo "Rumus : π x r x r <br>";
    echo "π : 22/7 <br>";
    echo "r : 7 cm<br>";
    echo "Luasnya : $π cm";
}

echo luasPersegi();
echo "<hr>";
echo luasPersegiPanjang();
echo "<hr>";
echo segitiga();
echo "<hr>";
echo lingkaran();

?>