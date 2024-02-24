<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum Ukhti <br>";
    }
    public function perkenalan(){
        echo "Nama saya Azmi <br>";
    }
    public function __destruct(){
        echo "Hallo <br>";
    }

}
$cetak = new contoh();

echo $cetak->perkenalan();