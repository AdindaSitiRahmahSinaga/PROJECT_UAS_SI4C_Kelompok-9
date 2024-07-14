<?php
include_once "DB.php";
$id=$_GET['Id_Barang'];
$hapus=mysqli_query($koneksi,"DELETE FROM penjualan WHERE Id_Barang=$id");
if($hapus){
header("location:read.php");
}else{
echo "Hapus Gagal";
}
?>