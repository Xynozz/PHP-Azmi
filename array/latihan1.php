<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <center>
    <h1>Data Ujian Kelas XI RPL</h1>
    <table><br>
        <tr>
            <td>Jumlah Siswa</td>
            <td>:</td>
            <td><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="Proses"></td>
        </tr>
    </table>
    </center>
    </form><br>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $jumlah = $_POST['jumlah'];



    for ($i=1 ; $i <= $jumlah ; $i++){
        echo "
        <form>
            <center>
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Data siswa ke $i</td>
                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td> : </td>
                        <td><input type=text></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : </td>
                        <td><input type=text></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td> : </td>
                        <td><input type=text></td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td> : </td>
                        <td><input type=number></td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td> : </td>
                        <td><input type=number></td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td> : </td>
                        <td><input type=number></td>
                    </tr>
                    <tr>
                        <td>Produktf</td>
                        <td> : </td>
                        <td><input type=number></td>
                    </tr>
                </table>
            </center>
        </form>
        ";

};

if ($jumlah == true ) {
    echo "<center>
<table>
<tr>
<td></td>
<td></td>
<td><input type=submit value=Proses></td>
</tr></table>
</center>";
}

};