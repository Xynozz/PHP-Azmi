<?php
class bangun_datar{
    public $persegi = "Persegi";
    public $persegi_panjang = "Persegi Panjang";
    public $segitiga = "Segitiga";
    public $lingkaran = "Lingkaran";

    public function luasPersegi(){
        $sisi = 5;
        $luas = 4 * $sisi;
        
            echo "<h2> Menghitung Luas Persegi $this->persegi</h2>";
            echo "Rumus : sisi x sisi <br>";
            echo "Sisi : 5 <br>";
            echo "Luasnya : $luas";
            
        }
    public function luasPersegiPanjang(){
            $panjang = 5;
            $lebar = 4;
            $luas = $panjang * $lebar;
            
                echo "<h2> Menghitung Luas Persegi $this->persegi_panjang</h2>";
                echo "Rumus : panjang x lebar <br>";
                echo "Panjang : 5 <br>";
                echo "Lebar : 4 <br>";
                echo "Luasnya : $luas <br>";
        }
        public function segitiga(){
            $alas = 12;
            $tinggi = 10;
            $luas = 1/2 * $tinggi * $alas ;
            
                echo "<h2>Menghitung Luas $this->segitiga</h2>";
                echo "Rumus : 1/2 x Alas x Tinggi <br>";
                echo "Tinggi : 10<br>";
                echo "Alas : 12<br>";
                echo "Luasnya : $luas cm";
        }
        public function lingkaran(){
            $r = 7;
            $π = $r * $r * 22/7;
            
                echo "<h2>Menghitung Luas $this->lingkaran</h2>";
                echo "Rumus : π x r x r <br>";
                echo "π : 22/7 <br>";
                echo "r : 7 cm<br>";
                echo "Luasnya : $π cm";
            }         
}
$cetak = new bangun_datar();

echo $cetak->luasPersegi();
echo "<br>";
echo $cetak->luasPersegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();
echo "<br>";