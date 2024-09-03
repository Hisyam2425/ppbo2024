<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luasPermukaan() : float {
        return 4 * self::PHI * pow($this->jari_jari, 2);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
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

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

    public function luasPermukaan() : float {
        $s = sqrt(pow($this->jari_jari, 2) + pow($this->tinggi, 2)); // panjang garis pelukis
        return self::PHI * $this->jari_jari * ($this->jari_jari + $s);
    }
}

// objek Lingkaran
$lingkaran = new Lingkaran(5); // Radius 5
echo "Luas Lingkaran: " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . "\n";

// objek Bola
$bola = new Bola(5); // Radius 5
echo "Volume Bola: " . $bola->volume() . "\n";
echo "Luas Permukaan Bola: " . $bola->luasPermukaan() . "\n";

// objek Tabung
$tabung = new Tabung(5, 10); // Radius 5, Tinggi 10
echo "Volume Tabung: " . $tabung->volume() . "\n";
echo "Luas Permukaan Tabung: " . $tabung->luasPermukaan() . "\n";

// objek Kerucut
$kerucut = new Kerucut(5, 10); // Radius 5, Tinggi 10
echo "Volume Kerucut: " . $kerucut->volume() . "\n";
echo "Luas Permukaan Kerucut: " . $kerucut->luasPermukaan() . "\n";

?>
