<?php
// Load file koneksi.php
include "config.php";

// Ambil Data yang Dikirim dari Form
$nama_oli 	= $_POST['nama_oli'];
$harga 		= $_POST['harga'];
$stok 		= $_POST['stok'];
$tipe 		= $_POST['tipe'];
$deskripsi 	= $_POST['deskripsi'];
$foto 		= $_FILES['foto']['name'];
$tmp 		= $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO `tb_oli` (`nama_oli`, `harga`, `stok`, `tipe`, `deskripsi`, `foto`) VALUES ('".$nama_oli."', '".$harga."', '".$stok."', '".$tipe."', '".$deskripsi."', '".$fotobaru."');";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: info.php"); // Redirect ke halaman index.php  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='info.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='info.php'>Kembali Ke Form</a>";
}