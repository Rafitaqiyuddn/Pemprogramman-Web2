<?php
$ns1 = ['id'=>1,'nim'=>'011011','uts'=>70,'uas'=>90,'tugas'=>80];
$ns2 = ['id'=>2,'nim'=>'011012','uts'=>60,'uas'=>70,'tugas'=>90];
$ns3 = ['id'=>3,'nim'=>'011013','uts'=>90,'uas'=>80,'tugas'=>80];
$ar_nilai = [$ns1, $ns2, $ns3];
?>
<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<!--Buat Table-->
<table border="1" width="100%">
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