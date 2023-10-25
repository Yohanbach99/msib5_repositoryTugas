<?php

class Jenis_produk{

    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }


    //mengambil dan melihat tabel jenis_produk
    public function datajenis(){
    $sql = "SELECT * FROM jenis_produk";
    //menggunkan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;

    }

}

?>