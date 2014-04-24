<?php
error_reporting(0);
include "../config.php";
$sql = mysql_query("SELECT * FROM begeniler WHERE durum = '0' ORDER BY RAND()");
while($cek = mysql_fetch_assoc($sql)){
$id = $cek['id'];
$baslangic = $cek['baslangic'];
$hizmet_miktari = $cek['hizmet_miktari'];
$bitis = $hizmet_miktari + $baslangic;
$guncel = $cek['guncel'];
$url = $cek['url'];
$url = str_replace("http:", "https:", $url);
$link = parse_url($url);
$exp = explode('/', $link['path']);
$post_id = $exp[3];

$guncelbegeni = post($url);

//echo $guncelbegeni . "<br>";

mysql_query("UPDATE begeniler SET guncel = '$guncelbegeni' WHERE id = '$id'");
if ($guncelbegeni >= $bitis)
{
mysql_query("UPDATE begeniler SET durum = '1' WHERE id = '$id'");
}
sleep(10);
}
?>