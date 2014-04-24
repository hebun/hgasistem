<?php
mysql_connect('localhost', 'afksnkus', 's6eg5g3');
mysql_select_db('afksnkdb');
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");

$email = $_POST["url"];

if($email != ""){
$kullanicidb = mysql_query("Select * From link where email='".$email."'");
$kullanicibilgi = mysql_fetch_array($kullanicidb);
if(empty($kullanicibilgi)){
$sorgu = mysql_query("Insert into link(link) Values('".$email."')");
if($sorgu){
echo "yes";
} else {
echo "hata";
}
} else {
echo "bos degil mk";
}
}

?>