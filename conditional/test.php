<!-- <form method="POST">
    <div>
        <label>Nama</label> <br>
        <input name="nama" type="text" placeholder="Masukkan Nama Anda">
    </div>
    <div>
        <label>Masukan Jenis Kelamin</label> <br>
        <input name="jk" type="radio" value="Laki-laki" placeholder="Masukkan Jenis Kelamin">Laki-laki
        <input name="jk" type="radio" value="Perempuan" placeholder="Masukkan Jenis Kelamin">Perempuan
    </div>
    <div>
    <input type="submit" name ="simpan" value='KIRIM' >
    </div>
</form>

<?php
// if (isset($_POST['simpan'])){
//     $a = $_POST['nama'];
//     $b = $_POST['jk'];
// }
//     echo "Nama Anda : $a <br>";
//     echo "Jenis Kelamin Anda $b <br>";
//     if ($b == "Laki-laki"){
//         echo "Hai bro $a";
//     } else if ($b){
//         echo "Hai sis $a";
//     }
//     ?> -->
<?php

//prompt function
function prompt($prompt_nama){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_nama."'); </script>");
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_jk."'); </script>");

    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}


//program
$prompt_nama = "Masukan Nama Anda";
$name = prompt($prompt_nama);
$prompt_jk = "Masukan Jenis Kelamin Anda";
$jk = prompt($prompt_jk);

$output_nama = "Hello there ".$name."!";
echo($output_nama);
$output_jk = "Hello there ".$jk."!";
echo($output_jk);


?>