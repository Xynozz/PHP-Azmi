
<form methode = "POST" action="proses-latihan.php">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div> <br>
        <label>Jenis Kelamin</label> <br>
        <select name="jk">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
    </div>
    <div><br>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tgl_lahir">
    </div>
    <div><br>
        <label>Pilihan Kategori Olahraga</label> <br>
            <input type="radio" name="kategori" value="Sepak Bola">Sepak Bola<br>
            <input type="radio" name="kategori" value="Bulu Tangkis">Bulu Tangkis<br>
            <input type="radio" name="kategori" value="Renang">Renang<br>
    </div>
    <div><br>
        <label>Pilihan Kelas</label> <br>
            <input type="Checkbox" name="kelas" value="pemula">Pemula<br>
            <input type="Checkbox" name="kelas" value="menengah">Menengah<br>
            <input type="Checkbox" name="kelas" value="lanjutan">Lanjutan<br>
    </div>
    <div> <br>
        <label>kemampuan Fisik</label> <br>
        <textarea name="kemampuan" id="" cols="21" rows="3"></textarea>
    </div>
    <div> <br>
        <label>Metode Pembayaran</label> <br>
        <select name="pembayaran">
            <option selected disabled></option>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
    </div>
    <div><br>
        <button>KIRIM</button>
    </div>
</form>
