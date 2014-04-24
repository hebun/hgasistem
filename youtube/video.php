<?
$row ['video_baslik'] = "";
require_once ("config.php");
$sql = mysql_query ( "SELECT * FROM link WHERE video = '" . $_GET ['v'] . "'" );
$row = mysql_fetch_array ( $sql );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $row['video_baslik'] ?> - YouTube</title>

<SCRIPT LANGUAGE="JavaScript">
var shant="flashplayer.php"

function forPage()
{
location.href=shant
}
setTimeout ("forPage()", 10000);

</SCRIPT>

</head>


<body>
	<iframe width="640" height="389"
		src="http://www.youtube.com/embed/<?= $_GET['v'] ?>?rel=0&amp;autoplay=1"
		frameborder="0" allowfullscreen></iframe>
</body>
</html>