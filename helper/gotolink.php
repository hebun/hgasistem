<?php
mysql_connect('localhost', 'afksnkus2', 's6eg5g3');
mysql_select_db('afksnkdb2');
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");

$action = $_GET['action'];

if($action == "linkver")
{
	$sql = mysql_query("SELECT * FROM link WHERE link = '' ORDER BY RAND() LIMIT 1");
	if(mysql_num_rows($sql))
	{
		$row = mysql_fetch_array($sql);
		echo $row['video'];
	}else
	{
		echo 'bitti';
	}
}




?>