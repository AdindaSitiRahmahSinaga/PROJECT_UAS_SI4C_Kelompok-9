<?php
//Disini akan digunakan kode PHP untuk memproses data
//Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.
require_once "DB.php";
//cek form yang di kirim
if($_SERVER['REQUEST_METHOD']=="POST"){
//ambil data dari form, simpan dalam variabel
$IDBarang=$_POST['IDBarang']; //yg didalam tanda kutip harus sama dengan name di form
$NamaBarang=$_POST['NamaBarang'];
$JumlahBarang=$_POST['JumlahBarang'];
$HargaBarang=$_POST['HargaBarang'];
$Kategori=$_POST['Kategori'];
$Ukuran=$_POST['Ukuran'];
$Message=$_POST['Message'];
$created_at="current_timestamp()";
$update_at="current_timestamp()";
//buat SQL untuk simpan data
$sqlsave="INSERT INTO mahasiswa VALUES
('$IDBarang','$NamaBarang','$JumlahBarang','$HargaBarang','$Kategori','$Ukuran','$Message',$created_at,$update_at)";
//Proses ke mysql server, menggunakan mysqli_query()
if(mysqli_query($koneksi,$sqlsave)){
//redirect ke halaman tampildata.php jika proses simpan berhasil
echo "<script> alert('Data sudah disimpan');
window.location.assign('tampildata.php'); </script>";
}
}
//Sampai disini program sudah siap, kita coba jalankan.
//Ok. program untuk tambah data (save) sudah selesai.
//ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya