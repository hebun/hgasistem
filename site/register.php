<?php
 

session_start();
error_reporting(0);
include "config.php";

$ad=mysql_real_escape_string(htmlspecialchars($_POST['ad']));
$soyad=mysql_real_escape_string(htmlspecialchars($_POST['soyad']));
$sifre=mysql_real_escape_string(htmlspecialchars($_POST['sifre']));
$mail=mysql_real_escape_string(htmlspecialchars($_POST['mail']));
$tel=mysql_real_escape_string(htmlspecialchars($_POST['tel']));

if($ad && $soyad && $tel && $mail && $sifre){
$dogrula = mysql_result(mysql_query("SELECT count(id) AS toplam FROM uyeler WHERE mail='$mail'"), 0, 'toplam');
if ($dogrula == 0)
{
mysql_query("INSERT INTO uyeler (ad, soyad, sifre, mail, tel) VALUES ('$ad', '$soyad', '$sifre', '$mail', '$tel')");
echo'<script>alert("Kayıt işleminiz tamamlanmıştır. Giriş yapabilirsiniz..."); location.href="login.php";</script>';
}else{
echo '<script>alert("Daha önce bu mail ismiyle yada maille kayıt olunmus...");</script>';
}
}
?>
<!doctype html>
<html>
<head>
	<title><?php echo $title; ?> | Kayıt Ol</title>
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
	<div class="login-wrap">
		<h2><?=$loginust?> | Kayıt Ol</h2>
		<div class="login">
			<form action="" method="POST">
				<input type="text" name="mail" placeholder="Email" class='input-block-level'>
				<input type="password" name="sifre" placeholder="Password" class='input-block-level'>
				<input type="text" name="tel" placeholder="Telefon" class='input-block-level'>
				<input type="text" name="ad" placeholder="Ad" class='input-block-level'>
				<input type="text" name="soyad" placeholder="Soyad" class='input-block-level'>
				<button type="submit" value="Sign In" class='button button-basic-darkblue btn-block'>Kayıt Ol</button>
			</form>
		</div>
		<a href="login.php?sayfa=lostPassword" class='pw-link'>Şifrenizi mi <span>Unuttunuz</span>? <i class="icon-arrow-right"></i></a>
	</div>
</body>

</html>