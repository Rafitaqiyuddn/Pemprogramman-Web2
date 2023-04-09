<?php 
//koneksi ke mysql database menggunkan driver invocation atau host username
$dsn = 'mysql:dbname=db_koprasi;host=localhost';
$user = 'root';
$password = '';


try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo '<h1>Sukses Koneksi Database';
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
} catch (PDOException $e) {    
    // echo '<h1>Terjadi Kesalahn saat Koneksi' .$e->getMessage();
}
?>
