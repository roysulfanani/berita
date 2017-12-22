<?php
include '../config/koneksi.php';
session_start();
date_default_timezone_set("Asia/Jakarta");

$id = $_GET['id'];

$query_delete = mysqli_query($connect, 
	"DELETE FROM tkaryawan WHERE tkaryawan.id = $id
	");

if ($query_delete) {
		header("location:../?page=karyawan_list");
		/*cara langsung mengembalikan pada halaman list yang deleted bagaimana ya?*/
	}else {
		echo " data gagal disimpan !! ";
	}
?>