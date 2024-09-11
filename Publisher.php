<?php
class Publisher {
    public $nama;
    public $alamat;
    public $tahunBerdiri;

    // Konstruktor
    public function __construct($nama, $alamat, $tahunBerdiri) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->tahunBerdiri = $tahunBerdiri;
    }

    // Method untuk menampilkan informasi penerbit
    public function tampilkanInfo() {
        return "Penerbit: $this->nama, Alamat: $this->alamat, Berdiri Sejak: $this->tahunBerdiri";
    }
}
