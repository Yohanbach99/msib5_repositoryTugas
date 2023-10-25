<?php

class Produk{

    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }


    //mengambil dan melihat tabel jenis_produk
    public function dataProduk(){
    $sql = "SELECT produk.*, jenis_produk.nama AS jenis
    FROM produk
    INNER JOIN jenis_produk ON produk.jenis_produk_id = jenis_produk.id";
    //menggunkan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;

    }

}

?>