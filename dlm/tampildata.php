<?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "DB.php";
//Membuat SQL untuk menampilkan data
$sqltampil = "SELECT * FROM penjualan";
//Melakukan proses query ke basisdata
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1;//untuk membuat nomor untuk di tabel hasil query
?>
<br>
<h2>Data Penjualan Butik Inaz</h2>
<!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
<a href="form.php">Tambah Data !</a>
<table width="100%" border="1">
<thead>
<tr>
<th>ID Barang</th> <th>Nama Barang</th> <th>Jumlah Barang</th> <th>Harga Barang</th> <th>Kategori</th> <th>Ukuran</th> 
<th>Message</th> <th>Created_at</th> <th>Update_at</th>
</tr>
</thead>
<tbody>
<?php
//Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while,foreach)
//mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
<!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt dibawah -->
<td><?=$data['Id_Barang']?></td>
<td><?=$data['NamaBarang']?></td>
<td><?=$data['JumlahBarang']?></td>
<td><?=$data['HargaBarang']?></td>
<td><?=$data['Kategori']?></td>
<td><?=$data['Ukuran']?></td>
<td><?=$data['Message']?></td>
<td><?=$data['Created_at']?></td>
<td><?=$data['Updated_at']?></td>
<td>
<a href="edit.php?Id_Barang=<?=$data['Id_Barang']?>">Edit</a> |
<a href="delete.php?Id_Barang=<?=$data['Id_Barang']?>">Delete</a>
</td>
</tr>
<?php $nomor++;
} //akhir dari perulangan ?>
</tbody>
</table