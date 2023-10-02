<?php
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        return $this->alas + (2 * sqrt(pow($this->alas / 2, 2) + pow($this->tinggi, 2)));
    }

    public function namaBidang() {
        return 'Segitiga';
    }
}
?>
