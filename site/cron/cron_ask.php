<?php
error_reporting(0);
include "../config.php";
$sql = mysql_query("SELECT * FROM askfm WHERE durum = '0' ORDER BY RAND() LIMIT 15");
while($cek = mysql_fetch_assoc($sql)){
$id = $cek['id'];
$baslangic = $cek['baslangic'];
$hizmet_miktari = $cek['hizmet_miktari'];
$bitis = $hizmet_miktari + $baslangic;
$guncel = $cek['guncel'];
$f_id = $cek['soru_id'];
$f_user = $cek['user'];
$url = 'http://ask.fm/'.$f_user.'/answer/'.$f_id.'';
$yenibegeni_sayi = ask($url);
mysql_query("UPDATE askfm SET guncel = '$yenibegeni_sayi' WHERE id = '$id'");
if ($yenibegeni_sayi >= $bitis)
{
mysql_query("UPDATE askfm SET durum = '1' WHERE id = '$id'");
}
}
?>