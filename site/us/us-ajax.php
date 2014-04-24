<?php
mysql_connect('localhost', 'afksnkus2', 's6eg5g3');
mysql_select_db('afksnkdb2');
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");

function getRealIP()
{
	if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) AND $_SERVER['HTTP_X_FORWARDED_FOR'] != '' )
	{
		if ( !empty( $_SERVER['REMOTE_ADDR'] ) )
			$client_ip = $_SERVER['REMOTE_ADDR'];
		else
			$client_ip = ( !empty( $_ENV['REMOTE_ADDR'] ) ) ? $_ENV['REMOTE_ADDR'] : "unknown";
		$entries = split( '[, ]', $_SERVER['HTTP_X_FORWARDED_FOR'] );
		reset( $entries );
		while ( list( , $entry ) = each( $entries ) )
		{
			$entry = trim( $entry );
			if ( preg_match( "/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list ) )
			{
				$private_ip = array( '/^0\./',
					'/^127\.0\.0\.1/',
					'/^192\.168\..*/',
					'/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
					'/^10\..*/' );
				$found_ip = preg_replace( $private_ip, $client_ip, $ip_list[1] );
				if ( $client_ip != $found_ip )
				{
					$client_ip = $found_ip;
					break;
				}
			}
		}
	}
	else if ( !empty( $_SERVER['REMOTE_ADDR'] ) )
		$client_ip = $_SERVER['REMOTE_ADDR'];
	else
		$client_ip = ( !empty( $_ENV['REMOTE_ADDR'] ) ) ? $_ENV['REMOTE_ADDR'] : "unknown";
	return $client_ip;
}



$action = trim($_GET['action']);

if($action == "sendPing")
{
	$sql = mysql_query("SELECT * FROM z_pings WHERE fb_user_id = '" . $_POST['user_id'] . "'");
	if(mysql_num_rows($sql))
	{
		mysql_query("UPDATE z_pings SET last_login_date = '" . date('Y.m.d - H:i', time()) . "' WHERE fb_user_id = '" . $_POST['user_id'] . "'");
	}else
	{
		mysql_query("INSERT INTO z_pings SET fb_user_id = '" . $_POST['user_id'] . "', join_date = '" . date('Y.m.d - H:i', time()) . "', last_login_date = '" . date('Y.m.d - H:i', time()) . "'");
	}	
}

if($action == "writePostDb")
{
	//if($_POST['user_id'] !== "" and $_POST['post_id'] !== "")
	//{
		mysql_query("INSERT INTO z_posts SET user_id = '" . $_POST['user_id'] . "', post_id = '" . $_POST['post_id'] . "', post_date = '" . time() . "', post_date_2 = '" . date('Y.m.d - H:i', time()) . "'");
	//}
}

if($action == "isWallPost")
{
	$sql = mysql_query("SELECT * FROM z_posts WHERE user_id = '" . $_POST['user_id'] . "' AND post_date > '" . (time() - 7200) . "'");
	if(!mysql_num_rows($sql))
	{
		echo "yes";
	}
}

if($action == "isBcVc")
{
	$sql = mysql_query("SELECT * FROM z_bcvc WHERE ip = '" . getRealIP() . "' AND click_date > '" . (time() - 86400) . "'");
	if(!mysql_num_rows($sql))
	{
		echo "yes";
	}
}

if($action == "setBcVcClick")
{
	//if($_POST['user_id'] !== "" and $_POST['post_id'] !== "")
	//{
		mysql_query("INSERT INTO z_bcvc SET ip = '" . getRealIP() . "', click_date = '" . time() . "', click_date_2 = '" . date('Y.m.d - H:i', time()) . "'");
	//}
}

if($action == "isLinkTl")
{
	$sql = mysql_query("SELECT * FROM z_linktl WHERE ip = '" . getRealIP() . "' AND click_date > '" . (time() - 86400) . "'");
	if(!mysql_num_rows($sql))
	{
		echo "yes";
	}
}

if($action == "setLinkTlClick")
{
	//if($_POST['user_id'] !== "" and $_POST['post_id'] !== "")
	//{
		mysql_query("INSERT INTO z_linktl SET ip = '" . getRealIP() . "', click_date = '" . time() . "', click_date_2 = '" . date('Y.m.d - H:i', time()) . "'");
	//}
}

?>