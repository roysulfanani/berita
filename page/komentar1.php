<?php
include '../config/koneksi.php';
session_start();
date_default_timezone_set("Asia/Jakarta");

$date 			= date("Y-m-d H:i:s");
$id 			= $_SESSION['id'];
$id_berita		= $_POST['id_berita'];
$komentar 		= $_POST['komentar'];
$nama_gambar 	= $_FILES['gambar']['name']; // Mendapatkan nama gambar
$lokasi 		= $_FILES['gambar']['tmp_name']; 

/*$name_foto 			= generateRandomString(5);*/

// Menyiapkan tempat nemapung gambar yang diupload
$lokasitujuan 	= "../dist/image_komentar";
// Menguplaod gambar kedalam folder ./image
$upload 		= move_uploaded_file($lokasi, $lokasitujuan."/".$nama_gambar);

/*var_dump($judul, $konten, $nama_gambar);*/

$query 			= mysqli_query($connect, "INSERT INTO tkomentar (created_at, id_berita, isi_komentar, foto_komentar, id_user) values ('$date', '$id_berita', '$komentar', '$nama_gambar', '$id')");

if ($query) {
	header("location:../?page=home");
} else {
	var_dump($query);
}
?>