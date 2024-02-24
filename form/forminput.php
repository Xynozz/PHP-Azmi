<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
</head>
<body>
    <center>
        <h2>Form Biodata Dari</h2>
        <!-- form -->
            <form method = "POST" action="">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name='nama'></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name='tanggal_lahir'></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name='jk' value="Laki-Laki">Laki-Laki</td>
                        <td><input type="radio" name='jk' value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat" id="" cols="21" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                        <select type="form-select" name='agama'>
                            <option selected disabled>Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Katholik">Katholik</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>:</td>
                        <td>
                            <select type="form-select" name='pendidikan_terakhir'>
                            <option selected disabled>Pendidikan Terakhir</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td><select type="form-select" name='status'>
                            <option selected disabled>Status</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Bekerja">Bekerja</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><textarea name="hobi" id="" cols="21" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td>Cita-Cita</td>
                        <td>:</td>
                        <td><textarea name="cita-cita" id="" cols="21" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name ="simpan" value='KIRIM' ></td>
                    </tr>
                </table>
            </form>
    </center>
</body>
</html>