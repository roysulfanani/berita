<?php
include '../config/koneksi.php';
require_once("../vendors/notifikasi/notifikasi_service.php");
session_start();
date_default_timezone_set("Asia/Jakarta");

$date 			= date("Y-m-d H:i:s");
$id 			= $_SESSION['id'];
$judul 			= $_POST['judul'];
$konten 		= $_POST['konten'];
$id_kategori 	= $_POST['kategori'];
$nama_gambar 	= $_FILES['foto'] ['name']; // Mendapatkan nama gambar
$lokasi 		= $_FILES['foto'] ['tmp_name'];

/*$name_foto 			= generateRandomString(5);*/

// Menyiapkan tempat nemapung gambar yang diupload
$lokasitujuan 	= "../dist/image";
// Menguplaod gambar kedalam folder ./image
$upload 		= move_uploaded_file($lokasi, $lokasitujuan."/".$nama_gambar);

/*var_dump($judul, $konten, $nama_gambar);*/

$query 	= mysqli_query($connect, "INSERT INTO tberita (id, created_at, judul, isi_berita, id_kategori, id_user) values ('', '$date', '$judul', '$konten', '$id_kategori', '$id')");

$last_id = mysqli_insert_id($connect);

$query 	= mysqli_query($connect, "INSERT INTO tfoto (created_at, nama_foto, id_berita) values ('$date', '$nama_gambar', '$last_id')");

$query = mysqli_query($connect, "SELECT * FROM tuser WHERE id <> '$id'");

while ($data = mysqli_fetch_array($query)) {
	$id_user = $data['id'];
	var_dump($id_user);
	save_notifikasi($connect, $id_user, $last_id);
}

if ($query) {
	header("location:../?page=berita");
} else {
	echo "penyimpanan berita gagal";
}

function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
?>