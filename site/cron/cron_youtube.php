<?php
error_reporting(0);
include "../config.php";
$sql = mysql_query("SELECT * FROM youtube WHERE durum = '0' ORDER BY RAND()");
while($cek = mysql_fetch_assoc($sql)){
$id = $cek['id'];
$baslangic = $cek['baslangic'];
$hizmet_miktari = $cek['hizmet_miktari'];
$bitis = $hizmet_miktari + $baslangic;
$guncel = $cek['guncel'];
$url = $cek['video'];
$yenibegeni_sayi = youtube($url);
mysql_query("UPDATE youtube SET guncel = '$yenibegeni_sayi' WHERE id = '$id'");
if ($yenibegeni_sayi >= $bitis)
{
mysql_query("UPDATE youtube SET durum = '1' WHERE id = '$id'");
}
}
?>