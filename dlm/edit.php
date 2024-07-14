<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan dikirim melalui link (get) -->
<?php
$id=$_GET['Id_Barang'];
//membuat sql tampil data
$sqldata="SELECT * FROM penjualan WHERE Id_Barang='$id'";
//ambil koneksi data
require_once "DB.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Penjualan</h2>
<!-- tag form -->
 
<form action="update.php" method="POST">
ID Barang : <br>
<input type="text" name="Id_Barang" id="">
<br>
Nama Barang : <br>
<input type="text" name="NamaBarang" id="">
<br>
Jumlah Barang : <br>
<input type="text" name="JumlahBarang" id="">
<br>
Harga Barang : <br>
<input type="text" name="HargaBarang" id="">
<br>
<br>
Kategori : <br>
<select name="Kategori" id="">
<option value="Pakaian Dewasa">Pakaian Dewasa</option>
<option value="Pakaian Anak-Anak">Pakaian Anak-Anak</option>
</select>
<br>
<br>
Ukuran : <br>
<select name="Ukuran" id="">
<option value="Ukuran S">Ukuran S</option>
<option value="Ukuran M">Ukuran M</option>
<option value="Ukuran L">Ukuran L</option>
<option value="Ukuran XL">Ukuran XL</option>
</select>
<br>
<br>
Message : <br>
<input type="text" name="Message" id="">
<br>
<br>
<button type="submit">Update Data Penjualan</button>
</form>