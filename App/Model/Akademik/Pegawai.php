<?php
namespace App\Admin;

class Pegawai {
    public $nip;
    public $nama;
    public $no_hp;
    public $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() {
        return true;
    }

    public function cekOut() {
        return true;
    }

    public function getNoHP() {
        return $this->no_hp;
    }

    public function setNoHP($no_hp) {
        $this->no_hp = $no_hp;
    }
}
?>