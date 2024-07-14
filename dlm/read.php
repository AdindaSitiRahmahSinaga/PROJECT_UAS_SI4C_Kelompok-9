<br>
<a href="form.php">Tambah Data !</a>
<Br></Br>
<?php
include_once "DB.php";
$sql="SELECT * FROM penjualan";
$q=mysqli_query($koneksi,$sql);
?>
<table width="100%" border="1">
<thead>
<tr>
<th>ID Barang</th> <th>Nama Barang</th> <th>Jumlah Barang</th> <th>Harga Barang</th> <th>Kategori</th> <th>Ukuran</th> 
<th>Message</th> <th>Created_at</th> <th>Update_at</th>
</tr>
</thead>
<tbody>
<?php
$no=1;
while($data=mysqli_fetch_assoc($q)) {
?>
<tr>

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
<?php $no++; } ?>
</tbody>
</table>