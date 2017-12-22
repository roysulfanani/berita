<?php
include '../config/koneksi.php';
session_start();
date_default_timezone_set("Asia/Jakarta");

$id = $_GET['id'];

$query_delete = mysqli_query($connect, 
	"UPDATE tkaryawan SET `deleted_at` = NULL WHERE tkaryawan.id = $id
	");

if ($query_delete) {
		header("location:../?page=karyawan_list&action=deleted");
	}else {
		echo " data gagal disimpan !! ";
	}
?>