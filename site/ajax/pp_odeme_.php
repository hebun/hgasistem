<?php
error_reporting(0);
include "../config.php";
$tutar = $_POST["mc_gross"];
$paypal_kesinti = $_POST["mc_fee"];
$net_tutar = $tutar - $paypal_kesinti;
$pp_payer_mail = $_POST["payer_email"];
$pp_siparis_no = $_POST["item_number"];
$item_name = $_POST["item_name"];

$cek = mysql_query("SELECT uye_id,id,tutar FROM odemeler WHERE siparis_kodu = '$pp_siparis_no'");
$uye_id = mysql_result($cek, 0, 'uye_id');
$siparis_id = mysql_result($cek, 0, 'id');
$odenecek_tutar = mysql_result($cek, 0, 'tutar');
$Uye = mysql_query("SELECT bakiye FROM uyeler WHERE id = '$uye_id'");
$UyeBakiye = mysql_result($Uye, 0, 'bakiye');
$aciklama = mysql_real_escape_string("PayPal E-Posta: $pp_payer_mail, Net Tutar: $net_tutar");
if ($paypal_kesinti AND $pp_siparis_no AND $pp_payer_mail AND $tutar)
{
if ( $odenecek_tutar == $tutar ){
$uyeYeniBakiye = $UyeBakiye + $tutar;
mysql_query("update uyeler set bakiye = '$uyeYeniBakiye' where id = '$uye_id'");
mysql_query("update odemeler set durum = '1', aciklama = '$aciklama' where id = '$siparis_id'");
}
}
?>