<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

// Membuat objek Lingkaran
$nasi_tumpeng = new Lingkaran(7); // Misalnya jari-jari 7
echo "Luas Lingkaran: " . $nasi_tumpeng->luas() . "\n";
echo "Keliling Lingkaran: " . $nasi_tumpeng->keliling() . "\n";

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luasPermukaan() : float {
        return 4 * self::PHI * pow($this->jari_jari, 2);
    }
}

// Membuat objek Bola
$bola = new Bola(7); // Misalnya jari-jari 7
echo "Volume Bola: " . $bola->volume() . "\n";
echo "Luas Permukaan Bola: " . $bola->luasPermukaan() . "\n";

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {
        return 2 * self::PHI * $this->jari_jari * ($this->jari_jari + $this->tinggi);
    }
}

// Membuat objek Tabung
$tabung = new Tabung(7, 10); // Misalnya jari-jari 7 dan tinggi 10
echo "Volume Tabung: " . $tabung->volume() . "\n";
echo "Luas Permukaan Tabung: " . $tabung->luasPermukaan() . "\n";

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {
        $s = sqrt(pow($this->jari_jari, 2) + pow($this->tinggi, 2)); // panjang sisi miring
        return self::PHI * $this->jari_jari * ($this->jari_jari + $s);
    }
}

// Membuat objek Kerucut
$kerucut = new Kerucut(7, 10); // Misalnya jari-jari 7 dan tinggi 10
echo "Volume Kerucut: " . $kerucut->volume() . "\n";
echo "Luas Permukaan Kerucut: " . $kerucut->luasPermukaan() . "\n";

?>
