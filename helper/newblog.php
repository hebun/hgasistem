<?php

set_time_limit(3000);

mysql_connect('localhost', 'afksnkus2', 's6eg5g3');
mysql_select_db('afksnkdb2');
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");


if(isset($_GET['newblog']))
{
	$newblog = trim($_GET['newblog']);
	$sql = mysql_query("SELECT * FROM link_bloglist WHERE blog_adres = '" . $newblog . "'");
	if(!mysql_num_rows($sql))
	{
		mysql_query("INSERT INTO link_bloglist SET blog_adres = '" . $newblog . "'");
	}
}
?>
 