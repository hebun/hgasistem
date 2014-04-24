<?php
error_reporting(0);
include "../config.php";
$sql = mysql_query("SELECT * FROM takipciler WHERE durum = '0' ORDER BY RAND()");
while($cek = mysql_fetch_assoc($sql)){
$id = $cek['id'];
$baslangic = $cek['baslangic'];
$hizmet_miktari = $cek['hizmet_miktari'];
$bitis = $hizmet_miktari + $baslangic;
$guncel = $cek['guncel'];
$username = $cek['profil'];
$rand = uniqid(true);
$url = 'https://twitter.com/'.$username.'?'.$rand.'';
$yenibegeni_sayi = json_decode( twitter($url) )->followers;
mysql_query("UPDATE takipciler SET guncel = '$yenibegeni_sayi' WHERE id = '$id'");
if ($yenibegeni_sayi >= $bitis)
{
mysql_query("UPDATE takipciler SET durum = '1' WHERE id = '$id'");
}
}
?>