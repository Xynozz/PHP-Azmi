<?php

class manusia{

    public $nama = "Balmin Cakeup";

    private function tampilkan_nama(){
        echo "Nma saya malasngoding <br>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
// memanggil method
echo $cetak->keluarkan();
// memanggil property
echo $cetak->nama;