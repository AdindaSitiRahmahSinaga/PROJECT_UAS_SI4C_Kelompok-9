<?php
//include koneksi
include "DB.php";
//buat sql
$sql="INSERT INTO penjualan (`Id_Barang`, `NamaBarang`, `JumlahBarang`, `HargaBarang`, `Kategori`, `Ukuran`, `Message`, `Created_at`, `Updated_at`) 
VALUES ('2', 'One Set Wanita Dewasa', '2', '120000', 'Pakaian Dewasa', 'Ukuran S', 'Cepat Dikirim', '2024-06-08 21:32:16', '2024-06-08 16:30:58')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL Error');
if($q){
    echo "Data berhasil disimpan";
}else{
    echo "Gagal menyimpan data!";
}
?>