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
$toplam_aktif_cekim = mysql_result(mysql_query("SELECT count(id) as toplam FROM sayfalar WHERE uye_id = '$u_id' and durum = '0'"), 0, 'toplam');
if ( $toplam_aktif_cekim >= $u_limit )
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
$cekim = mysql_real_escape_string(trim($_GET['cekim']));
$gun = mysql_real_escape_string(trim(intval($_GET['gun'])));
$tarih = time();

# geçersiz link
if ( $f_durum == 0 )
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
$oran = "0.00$f_limit";
# günlük çekim
if ( $cekim == 'gunluk' ){
$bakiyeden_dusulecek = $abone*$oran*$gun;
}else{
$bakiyeden_dusulecek = $abone*$oran;
}
$yenibakiye = $u_bakiye - $bakiyeden_dusulecek;

$link = parse_url(mysql_real_escape_string($url));
if ( preg_match( '#pages#i', $link['path'] ) )
{
$exp = explode('/', $link['path']);
$sayfa_id = $exp[3];
}else{
$sayfa_id = substr($link['path'], 1);
}

# günlük çekim işlemleri
if ( $cekim == 'gunluk' )
{
$gunluk_cekim_onay = 1;
$gunluk_cekim_gun = $gun;
} else {
$gunluk_cekim_onay = 0;
$gunluk_cekim_gun = 0;
}

# sayfa bilgilerini alıyoruz
$bilgi = json_decode(curl_get_file_contents("https://graph.facebook.com/".$sayfa_id.""));
$sayfaid = $bilgi->id;
$name = mysql_real_escape_string($bilgi->name);
$guncelbegeni = $bilgi->likes;

# geçersiz link
if ($sayfaid == '' )
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
$eskikayit = mysql_result(mysql_query("SELECT count(id) as toplam FROM sayfalar WHERE guncel='$guncelbegeni' and hizmet_miktari = '$abone' and sayfa_id='$sayfaid'"), 0, 'toplam');
if ( $eskikayit >= 1 )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Bu çekim için aktif bir işlem bulunmaktadır.
</div>';
exit;
}

# SQL Sorgu işlemi
$ekle = mysql_query("INSERT INTO sayfalar (sayfa, guncel, baslangic, hizmet_miktari, tutar, sayfa_id, uye_id, tarih, gunluk_cekim, toplam_gun, kalan_gun) VALUES ('$name', '$guncelbegeni', '$guncelbegeni', '$abone', '$bakiyeden_dusulecek', '$sayfaid', '$u_id', '$tarih', '$gunluk_cekim_onay', '$gunluk_cekim_gun', '$gunluk_cekim_gun');");
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
</div><meta http-equiv="refresh" content="3;URL=?sayfa=sayfa">';
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