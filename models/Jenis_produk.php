<?php
class Jenis_produk{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
}

    public function dataJenis_produk(){
        $sql = "SELECT * FROM jenis_produk";
        //prepare statment PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>
