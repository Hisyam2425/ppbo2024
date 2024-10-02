<?php
namespace App\Model\Akademik;

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp;
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

    protected function getNoHP() {
        return $this->no_hp;
    }

    public function setNoHP($no_hp) {
        $this->no_hp = $no_hp;
    }
}

?>