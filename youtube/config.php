<?
mysql_connect('localhost', 'prolxjpp_xxx', 'shedower83');
mysql_select_db('prolxjpp_xxx');
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
?>