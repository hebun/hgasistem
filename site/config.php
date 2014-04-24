<?php

# Database ayarlarÄ±
define("vt_host", "localhost");
define("vt_user", "root");
define("vt_pass", "2882");
define("vt_database", "afksnkdb2");

# access token
$access = 'AAABempp6Ls0BAFfVKoI3PeiXT3gqcv3VWf5A5xPDyAnTeYn7gEv1qxxWD7XoVQZBeullb4BVjVsxBThNZBAQdEZAQrO1bsvJjQqZCr0L6AZDZD';

$baglanti = mysql_connect(vt_host, vt_user, vt_pass) or die("Veritabani Baglantisi Gerceklestirilemedixy!");
mysql_select_db(vt_database, $baglanti);
mysql_query("SET names UTF8");

# title
$saner_cek = mysql_query("SELECT * FROM ayarlar");
$saner = mysql_fetch_assoc($saner_cek);
$title = $saner['title'];
$loginust = $saner['loginust']; 
$f_limit = $saner['facebook_birim'];
$a_limit = $saner['ask_birim'];
$t_limit = $saner['twitter_birim'];
$y_limit = $saner['youtube_birim'];
$f_durum = $saner['facebook_durum'];
$a_durum = $saner['ask_durum'];
$t_durum = $saner['twitter_durum'];
$y_durum = $saner['youtube_durum'];
$hakkimizda = $saner['hakkimizda'];
$iletisim = $saner['iletisim'];
$telefon = $saner['telefon'];
$skype = $saner['skype'];
$y_mail = $saner['mail'];
$paypal_mail = $saner['paypal_mail'];
$bayi_cekim_limit = $saner['bayi_cekim_limit'];
$bayi_cekim_devam = $saner['bayi_cekim_devam'];

//print_r($saner);

function curl_get_file_contents($URL) {

	$c = curl_init();
	curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 0);
	curl_setopt($c, CURLOPT_TIMEOUT, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($c, CURLOPT_COOKIEFILE , "fbcookie.txt");
    curl_setopt($c, CURLOPT_COOKIEJAR , "fbcookie.txt");
    curl_setopt($c, CURLOPT_REFERER , 'facebook.com');
    curl_setopt($c, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows; U; Windows NT 6.1; tr; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13');
	curl_setopt($c, CURLOPT_URL, $URL);
	$contents = curl_exec($c);
	
	$err  = curl_getinfo($c,CURLINFO_HTTP_CODE);
	curl_close($c);
	
	if ($contents) return $contents;
		else return FALSE;

}

function fbconnect($username, $password, $where_u_wanna_go , $cookiefile)
{
    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL, 'https://login.facebook.com/login.php');
    curl_setopt($ch , CURLOPT_SSL_VERIFYPEER , FALSE);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER , TRUE);
    curl_setopt($ch , CURLOPT_FOLLOWLOCATION , TRUE);
    curl_setopt($ch , CURLOPT_COOKIEFILE , $cookiefile);
    curl_setopt($ch , CURLOPT_COOKIEJAR , $cookiefile);
    curl_setopt($ch , CURLOPT_REFERER , 'google.com');
    curl_setopt($ch , CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows; U; Windows NT 6.1; tr; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13');
    $r1 = curl_exec($ch);
    preg_match('#name="charset_test" value="(.*?)"#',$r1,$char_test);
    preg_match('#name="lsd" value="(.*?)"#',$r1,$lsd);
    $post = 'charset_test='.$char_test[1].'&lsd='.$lsd[1].'&locale=tr_TR'.'&email='.$username.'&pass='.urlencode($password).'&default_persistent=0&charset_test='.$char_test[1].'&lsd='.$lsd[1];
    curl_setopt($ch , CURLOPT_REFERER , 'http://www.facebook.com/login.php?login_attempt=1&_fb_noscript=1');
    curl_setopt($ch , CURLOPT_URL, 'https://login.facebook.com/login.php?login_attempt=1');
    curl_setopt($ch , CURLOPT_POST , TRUE);
    curl_setopt($ch , CURLOPT_POSTFIELDS , $post);
    $r2 = curl_exec($ch);
    curl_setopt($ch , CURLOPT_URL, $where_u_wanna_go);
    curl_setopt($ch , CURLOPT_POST , FALSE);
    $r3 = curl_exec($ch);
    return $r3;
    curl_close($ch);
 
}

function tarih ($tarih){
$aylarIng = array(
	"January", "February", "March", "April", "May", "June", 
	"July", "August", "September", "October", "November", "December"
	);
$aylar = array(
	"Ocak", "Å�ubat", "Mart", "Nisan", "MayÄ±s", "Haziran", 
	"Temmuz", "AÄŸustos", "EylÃ¼l", "Ekim", "KasÄ±m", "AralÄ±k"
	);
return str_replace($aylarIng, $aylar, $tarih);
}

function GetIP(){
    if(getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ',')) {
            $tmp = explode (',', $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}

function duzelt($suz){
  $k1=array("\n", "\\");
  $k2=array("<br>", "");
  $degistir=str_replace($k1,$k2,$suz);
  return $degistir;
}

function saner ($musteri_id, $ip, $aciklama, $tarih){
return mysql_query("INSERT INTO kullanici_loglar (musteri_id, aciklama, ip, tarih) VALUES ('$musteri_id', '$aciklama', '$ip', '$tarih')");
}

function SonID($tablo)
{
	$sql = mysql_query("SHOW TABLE STATUS LIKE '$tablo'");
	$cikti = mysql_fetch_assoc($sql);
	$sonID = $cikti['Auto_increment'];
	return $sonID-1;
}

function durumkontrol ($link){
$html = curl_get_file_contents($link);
$kontrol = stripos($html, 'messageBody');
if ($kontrol === false) return "0"; else return "1";
}

# post fonk.
function post ($url) {
$kaynak = curl_get_file_contents($url);
$yeni = explode('aggregatedranges', $kaynak);
$yeni = explode('alternate', $yeni[1]);
$temizle = str_replace('":[', '', $yeni[0]);
$temizle = str_replace(']},"', '', $temizle);
$begenisayi = json_decode($temizle);
return $begenisayi->count;
}

# abone sayÄ±sÄ±nÄ± bul fonksiyonu
function abone ($link){
$html = curl_get_file_contents($link);
$abone = explode('<span class="fsl fwn">', $html);
$abone = explode('</span', $abone[1]);
$abone[0] = preg_replace('/[a-zA-Z]/', '', $abone[0]); 
$abone[0] = htmlentities($abone[0], ENT_QUOTES, 'UTF-8');
$abone[0] =  str_replace('.', '', trim($abone[0]));
$abone[0] =  str_replace('.', '', trim($abone[0]));
$abone[0] =  str_replace('&middot; ', '', trim($abone[0]));
return $abone[0];
}

# yeni abone function
function abonecek($username, $token)
{
$kaynak = curl_get_file_contents("https://graph.facebook.com/$username/subscribers?access_token=$token");
$kaynak = json_decode($kaynak);
return $kaynak->summary->total_count;
}

# twitter fonk.
function twitter ($url) {
$kaynak = curl_get_file_contents($url);
preg_match ('#<div class="profile-card-inner"(.*?)">#si', $kaynak, $saner);
$user_id = explode ('data-user-id="', $saner[0]);
$user_id = explode ('"', $user_id[1]);
$username = explode ('data-screen-name="', $saner[0]);
$username = explode ('"', $username[1]);
$followers = explode ('follower_stats"', $kaynak);
$followers = explode ('</strong>', $followers[1]);
$followers = preg_replace('/[^.%0-9]/', '', $followers[0]);
$followers = str_replace('.', '', $followers);
$saner = array ( 'user_id' => $user_id[0], 'username' => $username[0], 'followers' => $followers );
return json_encode ( $saner );
}

# twitter retweet fonk.
function retweet ($url) {
$kaynak = curl_get_file_contents($url);
$retweet = explode ('<li class="js-stat-count js-stat-retweets stat-count">', $kaynak);
$retweet = explode ('</li>', $retweet[1]);
$retweet_sayi = explode ('<strong>', $retweet[0]);
$retweet_sayi = explode ('</strong>', $retweet_sayi[1]);
return preg_replace('/[^.%0-9]/', '', strip_tags($retweet_sayi[0]));
}


# twitter favori fonk.
function favori ($url) {
$kaynak = curl_get_file_contents($url);
$retweet = explode ('<li class="js-stat-count js-stat-favorites stat-count">', $kaynak);
$retweet = explode ('</li>', $retweet[1]);
$retweet_sayi = explode ('<strong>', $retweet[0]);
$retweet_sayi = explode ('</strong>', $retweet_sayi[1]);
return preg_replace('/[^.%0-9]/', '', strip_tags($retweet_sayi[0]));
}

#ask sayÄ± fonksiyon
function ask($url)
{
$kaynak = curl_get_file_contents($url);
$parcala = explode('<div class="likeList people-like-block">', $kaynak);
$parcala = explode('</a>', $parcala[1]);
return preg_replace('/[^.%0-9]/', '', strip_tags($parcala[0]));
}

# youtube fonk.
function youtube ($url) {
$kaynak = curl_get_file_contents($url);
$youtube = explode ('<span class="watch-view-count">', $kaynak);
$youtube = explode ('</span>', $youtube[1]);
return str_replace(',', '', trim(strip_tags($youtube[0])));
}

#### TÃ¼rkÃ§e Tarih ####
function turkcetarih($tarih){
	$donustur = array(
		'Monday'	=> 'Pazartesi',
		'Tuesday'	=> 'SalÄ±',
		'Wednesday'	=> 'Ã‡arÅŸamba',
		'Thursday'	=> 'PerÅŸembe',
		'Friday'	=> 'Cuma',
		'Saturday'	=> 'Cumartesi',
		'Sunday'	=> 'Pazar',
		'January'	=> 'Ocak',
		'February'	=> 'Å�ubat',
		'March'		=> 'Mart',
		'April'		=> 'Nisan',
		'May'		=> 'MayÄ±s',
		'June'		=> 'Haziran',
		'July'		=> 'Temmuz',
		'August'	=> 'AÄŸustos',
		'September'	=> 'EylÃ¼l',
		'October'	=> 'Ekim',
		'November'	=> 'KasÄ±m',
		'December'	=> 'AralÄ±k',
		'Mon'		=> 'Pts',
		'Tue'		=> 'Sal',
		'Wed'		=> 'Ã‡ar',
		'Thu'		=> 'Per',
		'Fri'		=> 'Cum',
		'Sat'		=> 'Cts',
		'Sun'		=> 'Paz',
		'Jan'		=> 'Oca',
		'Feb'		=> 'Å�ub',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Nis',
		'Jun'		=> 'Haz',
		'Jul'		=> 'Tem',
		'Aug'		=> 'AÄŸu',
		'Sep'		=> 'Eyl',
		'Oct'		=> 'Eki',
		'Nov'		=> 'Kas',
		'Dec'		=> 'Ara',
	);
	return strtr($tarih, $donustur);;
}
?>