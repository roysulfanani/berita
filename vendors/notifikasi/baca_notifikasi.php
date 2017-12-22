<?php

require_once("../../config/koneksi.php");

$sql = "UPDATE `tnotifikasi` SET `status` = TRUE WHERE id_user = '".$_GET['id']."'";

$result = mysqli_query($connect, $sql);

echo 'success';