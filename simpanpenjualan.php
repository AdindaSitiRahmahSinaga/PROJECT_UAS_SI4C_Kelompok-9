<?php
//include koneksi
include "DB.php";
//buat sql
$sql="INSERT INTO penjualan (`ID Barang`, `Nama Barang`, `Jumlah Barang`, `Harga barang`, `Kategori`, `Ukuran`) 
VALUES (NULL, 'One Set Wanita Dewasa', '2', '120000', 'Pakaian Dewasa','S')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL Error');
if($q){
    echo "Data berhasil disimpan";
}else{
    echo "Gagal menyimpan data!";
}
?>