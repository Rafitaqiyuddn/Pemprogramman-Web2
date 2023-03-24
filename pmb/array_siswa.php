<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
    <div class="content-wrapper">
<?php
$ns1 = ['id'=>1,'nim'=>'011011','uts'=>70,'uas'=>90,'tugas'=>80];
$ns2 = ['id'=>2,'nim'=>'011012','uts'=>60,'uas'=>70,'tugas'=>90];
$ns3 = ['id'=>3,'nim'=>'011013','uts'=>90,'uas'=>80,'tugas'=>80];
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<div class="content-header">
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">week-1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>

<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<!--Buat Table-->
<table border="1" width="80%" style="margin-left:30px;">
    <thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>TUGAS</th>
        <th>Nilai Akhir</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $nilai){
echo '<tr><td>' .$nomor. '</td>';
echo '<td>' .$nilai['nim'].'</td>';
echo '<td>' .$nilai['uts'].'</td>';
echo '<td>' .$nilai['uas'].'</td>';
echo '<td>' .$nilai['tugas'].'</td>';
$nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '</tr>';
$nomor++;
        }
        ?>
    </tbody>
</table>
    </div>
<?php
include_once('footer.php');
?>