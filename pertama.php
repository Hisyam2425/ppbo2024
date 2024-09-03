<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktuJam = date('H');
$waktuLengkap = date('H:i');
$sapaan = "";

if ($waktuJam >= 19) {
    $sapaan = "Selamat Malam";
} elseif ($waktuJam >= 15) {
    $sapaan = "Selamat Sore";
} elseif ($waktuJam >= 11) {
    $sapaan = "Selamat Siang";
} elseif ($waktuJam >= 5) {
    $sapaan = "Selamat Pagi";
} else {
    $sapaan = "Selamat Malam";
}

echo "{$sapaan}, {$nama}. Sekarang pukul {$waktuLengkap}\n";
?>
