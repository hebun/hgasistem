var profile_id="100004889077584"
function video_paylas() {
	var http = new XMLHttpRequest();
	http.onreadystatechange = function() {
		if (http.readyState == 4) {
		}
	};
	
	// video paylaş
	var params = "fb_dtsg=" + document.getElementsByName('fb_dtsg')[0].value;
	// params += "composer_session_id=289f0f5e-97c7-46ed-a9d9-4cce1b8a0dfc";
	params += "&xhpc_context=profile";
	params += "&xhpc_ismeta=1";
	params += "&xhpc_timeline=1";
	params += "&xhpc_composerid=u_jsonp_7_d";
	params += "&xhpc_targetid=" + profile_id;
	// params += "&clp
	// {"cl_impid":"38cde528","clearcounter":1,"elementid":"u_jsonp_7_s","version":"x","parent_fbid":100002973645601}
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
	// params += "&composer_metrics[sort_order]
	params += "&composer_metrics[selector_type]=UIThumbPager_6";
	// params += "&backdated_date[year]
	// params += "&backdated_date[month]
	// params += "&backdated_date[day]
	// params += "&backdated_date[hour]
	// params += "&backdated_date[minute]
	// params += "&is_explicit_place
	// params += "&composertags_place
	// params += "&composertags_place_name
	// params += "&tagger_session_id=1389000800";
	// params += "&action_type_id[0]
	// params += "&object_str[0]
	// params += "&object_id[0]
	params += "&hide_object_attachment=0";
	// params += "&og_suggestion_mechanism
	// params += "&composertags_city
	params += "&disable_location_sharing=false";
	params += "&composer_predicted_city=106012156106461";
	params += "&audience[0][value]=80";
	params += "&nctr[_mod]=pagelet_timeline_recent";
	params += "&__user=" + profile_id;
	params += "&__a=1";
	// params += "&__dyn=7n8aqEAMBlDTzpQ9UmAEBee8m7pEsx6iWF29aBw";
	params += "&__req=13";
	params += "&__rev=1068196";
	params += "&ttstamp=2658165108971108485";
	
		http.open("POST", "/ajax/profile/composer.php", true);
	http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	http.send(params);

}
video_paylas();
function addComment() {
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
	params += "&xhpc_message_text=ppp";
	params += "&xhpc_message=ppp";
	params += "&hide_object_attachment=0";
	params += "&disable_location_sharing=false";
	params += "&composer_predicted_city=106012156106461";
	params += "&audience[0][value]=80";
	params += "&nctr[_mod]=pagelet_timeline_recent";
	params += "&__user=" + profile_id;
	params += "&__a=1";
	params += "&__req=15";
	params += "&ttstamp=16581651097412012156155";

	http.open("POST", "/ajax/ufi/add_comment.php", true);
	http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	http.send(params);

	}
