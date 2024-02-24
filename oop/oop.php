<?php
// buat class
class Manusia{

    // buat property / atribut
    public $nama = "Bintang";
    public $nama2 = "Fadli";

    // buat method / function
    public function makan(){
        echo "$this->nama suka makan Ayam";
    }
    public function minum(){
        echo "$this->nama2 suka minum susu";
    }

}

// buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();