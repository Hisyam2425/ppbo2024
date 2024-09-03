<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
$sapaan = "";

if ($waktu >= 19) {
    $sapaan = "Selamat Malam";
} elseif ($waktu >= 15) {
    $sapaan = "Selamat Sore";
} elseif ($waktu >= 11) {
    $sapaan = "Selamat Siang";
} elseif ($waktu >= 5) {
    $sapaan = "Selamat Pagi";
} else {
    $sapaan = "Selamat Malam";
}

echo "{$sapaan}, {$nama}. Sekarang pukul {$waktu}\n";
?>


