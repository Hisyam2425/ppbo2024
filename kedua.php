<?php

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

// Fungsi untuk menghitung volume bola
function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

// Fungsi untuk menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Contoh penggunaan
$jari = 7;
$tinggi = 15;

echo "Keliling lingkaran dengan jari-jari {$jari} adalah " . kelilingLingkaran($jari) . "\n";
echo "Volume bola dengan jari-jari {$jari} adalah " . volumeBola($jari) . "\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi} adalah " . volumeTabung($jari, $tinggi) . "\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi} adalah " . volumeKerucut($jari, $tinggi) . "\n";

?>
