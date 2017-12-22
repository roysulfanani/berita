<?php
include '../config/koneksi.php';
session_start();
date_default_timezone_set("Asia/Jakarta");
include_once "../plugins/inc.library.php";

$date 				= date("Y-m-d H:i:s");
$nama				= $_POST['nama'];
$tempat_lahir		= $_POST['tempat_lahir'];
$tanggal_lahir		= (InggrisTgl($_POST['tanggal_lahir']));
$alamat				= $_POST['alamat'];
$alamat_kos			= $_POST['alamat_kos'];
$hp1				= $_POST['hp1'];
$hp2				= $_POST['hp2'];
$nama_ayah			= $_POST['nama_ayah'];
$nama_ibu			= $_POST['nama_ibu'];
$telepon_keluarga	= $_POST['tlp_keluarga'];
$id_fb				= $_POST['id_fb'];
$id_line			= $_POST['id_line'];
$email				= $_POST['email'];

/*mengolah file foto*/
$foto_ktp 		= $_FILES['foto_ktp'] ['name']; // Mendapatkan nama gambar
$lokasi_ktp		= $_FILES['foto_ktp'] ['tmp_name']; 
$foto_kk 		= $_FILES['foto_kk'] ['name']; // Mendapatkan nama gambar
$lokasi_kk		= $_FILES['foto_kk'] ['tmp_name']; 
$foto_diri 		= $_FILES['foto_diri'] ['name']; // Mendapatkan nama gambar
$lokasi_diri	= $_FILES['foto_diri'] ['tmp_name'];
$foto_ijasah 	= $_FILES['foto_ijasah'] ['name']; // Mendapatkan nama gambar
$lokasi_ijasah	= $_FILES['foto_ijasah'] ['tmp_name'];  


$lokasitujuan 	= "../dist/image";


$foto = array(
	'ktp' => $foto_ktp,
	'kk' => $foto_kk,
	'diri' => $foto_diri,
	'ijasah' => $foto_ijasah
);

$upload1 		= move_uploaded_file($lokasi_ktp, $lokasitujuan."/".$foto_ktp);
$upload2 		= move_uploaded_file($lokasi_kk, $lokasitujuan."/".$foto_kk);
$upload3 		= move_uploaded_file($lokasi_diri, $lokasitujuan."/".$foto_diri);
$upload4 		= move_uploaded_file($lokasi_ijasah, $lokasitujuan."/".$foto_ijasah);

$query = mysqli_query($connect, 
		"INSERT INTO tkaryawan (id, created_at, nama, tempat_lahir, tanggal_lahir, alamat, alamat_kos, hp1, hp2, nama_ayah, nama_ibu, telepon_keluarga, line, facebook, email)
			VALUES
			('','$date', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$alamat_kos', '$hp1', '$hp2', '$nama_ayah', '$nama_ibu', '$telepon_keluarga', '$id_line', '$id_fb', '$email')");

$last_id = mysqli_insert_id($connect);

foreach ($foto as $deskripsi => $file) {
	/*$upload	= move_uploaded_file($deskripsi, $lokasitujuan."/".$file);*/
	if ($upload1) {
		$query_lampiran = mysqli_query($connect, "
			INSERT INTO tkaryawan_lampiran (id, id_karyawan, deskripsi, foto)
			VALUES ('', '$last_id','$deskripsi', '$file')");
	}
}
if ($query && $query_lampiran) {
		header("location:../?page=karyawan_view&id=$last_id");
	}else {
		echo " data gagal disimpan !! ";
	}
?>