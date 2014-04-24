<?php
# slcQ
# selcuk@mail.com.tr
# www.x-proje.com

session_start();
error_reporting(0);
if(isset($_SESSION['selco'])){

sleep(1);
include "../config.php";

# üye bilgilerini çek
$mail = $_SESSION['selco'];
$uyecek = mysql_query("SELECT * FROM uyeler WHERE mail = '$mail'") or die (mysql_error());
$uye = mysql_fetch_assoc($uyecek);
$u_ad = $uye['ad'];
$u_soyad = $uye['soyad'];
$u_mail = $uye['mail'];
$u_sifre = $uye['sifre'];
$u_bakiye = $uye['bakiye'];
$u_tel = $uye['tel'];
$u_id = $uye['id'];
$u_admin = $uye['admin'];
$u_onay =$uye['onay'];
$u_bayi =$uye['bayi'];
$u_bayi_limit =$uye['bayi_limit'];

# bayi ise limiti ise limiti bulalım
if ( $u_bayi == 1 )
{
	if ( $u_bayi_limit == 0 )
	{
		$u_limit = $bayi_cekim_limit;
	} 
	else 
	{
		$u_limit = $u_bayi_limit;
	}
}

# bayi sınır kontrol
if ( $u_bayi == 1 )
{
$toplam_aktif_cekim = mysql_result(mysql_query("SELECT count(id) as toplam FROM askfm WHERE uye_id = '$u_id' and durum = '0'"), 0, 'toplam');
if ( $toplam_aktif_cekim > $u_limit )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Sistem tarafından belirlenen bölüm başı <b>'.$u_limit.'</b> çekim limitini aştınız.
</div>';
exit;
}
}

# Ajax İşlemleri
$url = mysql_real_escape_string(trim($_GET['url']));
$abone = mysql_real_escape_string(trim(intval($_GET['abone'])));
$tarih = time();

# geçersiz link
if ( $a_durum == 0 )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Yeni bir çekim işlemi başlatamazsınız dedim dedim inanmadınız, ne oldu şimdi?
</div>';
exit;
}

if ( $abone < 0 )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Çekim yapılacak sayı değeri "Pozitif Tam Sayı" olmalıdır.
</div>';
exit;
}

if ( $url and $abone ){

# bakiye hesaplamaları
$oran = "0.00$a_limit";
$bakiyeden_dusulecek = $abone*$oran;
$yenibakiye = $u_bakiye - $bakiyeden_dusulecek;

# soru bilgilerini alıyoruz
$link = parse_url($url);
$parcala = explode('/', $link['path']);
$user = $parcala[1];
$soru_id = $parcala[3];
$guncel=ask($url);

# geçersiz link
if ( $guncel == '' || $user == '' || $soru_id == '' )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Lütfen geçerli bir link giriniz.
</div>';
exit;
}

# bayi kontrol
if ( $u_bayi == 0 )
{
# yetersiz bakiye
if ($u_bakiye < $bakiyeden_dusulecek OR $bakiyeden_dusulecek == ''){
echo '
<div class="alert">
<strong>HATA: </strong>Bu işlem için yeterli bakiyeye sahip değilsiniz. Kredi yüklemek için <a href="?sayfa=odeme">tıklayınız.</a>
</div>';
exit;
}
}

# eski kayıt kontrol
$eskikayit = mysql_result(mysql_query("SELECT count(id) as toplam FROM askfm WHERE guncel='$guncel' and hizmet_miktari = '$abone' and user='$user' and soru_id = '$soru_id'"), 0, 'toplam');
if ( $eskikayit >= 1 )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Bu çekim için aktif bir işlem bulunmaktadır.
</div>';
exit;
}

# SQL Sorgu işlemi
$ekle = mysql_query("INSERT INTO askfm (user, guncel, baslangic, hizmet_miktari, tutar, soru_id, uye_id, tarih) VALUES ('$user', '$guncel', '$guncel', '$abone', '$bakiyeden_dusulecek', '$soru_id', '$u_id', '$tarih');");
if ( $ekle )
{
if ( $u_admin != 1 )
{
if ( $u_bayi == 0 ){
mysql_query("UPDATE uyeler SET bakiye='$yenibakiye' WHERE id = '$u_id'");
}
}
echo '
<div class="alert alert-success">
<strong>İŞLEM: </strong>Çekim işlemine başlanmıştır. Lütfen bekleyiniz, yönlendiriliyorsunuz.
</div><meta http-equiv="refresh" content="3;URL=?sayfa=askfm">';
} else {
echo '
<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>';
}

} else {
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Boş alan bırakmayınız.
</div>';
}
}
?>