<pre>
<?php 
    $a = @$_REQUEST['nama'];
    $b = @$_REQUEST['email'];
    $c = @$_REQUEST['usia'];
    $d = @$_REQUEST['tanggal_lahir'];
    $e = @$_REQUEST['alamat'];
    $f = @$_REQUEST['jenis_kelamin'];
    $g = @$_REQUEST['status'];
    $h = @$_REQUEST['hobi'];

    echo "========== Biodata Diri ==========<br>";
    echo "==============================<br>";
    echo "Nama  = $a <br>";    
    echo "Tanggal Lahir  = $b <br>";    
    echo "Jenis Kelamin  = $c <br>";    
    echo "Alamat  = $d <br>";    
    echo "Agama  = $e <br>";    
    echo "Pendidikan Terakhir  = $f <br>";    
    echo "Status  = $g <br>";   
    echo "hobi  = $h <br>";     

?>
</pre>
