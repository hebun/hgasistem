<?php
error_reporting(0);
include "../config.php";
$sql = mysql_query("SELECT * FROM retweet WHERE durum = '0' ORDER BY RAND()");
while($cek = mysql_fetch_assoc($sql)){
$id = $cek['id'];
$baslangic = $cek['baslangic'];
$hizmet_miktari = $cek['hizmet_miktari'];
$bitis = $hizmet_miktari + $baslangic;
$guncel = $cek['guncel'];
$username = $cek['profil'];
$tweet_id = $cek['tweet_id'];
$url = "https://twitter.com/$username/status/$tweet_id";
$yenibegeni_sayi = retweet($url);
mysql_query("UPDATE retweet SET guncel = '$yenibegeni_sayi' WHERE id = '$id'");
if ($yenibegeni_sayi >= $bitis)
{
mysql_query("UPDATE retweet SET durum = '1' WHERE id = '$id'");
}
}
?>