<?php


session_start();
error_reporting(0);
include "config.php";

# genel sayfa
$sayfa = $_GET['sayfa'];

# post bilgiler
$mail=mysql_real_escape_string(htmlspecialchars($_POST['mail']));
$sifre=mysql_real_escape_string(htmlspecialchars($_POST['sifre']));

if($mail && $sifre){
$dogrula = mysql_result(mysql_query("SELECT count(id) AS toplam FROM uyeler WHERE mail='$mail' and sifre='$sifre' and onay = '1'"), 0, 'toplam');
if ($dogrula != 0)
{
$_SESSION['selco']=$mail;
echo'<script>location.href="index.php";</script>';
}else{
echo '<script>alert("Bilgiler yanlış veya hesabını pasif durumdadır.");</script>';
}
}
?>
<!doctype html>
<html>
<head>
	<title><?php echo $title; ?> | Giriş</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- Theme CSS -->
	<!--[if !IE]> -->
	<link rel="stylesheet" href="css/style.css">
	<!-- <![endif]-->
	<!--[if IE]>
	<link rel="stylesheet" href="css/style_ie.css">
	<![endif]-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>

</head>
<body class='login-body'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38067142-3', 'afksnk.com');
  ga('send', 'pageview');

</script>
	<div class="login-wrap">
		 <h2> <?=$loginust?>  </h2> 
		<?php
if ( $sayfa == '' )
{
?>
		<div class="login">
			<form action="" method="POST">
				<a href="register.php" class='button button-basic-blue button-less-round'><span>Kayıt Ol</span></a>
				<div class="sep"> ve ya </div>
				<div class="email"><input type="text" name="mail" placeholder="Email" class='input-block-level'></div>
				<div class="pw">
					<input type="password" name="sifre" placeholder="Password" class='input-block-level'>
				</div>
				<button type="submit" value="Sign In" class='button button-basic-darkblue btn-block'>Giriş Yapın</button>
			</form>
		</div>
		<a href="login.php?sayfa=lostPassword" class='pw-link'>Şifremi <span>Unuttum</span> <i class="icon-arrow-right"></i></a>
<?php
}
if ( $sayfa == 'lostPassword' )
{
$post_mail = htmlspecialchars(mysql_real_escape_string($_POST['mail']));
if ( $post_mail )
{
if(mysql_num_rows(mysql_query("SELECT mail FROM uyeler WHERE mail='$post_mail'")) > 0){
$Sifre_Al = mysql_fetch_array(mysql_query("SELECT ad,mail,sifre FROM uyeler WHERE mail='$post_mail'"));
$uye_sifre = $Sifre_Al['sifre'];
$uye_mail = $Sifre_Al['mail'];
$uye_isim = $Sifre_Al['ad'];
		
# mail başlangıç
# ayarlar
$mailbilgisi=$y_mail;
$titlebilgisi=$title;
# tarih bilgileri
$tarih		=	time();
$tarih2		= 	date("Y-m-d H:i.s",$tarih);
$tarih3		= 	date("Y-m-d",$tarih);
# mail kodlar
$g_mail = $mailbilgisi;
$g_isim = $_SERVER['SERVER_NAME'];;
$giden 	= $uye_mail;    
$baslik = "Uyelik Bilgileriniz";
$mesaj 	= 'Sayın '.$uye_isim.', <br>'.$tarih2.' tarihinde talep etmiş olduğunuz şifre hatırlatma sebebiyle bu maili size gönderdik.<br>
Bilgileriniz Şunlardır:<br><br>
Mail Adı: <b>'.$uye_mail.'</b><br>
Üye Şifre: <b>'.$uye_sifre.'</b><br><br>
'.$titlebilgisi.'
';
$header = "From: $g_isim <".$g_mail.">\n";  
$header .= "Reply-To: $g_isim <".$g_mail.">\n"; 
$header .= "Return-Path: $g_isim <".$g_mail.">\n";   
$header .= "Delivered-to:  $g_isim <".$g_mail.">\n"; 
$header .= "Date: ".date(r)."\n"; 
$header .= "Content-Type: text/html; charset=iso-8859-9\n";    
$header .= "MIME-Version: 1.0\n"; 
$header .= "Importance: Normal\n"; 
$header .= "X-Sender: $g_isim <".$g_mail.">\n";    
$header .= "X-Priority: 3\n";    
$header .= "X-MSMail-Priority: Normal\n"; 
$header .= "X-Mailer: Microsoft Office Outlook, Build 11.0.5510\n";  
$header .= "X-MimeOLE: Produced By Microsoft MimeOLE V6.00.2900.2869\n"; 
$GONDER	= @mail($giden, $baslik, $mesaj, $header);
# mail kodlar bitiş
# mail bitiş
if ( $GONDER )
echo '<script>alert("Şifreniz kayıtlı mail adresinize gönderilmiştir.");</script>'; 
else 
echo '<script>alert("HATA Olustu, Lutfen Daha Sonra Tekrar Deneyin.");</script>';
		
		}
	}
?>
		<div class="login">
			<form action="" method="POST">
				<div class="email"><input type="text" name="mail" placeholder="Email" class='input-block-level'></div>
				<button type="submit" value="Sign In" class='button button-basic-darkblue btn-block'>Şifremi Gönder</button>
			</form>
		</div>
<?php
}
?>
	</div>
	
<!-- Sayyac counter START v4.3 -->
<script type="text/javascript">
<!--
document.write(unescape("%3Cscript src='" + (("https:" == document.location.protocol) ? "https://" : "http://")
 + "srv.sayyac.net/sa.js?_salogin=afksnk&_sav=4.3' type='text/javascript'%3E%3C/script%3E"));
//-->
</script>
<script type="text/javascript">
<!--
sayyac.track('afksnk','srv.sayyac.net');
//-->
</script>
<noscript><a href="http://www.sayyac.com/" title=""><img src="http://srv.sayyac.net/sa.gif?_salogin=afksnk&amp;_sav=4.3" border="0" alt="" /></a></noscript>
<!-- Sayyac counter END v4.3 -->

</body>

</html>