<?php
error_reporting(0);
include "../config.php";
$sql = mysql_query("SELECT * FROM aboneler WHERE durum = '0' ORDER BY RAND()");
while($cek = mysql_fetch_assoc($sql)){
$id = $cek['id'];
$baslangic = $cek['baslangic'];
$hizmet_miktari = $cek['hizmet_miktari'];
$bitis = $hizmet_miktari + $baslangic;
$guncel = $cek['guncel'];

$gunluk_cekim = $cek['gunluk_cekim'];
$toplam_gun = $cek['toplam_gun'];
$kalan_gun = $cek['kalan_gun'];

$kontrol = $baslangic - 5000;
$profil_id = $cek['profil_id'];
$yenibegeni_sayi = abonecek($profil_id, $access);

mysql_query("UPDATE aboneler SET guncel = '$yenibegeni_sayi' WHERE id = '$id'");
#günlük çekim kontrol başlangıç
if ( $gunluk_cekim == 1 ){
$gun_bul = $toplam_gun - $kalan_gun;
$olmasi_gereken_cekim = $gun_bul * $hizmet_miktari;
$yeni_bitis = $olmasi_gereken_cekim + $baslangic + $hizmet_miktari;
if ($yenibegeni_sayi >= $yeni_bitis)
{
$yeni_gun = $kalan_gun - 1;
if ( $yeni_gun < 1 ){
mysql_query("UPDATE aboneler SET durum = '1', kalan_gun = '0' WHERE id = '$id'");
} else {
mysql_query("UPDATE aboneler SET kalan_gun = '$yeni_gun', durum = '5' WHERE id = '$id'");
}
}
# günlük çekim bitiş
} else {
if ($yenibegeni_sayi >= $bitis)
{
mysql_query("UPDATE aboneler SET durum = '1' WHERE id = '$id'");
} elseif($yenibegeni_sayi < $kontrol){
mysql_query("UPDATE aboneler SET durum = '2' WHERE id = '$id'");
}
}
sleep(5);
}
?>