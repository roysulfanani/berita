<?php

function save_notifikasi($connect, $id_user, $last_id)
{
    $sql = "INSERT INTO `tnotifikasi` (id_user, id_berita, date, status) ".
           "VALUES('".$id_user."', '".$last_id."', NOW(), FALSE)";

    $result = mysqli_query($connect, $sql);

    return $result;
}

function get_list_notifikasi($connect, $id_user)
{
    $sql  = "SELECT * FROM `tnotifikasi` WHERE `id_user` = '".$id_user."' AND `status` = FALSE ORDER BY `date` DESC";

    $query = mysqli_query($connect, $sql);

    $list_notif = array();

    while ($notif = mysqli_fetch_assoc($query)) {
        $list_notif[] = $notif;
    }

    return $list_notif;
}