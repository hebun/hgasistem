<?php
# slcQ
# selcuk@mail.com.tr
# www.x-proje.com

session_start();
error_reporting(E_ERROR);
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
$toplam_aktif_cekim = mysql_result(mysql_query("SELECT count(id) as toplam FROM begeniler WHERE uye_id = '$u_id' and durum = '0'"), 0, 'toplam');
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
$oran = "0.001";
echo "oran:$oran";
$bakiyeden_dusulecek = $abone*$oran;
$yenibakiye = $u_bakiye - $bakiyeden_dusulecek;
$url = str_replace("http:", "https:", $url);
$guncelbegeni = post($url);
$link = parse_url($url);

$exp = explode('/', $link['path']);
print_r($link);
$post_id = '';
if ( $link['path'] == '/permalink.php' ){
	$exp = explode('story_fbid=', $link['query']);
	$exp = explode('&', $exp[1]);
	$post_id = $exp[0];
} elseif ( $link['path'] == '/photo.php' )
{
	$exp = explode('fbid=', $link['query']);
	$exp = explode('&', $exp[1]);
	$post_id = $exp[0];
}

# geçersiz link
if ( $post_id == '' )
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
echo "$u_bakiye $bakiyeden_dusulecek ";
echo '
<div class="alert">
<strong>HATA: </strong>xBu işlem için yeterli bakiyeye sahip değilsiniz. Kredi yüklemek için <a href="?sayfa=odeme">tıklayınız.</a>
</div>';
exit;
}
}

# eski kayıt kontrol
$eskikayit = mysql_result(mysql_query("SELECT count(id) as toplam FROM begeniler WHERE guncel='$guncelbegeni' and hizmet_miktari = '$abone' and post_id='$post_id'"), 0, 'toplam');
if ( $eskikayit >= 1 )
{
echo '
<div class="alert alert-error">
<strong>HATA: </strong>Bu çekim için aktif bir işlem bulunmaktadır.
</div>';
exit;
}

# SQL Sorgu işlemi
$ekle = mysql_query("INSERT INTO begeniler (url, guncel, baslangic, hizmet_miktari, tutar, post_id, uye_id, tarih, actor, check_hash, type_id) VALUES ".
"('$url', '$guncelbegeni', '$guncelbegeni', '$abone', '$bakiyeden_dusulecek', '$post_id', '$u_id', '$tarih', '$actor', '$check_hash', '$type_id');");
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
</div><meta http-equiv="refresh" content="3;URL=?sayfa=post">';
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