<?php
include_once 'dbkoneksi.php';

include_once 'models/Produk.php';
include_once 'models/Jenis_produk.php';
include_once 'models/Pelanggan.php';
include_once 'models/Vendor.php';
include_once 'models/pesanan.php';
include_once 'models/pembelian.php';
include_once 'models/pembayaran.php';
include_once 'models/kartu.php';

include_once('navbar.php');
include_once('sidebar.php');

//Logic Halaman
//Tangkap req menu di url (index.php?hal=(nama file atau halamannya))
$hal = $_REQUEST['hal'];
//jika ad req dari menu url tampilkan halaman sesuai req
    if(!empty($hal)){
    include_once $hal. '.php';
} else{
//jika tidak ada req dari menu di url tampilkan halaman home.php atau dashboard
    include_once 'home.php';
}
include_once('footer.php');
?>