<?php
date_default_timezone_set("Asia/Jakarta");
echo 'Date: ' . date('Y-m-d H:i:s') . "<br>"; // Hasil: 2017-01-17 15:36:12 (GMT + 1)
echo 'Timestamp: ' . time() . "<br>"; // Hasil: 1484663772 (GMT + 0)

echo 'Waktu sekarang: ' . date('Y-m-d H:i:s') . '<br/>';
echo '1 menit kedepan: ' . date('Y-m-d H:i:s', time() + 60) . '<br/>';
echo '1 jam kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60)) . '<br/>';
echo '1 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24)) . '<br/>';
echo '7 hari kedepan: ' . date('Y-m-d H:i:s', time() + (60 * 60 * 24 * 7)) . '<br/>';

$date 		= date('2017-11-08 10:58:11');
$date_menit = date('Y-m-d H:i:s', time() + (60 * 60));
$hasil 		= $date - $date_menit;
echo $hasil;