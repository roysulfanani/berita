<?php
session_start();

include "config/koneksi.php";
header('Content-Type: application/json');
$username = $_POST['member_name'];
$password = md5($_POST['member_password']);
$level  = '';
//untuk menentukan expire cookie, dihtung dri waktu server + waktu umur cookie          
/*$time = time();  

$check = isset($_POST['setcookie'])?$_POST['setcookie']:'';*/

$query  = mysqli_query($connect, "SELECT * FROM tuser WHERE username = '$username' AND password = '$password' LIMIT 1");

$result = mysqli_fetch_array($query);
if ($result) {
	$_SESSION['id']			  		= $result['id'];
	$_SESSION['username']     		= $result['username'];
	$_SESSION['level']				= $result['level'];
	if(!empty($_POST["remember"])) {
		setcookie ("member_login",$_POST["member_name"],time()+ (10 * 365 * 24 * 60 * 60));
		setcookie ("member_password",$_POST["member_password"],time()+ (10 * 365 * 24 * 60 * 60));
	} else {
		if(isset($_COOKIE["member_login"])) {
			setcookie ("member_login","");
		}
		if(isset($_COOKIE["member_password"])) {
			setcookie ("member_password","");
		}
	}
		header("location:index.php");
		exit();
	} else {
		header("location:login.php?status=gagal");
	}
?>