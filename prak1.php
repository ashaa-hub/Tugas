<?php
class Mahasiswa {
    var $nama;
    var $NPM;
    var $IPK;

    public function __construct($nama, $NPM, $IPK) {
        $this->nama = $nama;
        $this->NPM = $NPM;
        $this->IPK = $IPK;
    }

    public function getInfo() {
        return "Nama: " . $this->nama . ", NPM: " . $this->NPM . ", IPK: " . $this->IPK;
    }
}
$mahasiswa = new Mahasiswa("Asha", "23753102", "3.39");
echo $mahasiswa->getInfo();
?>