<?php
//Disini akan digunakan kode PHP untuk memproses data
//Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
require_once "DB.php";
//cek form yang di kirim
if($_SERVER['REQUEST_METHOD']=="POST"){
//ambil data dari form, simpan dalam variabel
$IDBarang=$_POST['IDBarang']; //yg didalam tanda kutip harus sama dengan name di form
$IDBarang=$_POST['IDBarang'];
$NamaBarang=$_POST['NamaBarang'];
$JumlahBarang=$_POST['JumlahBarang'];
$HargaBarang=$_POST['HargaBarang'];
$Kategori=$_POST['Kategori'];
$Ukuran=$_POST['Ukuran'];
$Message=$_POST['Message'];
$created_at="current_timestamp()";
$update_at="current_timestamp()";

//buat SQL untuk simpan data
$sqlupdate="INSERT INTO penjualan
VALUES('$IDBarang','$NamaBarang','$JumlahBarang','$HargaBarang','$Kategori','$Ukuran','$Message',$created_at,$update_at)";
//Proses ke mysql server, menggunakan mysqli_query()
if(mysqli_query($koneksi,$sqlupdate)){
//redirect ke halaman tampildata.php jika proses simpan berhasil
echo "<script> alert('Data sudah diupdate');
window.location.assign('TampilData.php'); </script>";
}
}
//Sampai disini program sudah siap, kita coba jalankan.
//Ok. program untuk tambah data (save) sudah selesai.
//ketika input jgn menggunakan IDBarang yg sama karena IDBarang adalah primary key,
