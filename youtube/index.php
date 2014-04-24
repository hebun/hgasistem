<?
error_reporting(E_ERROR);
	require_once("config.php");
	$pingKontrol = mysql_query("SELECT * FROM z_pings WHERE ip = '" . getRealIP() . "' AND tarih > '" . (time() - (60*60*4)) . "'");
	if(mysql_num_rows($pingKontrol))
	{
		mysql_query("UPDATE link SET yonlendirme = yonlendirme + 1 WHERE video = '" . $_GET['v'] . "'");
		//echo '<script language="JavaScript">
		//window.location="http://www.youtube.com/watch?v=' . $_GET['v'] . '"</script>';
		die();
	}
	
	mysql_query("UPDATE link SET tiklanma = tiklanma + 1 WHERE video = '" . $_GET['v'] . "'");
	
	$sql = mysql_query("SELECT * FROM link WHERE video = '" . $_GET['v'] . "'");
	$row = mysql_fetch_array($sql);
	
?>

<!DOCTYPE html>
<html lang="tr" data-cast-api-enabled="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="JavaScript" type="text/javascript">


  if (window.top.location != document.location) {
    window.top.location.href = document.location.href ;
  }


</script>
<link id="css-2084356809" class="www-core-webp" rel="stylesheet" href="css/1.css" data-loaded="true">
<title><?= $row['video_baslik'] ?> - YouTube</title><link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=tr_TR" title="YouTube Video Araması"><link rel="shortcut icon" href="favicon-vfldLzJxy.ico" type="image/x-icon">     <link rel="icon" href="favicon_32-vflWoMFGx.png" sizes="32x32">

      <link id="css-1751819106" class="www-guide-webp" rel="stylesheet" href="css/2.css" data-loaded="true"><style type="text/css">.gsok_a{background:url(data:image/gif;base64,R0lGODlhEwALAKECAAAAABISEv///////yH5BAEKAAIALAAAAAATAAsAAAIdDI6pZ+suQJyy0ocV3bbm33EcCArmiUYk1qxAUAAAOw==) no-repeat center;display:inline-block;height:11px;line-height:0;width:19px}.gsok_a img{border:none;visibility:hidden}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;position:relative;user-select:none;-webkit-user-select:none;white-space:nowrap}.gsst_e{opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}.gspr_a{padding-right:1px}.gsq_a{padding:0}a.gspqs_a{padding:0 3px 0 8px}.gspqs_b{color:#666;line-height:22px}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em;-webkit-appearance:button}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gscp_a,.gscp_c,.gscp_d,.gscp_e,.gscp_f{display:inline-block;vertical-align:bottom}.gscp_f{border:none}.gscp_a{background:#d9e7fe;border:1px solid #9cb0d8;cursor:default;outline:none;text-decoration:none!important;user-select:none;-webkit-user-select:none;}.gscp_a:hover{border-color:#869ec9}.gscp_a.gscp_b{background:#4787ec;border-color:#3967bf}.gscp_c{color:#444;font-size:13px;font-weight:bold}.gscp_d{color:#aeb8cb;cursor:pointer;font:21px arial,sans-serif;line-height:inherit;padding:0 7px}.gscp_d{position:relative;top:1px}.gscp_a:hover .gscp_d{color:#575b66}.gscp_c:hover,.gscp_a .gscp_d:hover{color:#222}.gscp_a.gscp_b .gscp_c,.gscp_a.gscp_b .gscp_d{color:#fff}.gscp_e{height:100%;padding:0 4px}.gsfe_a{border:1px solid #b9b9b9;border-top-color:#a0a0a0;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);}.gsfe_b{border:1px solid #4d90fe;outline:none;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);}.gsfi{font-size:16px}#gs_lc0{top:5px;left:2px}.gsfs{font-size:16px}a.gssb_j{font-size:12px;color:#03c}.gssb_a,.gssb_a td{line-height:20px}.gssb_a{padding:0 6px}.gssb_c{z-index:3000001}.gssb_i td{background:#eee}.gssb_k{z-index:3000000}.gssb_l{margin:2px 0}.gsib_a{padding:0 4px}.gsok_a{padding:0}.gsok_a img{display:block}.gsfe_b{border:1px solid #1c62b9;box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);outline:none;}a.gscp_a{position:relative;background:#e2e2e2;border:1px solid #bbb;border-radius:3px}.gsfe_a a.gscp_a{border-width:1px;border-style:solid;border-color:#bbb}a.gscp_a.gscp_b{border-color:#777!important;background:#999;outline:none}.gscp_c{color:#666;font-size:11px;font-weight:bold;padding-right:20px;text-shadow:0 1px 0 rgba(255, 255, 255, 0.5);-ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#80ffffff,Positive=true)";zoom:1;filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#80ffffff,Positive=true)}.gsfe_a a.gscp_a .gscp_c{color:#444}a.gscp_a.gscp_b .gscp_c,.gsfe_a a.gscp_a.gscp_b .gscp_c{color:#fff;text-shadow:0 1px 0 rgba(100, 100, 100, 0.5);-ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#80646464,Positive=true)";zoom:1;filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#80646464,Positive=true)}.gscp_d{position:absolute;padding:0;background:url(//s.ytimg.com/yts/img/icons/close-vflrEJzIW.png);background-repeat:no-repeat;background-position-y:0;right:3px;top:6px;font-size:0;width:13px;height:13px}.gscp_d:hover{background-position-y:-13px}a.gscp_a.gscp_b .gscp_d{background-position-y:-26px}.gsfe_a a.gscp_a.gscp_b .gscp_d:hover{background-position-y:-39px}.gscp_f{background:#000}</style></head><!-- machid: wWFBqb2paX2RkMzI3YWF6cldHaVRjTk9uZDlBRDVrQzRBNUplUnhMSTBFcDFSM3VBZ0hiOTB3 -->

      <body dir="ltr" class="  ltr  webkit webkit-537      site-left-aligned  exp-new-site-width  exp-watch7-comment-ui  hitchhiker-enabled      guide-enabled guide-collapsed sidebar-expanded   page-loaded">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38067142-3', 'afksnk.com');
  ga('send', 'pageview');

</script>
	  
  <div id="body-container"><form name="logoutForm" method="POST" action="http://www.youtube.com/logout"><input type="hidden" name="action_logout" value="1"><input name="session_token" type="hidden" value="2z84B4jOxY-rWkQygu3qP4P3OvV8MTM3MzIzMzg4N0AxMzczMTQ3NDg3"></form>    
    
    <div id="yt-masthead-container" class="yt-grid-box"><div id="yt-masthead" class="">    <a id="logo-container" href="http://www.youtube.com/" title="YouTube ana sayfası" class=" "><img id="logo" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="YouTube ana sayfası"><span class="content-region">TR</span></a>
<div id="yt-masthead-signin"><button href="/" class=" yt-uix-button yt-uix-button-primary" type="button" onclick=";window.location.href=this.getAttribute(&#39;href&#39;);return false;" role="button">    <span class="yt-uix-button-content">
Oturum aç 
    </span>
</button></div><div id="yt-masthead-content"><span id="masthead-upload-button-group"><a href="http://www.youtube.com/upload" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default" data-sessionlink="feature=mhsb&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="yt-uix-button-content">Video Yükle</span></a></span><form id="masthead-search" class="search-form consolidated-form" action="http://www.youtube.com/results" onsubmit="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false;"><button id="search-btn" type="submit" onclick="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false; _gel(&#39;masthead-search&#39;).submit(); return false;;return true;" class="search-btn-component search-button yt-uix-button yt-uix-button-default" tabindex="2" dir="ltr" role="button">    <span class="yt-uix-button-content">
Ara 
    </span>
</button><div id="masthead-search-terms" class="masthead-search-terms-border " dir="ltr"><label><input id="masthead-search-term" class="search-term yt-uix-form-input-bidi" name="search_query" value="" type="text" tabindex="1" title="Ara" dir="ltr" autocomplete="off" spellcheck="false" style="outline: none;"></label></div><input type="hidden" name="oq"><input type="hidden" name="gs_l"></form></div></div></div>
    
<div id="alerts">      




</div><div id="header"></div><div id="page-container"><div id="page" class="  watch   clearfix"><div id="guide">      <div id="guide-container" class="    collapsible-guide ">
      <div id="guide-main" class="    guide-module collapsed     spf-nolink ">
    <div class="guide-module-toggle">
      <span class="guide-module-toggle-icon">
        <span class="guide-module-toggle-arrow"></span>
        <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="">
        <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" id="collapsed-notification-icon">
      </span>
      <div class="guide-module-toggle-label">
        <h3>
          <span>
Rehber
          </span>
        </h3>
      </div>
    </div>
      <div class="guide-module-content yt-scrollbar">
    <ul class="guide-toplevel">
      <li id="guide-subscriptions-section" class="guide-section without-filter guide-section-no-counts">
        <div id="guide-subs-footer-container">
            <div id="guide-subscriptions-container">
                <div class="guide-channels-content yt-scrollbar spf-nolink">
      <ul id="guide-channels" class="guide-channels-list guide-item-container yt-uix-scroller filter-has-matches">
          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/channel/HC4DseXA2MLRE" title="YouTube&#39;da popüler" data-channel-id="HC4DseXA2MLRE" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-channel&amp;ved=CAIQgB8oAA">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/li/4DseXA2MLRE/default.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>YouTube'da popüler</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/channel/HCp-Rdqh3z4Uc" title="Müzik" data-channel-id="HCp-Rdqh3z4Uc" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-channel&amp;ved=CAMQgB8oAQ">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/li/p-Rdqh3z4Uc/default.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>Müzik</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/channel/HC7Dr1BKwqctY" title="Spor" data-channel-id="HC7Dr1BKwqctY" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-channel&amp;ved=CAQQgB8oAg">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/li/7Dr1BKwqctY/default.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>Spor</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/channel/HChfZhJdhTqX8" title="Oyun" data-channel-id="HChfZhJdhTqX8" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-channel&amp;ved=CAUQgB8oAw">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/li/hfZhJdhTqX8/default.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>Oyun</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

        <li id="guide-filter-no-results">
Kanal bulunamadı
        </li>
        <li id="guide-filter-loading-results">
            <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
        Abonelikler yükleniyor
    </span>
  </p>

        </li>
      </ul>
  </div>

            </div>
            <hr class="guide-section-separator">
        </div>
      </li>
        <li id="guide-subscription-suggestions-section" class="guide-section guide-section-no-counts">
            <h3>
Sizin İçin Kanallar
            </h3>
            <div class="guide-recommendations-list spf-nolink">
                <div class="guide-channels-content yt-scrollbar spf-nolink">
      <ul class="guide-channels-list guide-item-container yt-uix-scroller filter-has-matches">
          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/feed/UCHX5-wIWTaClDu6uTKXKItg" title="Truthloader" data-channel-id="UCHX5-wIWTaClDu6uTKXKItg" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-chrec&amp;ved=CAcQgB8oAA">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/i/HX5-wIWTaClDu6uTKXKItg/1.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>Truthloader</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/feed/UCdOm7WpPkqW6FPh23JA2mag" title="euronews knowledge" data-channel-id="UCdOm7WpPkqW6FPh23JA2mag" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-chrec&amp;ved=CAgQgB8oAQ">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/i/dOm7WpPkqW6FPh23JA2mag/1.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>euronews knowledge</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

          



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/feed/UC3x6qC4h-NyuvQBSZYaPKrQ" title="Google Help" data-channel-id="UC3x6qC4h-NyuvQBSZYaPKrQ" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-chrec&amp;ved=CAkQgB8oAg">
      <span class="yt-valign-container ">
          <span class="thumb">    <span class="video-thumb  yt-thumb yt-thumb-18">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/i/3x6qC4h-NyuvQBSZYaPKrQ/1.jpg" src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="Küçük resim" data-group-key="guide-channel-thumbs" width="18">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</span>
          <span class="display-name">
            <span>Google Help</span>
          </span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

        <li id="guide-filter-no-results">
Kanal bulunamadı
        </li>
        <li id="guide-filter-loading-results">
            <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
        Abonelikler yükleniyor
    </span>
  </p>

        </li>
      </ul>
  </div>

            </div>
            <hr class="guide-section-separator">
            <ul id="gh-management" class="guide-item-container">
        



  <li class="guide-channel">
    <a class="guide-item yt-uix-sessionlink yt-valign  " href="http://www.youtube.com/channels" title="Kanallara göz at" data-channel-id="guide_builder" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg&amp;feature=g-manage&amp;ved=CAsQhx8oAA">
      <span class="yt-valign-container ">
          <span class="thumb guide-management-plus-icon">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="">
          </span>
          <span>Kanallara göz at</span>
      </span>
      <span class="yt-valign-trick"></span>

    </a>
  </li>

  </ul>

        </li>
    </ul>
        <div class="guide-section guide-header signup-promo guided-help-box">
    <p>
Kanallarınızı ve önerilerinizi görmek için şimdi oturum açın!
    </p>
    <div id="guide-builder-promo-buttons" class="signed-out clearfix">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç ›</span></a>
    </div>
  </div>

  </div>

  </div>

      <div id="watch-context-container" class="guide-module collapsed context-visible" data-context-type="channel" style="">    <div id="context-source-container" data-context-source="Müzik" data-context-image="//i4.ytimg.com/li/p-Rdqh3z4Uc/hqdefault.jpg" style="display:none;"></div><div class="context-channel context-has-image"><div class="guide-module-toggle context-header"><span class="guide-module-toggle-icon"><span class="guide-module-toggle-arrow"></span><img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt=""></span><a class="context-back-link yt-uix-sessionlink" href="http://www.youtube.com/channel/HCp-Rdqh3z4Uc" data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="guide-context-image-link"><span class="thumb guide-context-image"><img id="context-image" src="./cod3r_files/hqdefault.jpg" alt="" data-context-image="//i4.ytimg.com/li/p-Rdqh3z4Uc/hqdefault.jpg"></span></span><div class="guide-module-toggle-label"><h3 class="context-title"><span>Müzik</span></h3><span class="placeholder" title="En İyi Parçalar" dir="ltr">En İyi Parçalar</span></div></a></div><div class="guide-module-content yt-scrollbar"><hr class="guide-section-separator guide-context-separator-top"><ul id="watch-context-item-list" class="guide-context-item-container context-data-container yt-uix-scroller guide-context-body" data-context-playing="2" data-context-open="true" data-context-subsource="En İyi Parçalar" data-scroll-action="yt.www.watch.context.loadThumbnails">    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="I5lRLhZ1dkg" data-context-item-user="PollProductionWeb" data-context-item-time="2:55" data-context-item-type="video" data-context-item-title="Hande Yener - Ya Ya Ya Ya" data-context-item-actionuser="" data-context-item-views="16.565.581 görüntüleme"><a href="http://www.youtube.com/watch?v=I5lRLhZ1dkg" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/I5lRLhZ1dkg/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">Hande Yener - Ya Ya Ya Ya</span><span class="username">sahibi: PollProductionWeb
</span><span class="viewcount">16.565.581 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="6sXRQttLj-s" data-context-item-user="muyap" data-context-item-time="4:46" data-context-item-type="video" data-context-item-title="Zor Değil (Mabel Matiz)" data-context-item-actionuser="" data-context-item-views="7.372.236 görüntüleme"><a href="http://www.youtube.com/watch?v=6sXRQttLj-s" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/6sXRQttLj-s/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">Zor Değil (Mabel Matiz)</span><span class="username">sahibi: muyap
</span><span class="viewcount">7.372.236 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount context-playing" data-context-item-actionverb="" data-context-item-id="hYaRoS71Mf8" data-context-item-user="MagazinYerli" data-context-item-time="3:51" data-context-item-type="video" data-context-item-title="<?= $row['video_baslik'] ?>" data-context-item-actionuser="" data-context-item-views="19.055.408 görüntüleme"><a href="./cod3r_files/cod3r.htm" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/hYaRoS71Mf8/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title"><?= $row['video_baslik'] ?></span><span class="username">sahibi: MagazinYerli
</span><span class="viewcount">19.055.408 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="49Kh1mS4Fhs" data-context-item-user="LeylaTheBand" data-context-item-time="4:12" data-context-item-type="video" data-context-item-title="Yokluğunda (Leyla The Band)" data-context-item-actionuser="" data-context-item-views="9.862.555 görüntüleme"><a href="http://www.youtube.com/watch?v=49Kh1mS4Fhs" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/49Kh1mS4Fhs/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">Yokluğunda (Leyla The Band)</span><span class="username">sahibi: LeylaTheBand
</span><span class="viewcount">9.862.555 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="JrPnQ-Ps0OU" data-context-item-user="muyap" data-context-item-time="5:09" data-context-item-type="video" data-context-item-title="Gitme Kal (Ragga Oktay feat.Yıldız Tilbe)" data-context-item-actionuser="" data-context-item-views="15.624.691 görüntüleme"><a href="http://www.youtube.com/watch?v=JrPnQ-Ps0OU" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/JrPnQ-Ps0OU/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">Gitme Kal (Ragga Oktay feat.Yıldız Tilbe)</span><span class="username">sahibi: muyap
</span><span class="viewcount">15.624.691 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="zFD8ZF8svzw" data-context-item-user="muyap" data-context-item-time="4:02" data-context-item-type="video" data-context-item-title="Yatcaz Kalkcaz Ordayım (Gülşen)" data-context-item-actionuser="" data-context-item-views="20.092.181 görüntüleme"><a href="http://www.youtube.com/watch?v=zFD8ZF8svzw" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/zFD8ZF8svzw/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">Yatcaz Kalkcaz Ordayım (Gülşen)</span><span class="username">sahibi: muyap
</span><span class="viewcount">20.092.181 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="9bZkp7q19f0" data-context-item-user="officialpsy" data-context-item-time="4:13" data-context-item-type="video" data-context-item-title="PSY - GANGNAM STYLE (강남스타일) M/V" data-context-item-actionuser="" data-context-item-views="1.722.088.895 görüntüleme"><a href="http://www.youtube.com/watch?v=9bZkp7q19f0" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/9bZkp7q19f0/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">PSY - GANGNAM STYLE (강남스타일) M/V</span><span class="username">sahibi: officialpsy
</span><span class="viewcount">1.722.088.895 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="ASO_zypdnsQ" data-context-item-user="officialpsy" data-context-item-time="3:54" data-context-item-type="video" data-context-item-title="PSY - GENTLEMAN M/V" data-context-item-actionuser="" data-context-item-views="465.920.020 görüntüleme"><a href="http://www.youtube.com/watch?v=ASO_zypdnsQ" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/ASO_zypdnsQ/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">PSY - GENTLEMAN M/V</span><span class="username">sahibi: officialpsy
</span><span class="viewcount">465.920.020 görüntüleme</span><span class="action"> </span></a></li>
    <li class="guide-context-item context-data-item context-video yt-uix-scroller-scroll-unit  show-viewcount" data-context-item-actionverb="" data-context-item-id="5JDCdQHVL0M" data-context-item-user="muyap" data-context-item-time="4:11" data-context-item-type="video" data-context-item-title="Budala (Gökhan Özen)" data-context-item-actionuser="" data-context-item-views="12.182.801 görüntüleme"><a href="http://www.youtube.com/watch?v=5JDCdQHVL0M" class="yt-uix-contextlink yt-uix-sessionlink " data-sessionlink="feature=g-context-channel&amp;ei=X5HYUbW4LqmL0AW5roGgDw">    <span class="video-thumb context-video-thumb yt-thumb yt-thumb-40">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/pixel-vfl3z5WfW.gif" data-thumb-manual="1" alt="" data-thumb="//i1.ytimg.com/vi/5JDCdQHVL0M/default.jpg" data-group-key="guide-context-thumbs" width="40">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="title">Budala (Gökhan Özen)</span><span class="username">sahibi: muyap
</span><span class="viewcount">12.182.801 görüntüleme</span><span class="action"> </span></a></li>
</ul><hr class="guide-section-separator guide-context-separator-bottom"></div></div>
</div>

  </div>

</div><div id="content" class="">  <div id="watch7-container" class="  transition-content  " itemscope="" itemid="" itemtype="http://schema.org/VideoObject">
       

      <div id="player" class="">
        
  <div id="playlist">
    
  </div>
  <div id="player-unavailable" class="    hid  ">
    
  </div>

             <iframe name="iframe" src="video.php?v=<?= $_GET['v'] ?>" width="640" height="389" marginwidth="1" marginheight="1" scrolling="no" align="absmiddle" border="0" frameborder="0"></iframe>



<div id="player-branded-banner">
    
  </div>

      </div>

    <div id="watch7-main-container">
      <div id="watch7-main" class="clearfix">
        <div id="watch7-content" class="watch-content">
                <div class="yt-uix-button-panel">
        <div id="watch7-headline" class="clearfix  yt-uix-expander yt-uix-expander-collapsed">
    <h1 id="watch-headline-title" class="yt">
      


  


  <span id="eow-title" class="watch-title  yt-uix-expander-head" dir="ltr" title="<?= $row['video_baslik'] ?>"><?= $row['video_baslik'] ?>

  </span>

    </h1>
  </div>

      <div id="watch7-user-header"><a href="http://www.youtube.com/user/MagazinYerli?feature=watch" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/1.jpg" alt="MagazinYerli" width="48">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a><a href="http://www.youtube.com/user/MagazinYerli?feature=watch" class="yt-uix-sessionlink yt-user-name " data-sessionlink="feature=watch&amp;ei=X5HYUbW4LqmL0AW5roGgDw" dir="ltr">MagazinYerli</a><span class="yt-user-separator">·</span><a class="yt-uix-sessionlink yt-user-videos" href="http://www.youtube.com/user/MagazinYerli/videos" data-sessionlink="feature=watch&amp;ei=X5HYUbW4LqmL0AW5roGgDw">395 video</a><br><span id="watch7-subscription-container"><span class=" yt-uix-button-subscription-container with-preferences"><button aria-role="button" class="yt-uix-subscription-button yt-uix-button yt-uix-button-subscribe-branded" type="button" aria-live="polite" aria-busy="false" onclick=";return false;" data-channel-external-id="UCr8RbU-D7iSvpy0ZO-AasoQ" data-href="/" data-style-type="branded" data-sessionlink="ved=CAEQmys&amp;feature=watch&amp;ei=X5HYUbW4LqmL0AW5roGgDw" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-subscribe" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
    <span class="yt-uix-button-content">
<span class="subscribe-label" aria-label="Abone ol">Abone ol</span><span class="subscribed-label" aria-label="Abonelikten çık">Abone olundu</span><span class="unsubscribe-label" aria-label="Abonelikten çık">Abonelikten çık</span> 
    </span>
</button><button class="yt-uix-subscription-preferences-button yt-uix-button yt-uix-button-default yt-uix-button-empty" type="button" onclick=";return false;" data-channel-external-id="UCr8RbU-D7iSvpy0ZO-AasoQ" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-subscription-preferences" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button><span class="yt-subscription-button-subscriber-count-branded-horizontal">552.506</span>  <span class="yt-subscription-button-disabled-mask" title=""></span>
  
  <div class="yt-uix-overlay " data-overlay-style="primary" data-overlay-shape="tiny">
    
        <div class="yt-dialog hid">
    <div class="yt-dialog-base">
      <span class="yt-dialog-align"></span>
      <div class="yt-dialog-fg">
        <div class="yt-dialog-fg-content">
            <div class="yt-dialog-header">
              <h2 class="yt-dialog-title">
                      Abonelik tercihleri


              </h2>
            </div>
          <div class="yt-dialog-loading">
              <div class="yt-dialog-waiting-content">
    <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Yükleniyor...</div>
  </div>

          </div>
          <div class="yt-dialog-content">
              <div class="subscription-preferences-overlay-content-container">
    <div class="subscription-preferences-overlay-loading ">
        <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

    </div>
    <div class="subscription-preferences-overlay-content">
    </div>
  </div>

          </div>
          <div class="yt-dialog-working">
              <div id="yt-dialog-working-overlay">
  </div>
  <div id="yt-dialog-working-bubble">
    <div class="yt-dialog-waiting-content">
      <div class="yt-spinner-img"></div><div class="yt-dialog-waiting-text">Çalışıyor...</div>
    </div>
  </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  </div>

</span></span><div id="watch7-views-info">      <span class="watch-view-count ">
    19.055.408
  </span>

    <div class="video-extras-sparkbars">
    <div class="video-extras-sparkbar-likes" style="width: 97.3247100377%"></div>
    <div class="video-extras-sparkbar-dislikes" style="width: 2.67528996229%"></div>
  </div>
  <span class="video-extras-likes-dislikes">
      <img class="icon-watch-stats-like" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Beğenen">
  <span class="likes-count">40.781</span>
 &nbsp;&nbsp;&nbsp;   <img class="icon-watch-stats-dislike" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Beğenmeyen">
  <span class="dislikes-count">1.121</span>

  </span>

</div></div>
        <div id="watch7-action-buttons" class="clearfix">
    <div id="watch7-sentiment-actions">
      <span id="watch-like-dislike-buttons" class="yt-uix-button-group " data-button-toggle-group="optional"><span class="yt-uix-clickcard"><button id="watch-like" type="button" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip" title="" onclick=";return false;" data-force-position="true" data-position="bottomright" data-unlike-tooltip="Beğenmekten Vazgeç" data-button-toggle="true" data-orientation="vertical" data-like-tooltip="Bunu beğendim" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-like" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
    <span class="yt-uix-button-content">
Beğen 
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">MagazinYerli</span> adlı kullanıcının videosunu beğenmek için Google Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=X5HYUbW4LqmL0AW5roGgDw"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button id="watch-dislike" type="button" class="yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" title="Bunu beğenmedim" onclick=";return false;" data-force-position="true" data-position="bottomright" data-orientation="vertical" data-button-toggle="true" role="button" data-tooltip-text="Bunu beğenmedim">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-dislike" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Bunu beğenmedim" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">MagazinYerli</span> adlı kullanıcının videosunu beğenmemek için Google Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=X5HYUbW4LqmL0AW5roGgDw"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span></span>
    </div>
    <div id="watch7-secondary-actions" class="yt-uix-button-group" data-button-toggle-group="required">
        <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-toggled" type="button" title="" onclick=";return false;" data-trigger-for="action-panel-details" data-button-toggle="true" role="button">    <span class="yt-uix-button-content">
Hakkında 
    </span>
</button>
  </span>

          <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip" type="button" title="" onclick=";return false;" data-trigger-for="action-panel-share" data-button-toggle="true" role="button">    <span class="yt-uix-button-content">
Paylaş 
    </span>
</button>
  </span>

          <span class="yt-uix-clickcard">
    <button class="action-panel-trigger yt-uix-clickcard-target yt-uix-button yt-uix-button-text yt-uix-tooltip" type="button" title="" onclick=";return false;" data-trigger-for="action-panel-none" data-upsell="playlist" data-button-toggle="true" data-orientation="vertical" data-position="bottomleft" role="button">    <span class="yt-uix-button-content">
Ekle 
    </span>
</button>
        <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">MagazinYerli</span> adlı kullanıcının videosunu oynatma listenize eklemek için Google Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=X5HYUbW4LqmL0AW5roGgDw"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>

  </span>

            
  <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" type="button" disabled="True" title="Bu video için istatistikler devre dışı bırakıldı" onclick=";return false;" data-trigger-for="action-panel-stats" data-button-toggle="true" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-stats" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Bu video için istatistikler devre dışı bırakıldı" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>
  </span>


        <span>
    <button class="action-panel-trigger yt-uix-button yt-uix-button-text yt-uix-tooltip yt-uix-button-empty" type="button" title="Bildir" onclick=";return false;" data-trigger-for="action-panel-report" data-button-toggle="true" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-action-panel-report" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Bildir" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>
  </span>

    </div>
  </div>

        <div id="watch7-action-panels" class="yt-uix-button-panel" style="">
      <div id="action-panel-details" class="action-panel-content" data-panel-loaded="true" style="">
    <div id="watch-description" class="yt-uix-expander yt-uix-expander-collapsed yt-uix-button-panel">
      <div id="watch-description-content" class="extra-info">
        <div id="watch-description-clip">
          <p id="watch-uploader-info">
            <strong>Yayınlanma tarihi: <span id="eow-date" class="watch-video-date"> 7 Ara 2012</span>
</strong>
          </p>
          <div id="watch-description-text">
            <p id="eow-description">booking@innaofficial.com<br><a href="http://www.inna.ro/" target="_blank" title="http://www.inna.ro" rel="nofollow" dir="ltr" class="yt-uix-redirect-link">http://www.inna.ro</a> <br><a href="http://www.facebook.com/Inna" target="_blank" title="http://www.facebook.com/Inna" rel="nofollow" dir="ltr" class="yt-uix-redirect-link">http://www.facebook.com/Inna</a></p>
          </div>
            <div id="watch-description-extras">
    <ul class="watch-extras-section">
      <li>
        <h4 class="title">
Kategori
        </h4>
        <div class="content">
              <p id="eow-category"><a href="http://www.youtube.com/music">Müzik</a></p>

        </div>
      </li>


        <li>
          <h4 class="title">Lisans</h4>
          <div class="content">
              <p id="eow-reuse">
Standart YouTube Lisansı
  </p>

          </div></li>
        
    </ul>
  </div>

        </div>
        <ul id="watch-description-extra-info">
          <li class="">  <span class="metadata-info">
    <span class="metadata-info-title">
Sanatçı<br>
    </span>
      <a href="http://www.youtube.com/artist/inna?feature=watch_metadata">Inna</a>
  </span>
</li>
        </ul>
      </div>

      <div id="watch-description-toggle" class="yt-uix-expander-head yt-uix-button-panel">
        <div id="watch-description-expand" class="expand">
          <button class="metadata-inline yt-uix-button yt-uix-button-text" type="button" onclick=";return false;" role="button">    <span class="yt-uix-button-content">
Daha fazla göster 
    </span>
</button>
        </div>
        <div id="watch-description-collapse" class="collapse">
          <button class="metadata-inline yt-uix-button yt-uix-button-text" type="button" onclick=";return false;" role="button">    <span class="yt-uix-button-content">
Daha az göster 
    </span>
</button>
        </div>
      </div>
    </div>
  </div>

      <div id="action-panel-share" class="action-panel-content hid" data-panel-loaded="true" style="display: none;">
      <div id="watch-actions-share-loading" class="hid" style="display: none;">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

    </div>
  </div>
  <div id="watch-actions-share-panel">  <div class="share-panel">
      <div id="share-panel-buttons" class="share-panel-buttons">
    <span class="share-panel-main-buttons yt-uix-button-group" data-button-toggle-group="share-panels">
<button onclick=";return false;" type="button" class="share-panel-services yt-uix-button yt-uix-button-text yt-uix-button-toggled" data-button-toggle="true" role="button">    <span class="yt-uix-button-content">
Bu videoyu paylaş 
    </span>
</button><button onclick=";return false;" type="button" class="share-panel-embed yt-uix-button yt-uix-button-text" data-button-toggle="true" role="button">    <span class="yt-uix-button-content">
Ekle 
    </span>
</button><button onclick=";return false;" type="button" class="share-panel-email yt-uix-button yt-uix-button-text" data-button-toggle="true" role="button">    <span class="yt-uix-button-content">
E-posta gönder 
    </span>
</button><button onclick=";return false;" type="button" class="share-panel-hangout yt-uix-button yt-uix-button-text" role="button">    <span class="yt-uix-button-content">
Video görüşmesi<span id="hangout-popout-icon"></span> 
    </span>
</button>    </span>
  </div>


    <div class="share-panel-services-container" style="">
        <div id="share-services-container">
                    <div class="share-panel-services">
    <ul class="share-group ytg-box">
          <li>
    <button onclick="yt.tracking.shareVideo(&quot;FACEBOOK&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.facebook.com\/dialog\/feed?app_id=87741124305\u0026link=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026display=popup\u0026redirect_uri=https%3A%2F%2Fwww.youtube.com%2Ffacebook_redirect&quot;, {&#39;height&#39;: 306,&#39;width&#39;: 650,&#39;scrollbars&#39;: true});return false;" data-service-name="FACEBOOK" title="Facebook ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Facebook" class="share-service-icon share-service-icon-facebook">
      <span>Facebook</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;TWITTER&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/twitter.com\/intent\/tweet?url=http%3A%2F%2Fyoutu.be%2FhYaRoS71Mf8\u0026text=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29%3A\u0026via=youtube\u0026related=Youtube%2CYouTubeTrends%2CYTCreators&quot;, {&#39;height&#39;: 450,&#39;width&#39;: 700,&#39;scrollbars&#39;: true});return false;" data-service-name="TWITTER" title="Twitter ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Twitter" class="share-service-icon share-service-icon-twitter">
      <span>Twitter</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;GOOGLEPLUS&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;https:\/\/plus.google.com\/share?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026source=yt\u0026hl=tr&quot;, {&#39;height&#39;: 620,&#39;width&#39;: 620,&#39;scrollbars&#39;: true});return false;" data-service-name="GOOGLEPLUS" title="Google+ ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Google+" class="share-service-icon share-service-icon-googleplus">
      <span>Google+</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;TUMBLR&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.tumblr.com\/share?v=3\u0026u=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare&quot;, {&#39;height&#39;: 650,&#39;width&#39;: 1024,&#39;scrollbars&#39;: true});return false;" data-service-name="TUMBLR" title="tumblr. ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="tumblr." class="share-service-icon share-service-icon-tumblr">
      <span>tumblr.</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;PINTEREST&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot; http:\/\/pinterest.com\/pin\/create\/button\/?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026description=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29\u0026is_video=true\u0026media=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FhYaRoS71Mf8%2Fhqdefault.jpg&quot;, {&#39;height&#39;: 650,&#39;width&#39;: 1024,&#39;scrollbars&#39;: true});return false;" data-service-name="PINTEREST" title="Pinterest ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Pinterest" class="share-service-icon share-service-icon-pinterest">
      <span>Pinterest</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;BLOGGER&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.blogger.com\/blog-this.g?n=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29\u0026source=youtube\u0026b=%3Ciframe+width%3D%22480%22+height%3D%22270%22+src%3D%22%2F%2Fwww.youtube.com%2Fembed%2FhYaRoS71Mf8%22+frameborder%3D%220%22+allowfullscreen%3E%3C%2Fiframe%3E\u0026eurl=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FhYaRoS71Mf8%2Fhqdefault.jpg&quot;, {&#39;height&#39;: 468,&#39;width&#39;: 768,&#39;scrollbars&#39;: true});return false;" data-service-name="BLOGGER" title="Blogger ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Blogger" class="share-service-icon share-service-icon-blogger">
      <span>Blogger</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;STUMBLEUPON&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.stumbleupon.com\/submit?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026title=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29&quot;, {&#39;height&#39;: 650,&#39;width&#39;: 1024,&#39;scrollbars&#39;: true});return false;" data-service-name="STUMBLEUPON" title="StumbleUpon ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="StumbleUpon" class="share-service-icon share-service-icon-stumbleupon">
      <span>StumbleUpon</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;LINKEDIN&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.linkedin.com\/shareArticle?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026title=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29\u0026summary=booking%40innaofficial.com%0Ahttp%3A%2F%2Fwww.inna.ro+%0Ahttp%3A%2F%2Fwww.facebook.com%2FInna\u0026source=Youtube&quot;, {&#39;height&#39;: 650,&#39;width&#39;: 1024,&#39;scrollbars&#39;: true});return false;" data-service-name="LINKEDIN" title="LinkedIn ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="LinkedIn" class="share-service-icon share-service-icon-linkedin">
      <span>LinkedIn</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;MYSPACE&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/www.myspace.com\/Modules\/PostTo\/Pages\/?t=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29\u0026u=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026l=1&quot;, {&#39;height&#39;: 650,&#39;width&#39;: 1024,&#39;scrollbars&#39;: true});return false;" data-service-name="MYSPACE" title="Myspace ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Myspace" class="share-service-icon share-service-icon-myspace">
      <span>Myspace</span>
    </button>
  </li>

          <li>
    <button onclick="yt.tracking.shareVideo(&quot;REDDIT&quot;, &quot;hYaRoS71Mf8&quot;,&quot;tr_TR&quot;, &quot;sharepanel&quot;);yt.window.popup(&quot;http:\/\/reddit.com\/submit?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DhYaRoS71Mf8%26feature%3Dshare\u0026title=INNA+-+INNdiA+%28Rock+the+Roof+%40+Istanbul%29&quot;, {&#39;height&#39;: 650,&#39;width&#39;: 1024,&#39;scrollbars&#39;: true});return false;" data-service-name="REDDIT" title="reddit ortamında paylaş" class="yt-uix-tooltip share-service-button">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="reddit" class="share-service-icon share-service-icon-reddit">
      <span>reddit</span>
    </button>
  </li>

    </ul>

  </div>



        </div>
      <div class="share-panel-url-container share-panel-reverse">
        <span class="share-panel-url-input-container yt-uix-form-input-container yt-uix-form-input-text-container  yt-uix-form-input-non-empty">    <input class="yt-uix-form-input-text yt-uix-form-input-text share-panel-url" name="share_url" value="http://youtu.be/hYaRoS71Mf8" data-video-id="hYaRoS71Mf8">
</span>
        <div class="share-panel-start-at-container ">
          <label>
            <span class="yt-uix-form-input-checkbox-container">
              <input class="share-panel-start-at" type="checkbox">
              <span class="yt-uix-form-input-checkbox-element"></span>
            </span>
Başlangıç:
          </label>
          <input type="text" value="0:00" class="yt-uix-form-input-text share-panel-start-at-time">
        </div>
      </div>
    </div>

      <div class="share-panel-embed-container hid" style="display: none;">
  <textarea class="yt-uix-form-input-textarea share-embed-code" onkeydown="if ((event.ctrlKey || event.metaKey) &amp;&amp; event.keyCode == 67) { yt.tracking.track(&#39;embedCodeCopied&#39;); }" dir="ltr" style="margin-top: 0px; margin-bottom: 0px; height: 180px;">&lt;object width="560" height="315"&gt;&lt;param name="movie" value="//www.youtube.com/v/hYaRoS71Mf8?version=3&amp;amp;hl=tr_TR"&gt;&lt;/param&gt;&lt;param name="allowFullScreen" value="true"&gt;&lt;/param&gt;&lt;param name="allowscriptaccess" value="always"&gt;&lt;/param&gt;&lt;embed src="//www.youtube.com/v/hYaRoS71Mf8?version=3&amp;amp;hl=tr_TR" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"&gt;&lt;/embed&gt;&lt;/object&gt;</textarea>

  <div class="share-size-options">
    <label for="embed-layout-options">Video boyutu:</label>
    <span class="yt-uix-form-input-select"><span class="yt-uix-form-input-select-content"><img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-uix-form-input-select-arrow"><span class="yt-uix-form-input-select-value">560 × 315</span></span><select class="yt-uix-form-input-select-element " id="embed-layout-options">    <option value="default" data-width="560" data-height="315">560 × 315</option>
    <option value="medium" data-width="640" data-height="360">640 × 360</option>
    <option value="large" data-width="853" data-height="480">853 × 480</option>
    <option value="hd720" data-width="1280" data-height="720">1280 × 720</option>
  <option value="custom">Özel boyut</option>
</select></span>
    <span id="share-embed-customize" class="hid">
      <input type="text" class="yt-uix-form-input-text share-embed-size-custom-width" maxlength="4">
      ×
      <input type="text" class="yt-uix-form-input-text share-embed-size-custom-height" maxlength="4">
    </span>
  </div>

  <ul class="share-embed-options">
      <li>
        <label>
          <input type="checkbox" class="share-embed-option" name="show-related" checked="">
Video bittiğinde önerilen videoları göster
        </label>
      </li>
    <li>
      <label>
        <input type="checkbox" class="share-embed-option" name="delayed-cookies">
Gizlilik geliştirilmiş modunu etkinleştir
        [<a href="http://www.google.com/support/youtube/bin/answer.py?answer=171780&expand=PrivacyEnhancedMode#privacy" target="_blank">?</a>]
      </label>
    </li>
      <li>
        <label>
          <input type="checkbox" class="share-embed-option" name="use-flash-code">
Eski yerleştirme kodunu kullan
          [<a href="http://www.google.com/support/youtube/bin/answer.py?answer=171780&expand=UseOldEmbedCode#oldcode" target="_blank">?</a>]
        </label>
      </li>
  </ul>
</div>


        <div class="share-panel-email-container hid" data-disabled="true">
        <strong>Şimdi <a href="https://accounts.google.com/ServiceLogin?hl=tr_TR&continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Demail%26hl%3Dtr_TR%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DhYaRoS71Mf8%2526feature%253Dshare_email%26nomobiletemp%3D1&passive=true&service=youtube&uilel=3">oturum açın</a>!
</strong>

  </div>

  </div>
</div>

  </div>

      <div id="action-panel-addto" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-stats" class="action-panel-content hid">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-report" class="action-panel-content hid" data-auth-required="true">
    <div class="action-panel-loading">
        <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

    </div>
  </div>

      <div id="action-panel-login" class="action-panel-content hid">
    <div class="action-panel-login">
      <a href="https://accounts.google.com/ServiceLogin?passive=true&continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3D__FEATURE__%26hl%3Dtr_TR%26next%3D%252Fwatch%253Fv%253DhYaRoS71Mf8%26nomobiletemp%3D1&service=youtube&uilel=3&hl=tr_TR" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=X5HYUbW4LqmL0AW5roGgDw"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>

  <div id="action-panel-ratings-disabled" class="action-panel-content hid">
      <div id="watch-actions-ratings-disabled" class="watch-actions-panel">
    <em>Bu video için oylama devre dışı bırakıldı.</em>
  </div>

  </div>

  <div id="action-panel-rental-required" class="action-panel-content hid">
      <div id="watch-actions-rental-required" class="watch-actions-panel">
    <strong>Video kiralandığında oy verilebilir.</strong>
  </div>

  </div>

  <div id="action-panel-error" class="action-panel-content hid">
    <div class="action-panel-error">
      Bu özellik şu anda kullanılamıyor. Lütfen daha sonra yeniden deneyin.
    </div>
  </div>

    <div id="watch7-action-panel-footer">
        <hr class="yt-horizontal-rule ">

    </div>
  </div>

  </div>
      <div id="watch-discussion">      
        <div id="comments-view" data-type="highlights" class="">

                  <h4>
          <strong>En Beğenilen Yorumlar</strong>

  </h4>

    <ul>
      


  <li class="comment" data-tag="top" data-author-id="GX5kRAZksvX8oAmOn7ctVw" data-id="Hm8a3vXbSTWBVjQ_VGOL2NsVEsv_n8---HH09V-qDRg" data-score="54">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/user/HQGamingTR" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="//i1.ytimg.com/i/GX5kRAZksvX8oAmOn7ctVw/1.jpg" src="./cod3r_files/1(1).jpg" alt="HQGamingTR" width="48" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/user/HQGamingTR" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">HQGamingTR</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTWBVjQ_VGOL2NsVEsv_n8---HH09V-qDRg">
              11 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Bazen Sadece Çatı Olmak İstersin;</p>
<p>Murat Gilin Damı Aklına Gelir Haline Şükredersin :D﻿</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>

      <span class="comments-rating-positive" title="56 kişi beğendi, 2 kişi beğenmedi">
        54
      </span>

    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">HQGamingTR</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">HQGamingTR</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-tag="top" data-author-id="JiDQ8rjkxanS68ZzNK1nxA" data-id="Hm8a3vXbSTWN8VFWPc_q5U16E64eEOhLcU6Oo3kmvR4" data-score="31">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UCJiDQ8rjkxanS68ZzNK1nxA" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp5.googleusercontent.com/-FhFN7J3q7Tk/AAAAAAAAAAI/AAAAAAAAAAA/5dKYFaOscpM/s48-c-k/photo.jpg" src="./cod3r_files/photo.jpg" alt="Yusuf Öztürk" width="48" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UCJiDQ8rjkxanS68ZzNK1nxA" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Yusuf Öztürk</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTWN8VFWPc_q5U16E64eEOhLcU6Oo3kmvR4">
              10 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p><a href="http://www.youtube.com/watch?v=hYaRoS71Mf8#" onclick="yt.www.watch.player.seekTo(0*60+02);return false;">0:02</a> ve﻿ bizim ev ünlüyüm :D</p>
<p></p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>

      <span class="comments-rating-positive" title="32 kişi beğendi, 1 kişi beğenmedi">
        31
      </span>

    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Yusuf Öztürk</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Yusuf Öztürk</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

  </ul>


      <hr>
        <div>
      <h4>
      <a href="http://www.youtube.com/all_comments?v=hYaRoS71Mf8">
            <strong>Tüm Yorumlar</strong> (15.817)

      </a>
  </h4>


          <div class="comments-post-alert comments-post">
        Yorum yazmak için hemen şimdi <a href="https://accounts.google.com/ServiceLogin?service=youtube&continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dcomments%26hl%3Dtr_TR%26next%3Dhttp%253A%252F%252Fwww.youtube.com%252Fwatch%253Fv%253DhYaRoS71Mf8%26nomobiletemp%3D1&uilel=3&hl=tr_TR&passive=true">oturum açın</a>!

      </div>


      <ul id="all-comments">
      


  <li class="comment" data-author-id="5jjoqlhCjgNtezIFdQpjeg" data-id="Hm8a3vXbSTWDVTv5Yd3EogW-BHLbHnyzuOEz3TGJI-M">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UC5jjoqlhCjgNtezIFdQpjeg" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp3.googleusercontent.com/-zjYDlcMwYNg/AAAAAAAAAAI/AAAAAAAAAAA/Ud2zyaZF7Ag/s48-c-k/photo.jpg" src="./cod3r_files/photo(1).jpg" alt="redouane merabet" width="48" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UC5jjoqlhCjgNtezIFdQpjeg" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">redouane merabet</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTWDVTv5Yd3EogW-BHLbHnyzuOEz3TGJI-M">
              8 dakika önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>&lt;3﻿ &lt;3 &lt;3 nic inna</p>
<p></p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">redouane merabet</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">redouane merabet</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="eD1FKgvp5Smc8jIxQNRJMA" data-id="Hm8a3vXbSTXgG7BgG7CtNnqK4OhhJKaI8NAtFWPVTFs">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UCeD1FKgvp5Smc8jIxQNRJMA" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp5.googleusercontent.com/-hDtipHV5cVE/AAAAAAAAAAI/AAAAAAAAAAA/rnfxXOHVar8/s48-c-k/photo.jpg" src="./cod3r_files/photo(2).jpg" alt="Andreea Maria Carmen" width="48" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UCeD1FKgvp5Smc8jIxQNRJMA" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Andreea Maria Carmen</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTXgG7BgG7CtNnqK4OhhJKaI8NAtFWPVTFs">
              12 dakika önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>19.055.408﻿</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Andreea Maria Carmen</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Andreea Maria Carmen</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="g8F5jbLm26i8Q_glqmQl4Q" data-id="Hm8a3vXbSTXaw-IL2cn6g5VsZ2haz1Kthqk3Odo8xmQ" data-score="2">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UCg8F5jbLm26i8Q_glqmQl4Q" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp4.googleusercontent.com/-kAh_zAKwm68/AAAAAAAAAAI/AAAAAAAAAAA/ibQtsPzSVCU/s48-c-k/photo.jpg" src="./cod3r_files/photo(3).jpg" alt="furkan konuşkan" width="48" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UCg8F5jbLm26i8Q_glqmQl4Q" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">furkan konuşkan</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTXaw-IL2cn6g5VsZ2haz1Kthqk3Odo8xmQ">
              57 dakika önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>3.52 bizim﻿ dam üblü oldum :D</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>

      <span class="comments-rating-positive" title="2 kişi beğendi, 0 kişi beğenmedi">
        2
      </span>

    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">furkan konuşkan</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">furkan konuşkan</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="40T-imcEcyxbh2np8aKBnQ" data-id="Hm8a3vXbSTVWo7cBy2Yd3-kGLGu1e_trmsme93y-Xbc">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/user/xFerooHD" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp6.googleusercontent.com/-2GzwTF1fwP0/AAAAAAAAAAI/AAAAAAAAAAA/COeyi6tykPE/s48-c-k/photo.jpg" src="./cod3r_files/photo(4).jpg" alt="xFerooHD" width="48" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/user/xFerooHD" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">xFerooHD</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTVWo7cBy2Yd3-kGLGu1e_trmsme93y-Xbc">
              1 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>when﻿ i miss my country, i listen to this song, and i see 2 beautiful things inna and Istanbul &lt;3</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">xFerooHD</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">xFerooHD</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="O0tIMqu6zir4cByZ4Tvr6A" data-id="Hm8a3vXbSTWjeqOxrPAg_jXJPWazeY2z84zFfmcRC_U">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UCO0tIMqu6zir4cByZ4Tvr6A" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp6.googleusercontent.com/-q33hr93HerY/AAAAAAAAAAI/AAAAAAAAAAA/yfCLKkdJhHg/s48-c-k/photo.jpg" src="./cod3r_files/photo(5).jpg" alt="Anabel Escalante" width="48" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UCO0tIMqu6zir4cByZ4Tvr6A" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Anabel Escalante</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTWjeqOxrPAg_jXJPWazeY2z84zFfmcRC_U">
              1 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>=)﻿ =) =)</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Anabel Escalante</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Anabel Escalante</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
<a href="http://www.youtube.com/channel/UCesApETS5nwBXUI2yQASmJw" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">yaşarcan kavlak</a> için yanıt olarak
      <a href="http://www.youtube.com/watch?v=hYaRoS71Mf8#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Yorumu göster)</a>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="_wo048D7umIBQnm4LP5MqQ" data-id="Hm8a3vXbSTXCvthxSKrdn7KOMgB0P9h-1QKx4KJiiKg">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UC_wo048D7umIBQnm4LP5MqQ" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp4.googleusercontent.com/-uFfv3gL9dmw/AAAAAAAAAAI/AAAAAAAAAAA/Ovw4WCwvCYQ/s48-c-k/photo.jpg" src="./cod3r_files/photo(6).jpg" alt="Ozlem Mrs" width="48" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UC_wo048D7umIBQnm4LP5MqQ" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Ozlem Mrs</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTXCvthxSKrdn7KOMgB0P9h-1QKx4KJiiKg">
              1 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Saci﻿ özensiz üstündekiler iyi :)</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Ozlem Mrs</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Ozlem Mrs</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="6DQCFU1QkxU_PWYdRTijYw" data-id="Hm8a3vXbSTWz1c-C_drnSO3VvCLStoDSkDwSHTzobgw">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UC6DQCFU1QkxU_PWYdRTijYw" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp3.googleusercontent.com/-oxB3e23DUdw/AAAAAAAAAAI/AAAAAAAAAAA/Jqabt5fsuSM/s48-c-k/photo.jpg" src="./cod3r_files/photo(7).jpg" alt="Abdullah ÇİMEN" width="48" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UC6DQCFU1QkxU_PWYdRTijYw" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Abdullah ÇİMEN</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTWz1c-C_drnSO3VvCLStoDSkDwSHTzobgw">
              1 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>sana﻿ vermek için İstanbul da çekmiş ama seni bulamamış :)</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Abdullah ÇİMEN</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Abdullah ÇİMEN</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
<a href="http://www.youtube.com/channel/UCwx5kQLYOhcMmxBIU9WkadQ" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Uygar Cem</a> için yanıt olarak
      <a href="http://www.youtube.com/watch?v=hYaRoS71Mf8#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Yorumu göster)</a>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="crK20PMnHlTJwAOnfx0JgQ" data-id="Hm8a3vXbSTWM8ki_Y6UZXdGL36C8_SLvIZouHU1riu4">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UCcrK20PMnHlTJwAOnfx0JgQ" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp5.googleusercontent.com/-ZhcetGzAtTg/AAAAAAAAAAI/AAAAAAAAAAA/UkBR749Zrrc/s48-c-k/photo.jpg" src="./cod3r_files/photo(8).jpg" alt="Ertugrul Bolat" width="48" data-group-key="thumb-group-3">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UCcrK20PMnHlTJwAOnfx0JgQ" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Ertugrul Bolat</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTWM8ki_Y6UZXdGL36C8_SLvIZouHU1riu4">
              1 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Tecavüze﻿ uğramasın diye çatıda çekmişler</p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Ertugrul Bolat</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Ertugrul Bolat</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
  </div>

  </div>


  </li>

      


  <li class="comment" data-author-id="cm8hRZIMk_YAic4ut3xBiQ" data-id="Hm8a3vXbSTVIfFGQmWTGNvvGaqXkQ6odZm4D0cRs0II" data-score="1">
    <button type="button" class="flip close yt-uix-button yt-uix-button-link yt-uix-button-empty" onclick=";return false;" data-button-has-sibling-menu="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-comment-close" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""><div class=" yt-uix-button-menu yt-uix-button-menu-link" style="display: none;"><ul><li class="comment-action-remove comment-action" data-action="remove"><span class="yt-uix-button-menu-item">Kaldır</span></li><li class="comment-action" data-action="flag-profile-pic"><span class="yt-uix-button-menu-item">Profil resmini bildir</span></li><li class="comment-action" data-action="flag"><span class="yt-uix-button-menu-item">Spam olarak işaretle</span></li><li class="comment-action-block comment-action" data-action="block"><span class="yt-uix-button-menu-item">Kullanıcıyı Engelle</span></li><li class="comment-action-unblock comment-action" data-action="unblock"><span class="yt-uix-button-menu-item">Kullanıcının Engellemesini Kaldır</span></li></ul></div></button>
      <a href="http://www.youtube.com/channel/UCcm8hRZIMk_YAic4ut3xBiQ" class="yt-user-photo ">    <span class="video-thumb  yt-thumb yt-thumb-48">
      <span class="yt-thumb-square">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img data-thumb="https://gp6.googleusercontent.com/-1o_ymzzv6Fg/AAAAAAAAAAI/AAAAAAAAAAA/VOei8AH1eDk/s48-c-k/photo.jpg" src="./cod3r_files/photo(9).jpg" alt="Feel Good" width="48" data-group-key="thumb-group-3">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
</a>

    

  <div class="content">
      <p class="metadata">
        <span class="author ">
          <a href="http://www.youtube.com/channel/UCcm8hRZIMk_YAic4ut3xBiQ" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Feel Good</a>
        </span>
          <span class="time" dir="ltr">
            <a dir="ltr" href="http://www.youtube.com/comment?lc=Hm8a3vXbSTVIfFGQmWTGNvvGaqXkQ6odZm4D0cRs0II">
              1 saat önce
            </a>
          </span>
      </p>


      <div class="comment-text" dir="ltr">
        <p>Acaba neden kardeş ya?﻿ </p>

      </div>
      
  <div class="comment-actions">
    <button type="button" class="start comment-action yt-uix-button yt-uix-button-link" onclick=";return false;" data-action="reply" role="button">    <span class="yt-uix-button-content">
Yanıtla 
    </span>
</button>
    <span class="separator">·</span>


    <span class="yt-uix-clickcard"><button title="" type="button" class="start comment-action-vote-up comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-up" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Feel Good</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span><span class="yt-uix-clickcard"><button title="" type="button" class="end comment-action-vote-down comment-action yt-uix-clickcard-target yt-uix-button yt-uix-button-link yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" data-tooltip-show-delay="300" data-action="" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-watch-comment-vote-down" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
</button>  <div class="watch7-hovercard yt-uix-clickcard-content">
    <h3 class="watch7-hovercard-header">YouTube'da Oturum Açın</h3>
    <div class="watch7-hovercard-message">
      <span class="yt-user-name " dir="ltr">Feel Good</span> adlı kullanıcının yorumuna oy vermek için YouTube Hesabınızla (YouTube, Google+, Gmail, Orkut, Picasa veya Chrome) oturum açın.

    </div>
    <ul class="watch7-hovercard-icon-strip clearfix">
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-youtube-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gplus-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-gmail-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-picasa-icon"></div>
      </li>
      <li class="watch7-hovercard-icon">
        <div class="watch7-hovercard-chrome-icon"></div>
      </li>
    </ul>
    <div class="watch7-hovercard-account-line">
      <a href="/" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-primary" data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg"><span class="yt-uix-button-content">Oturum aç</span></a>
    </div>
  </div>
</span>
<a href="http://www.youtube.com/channel/UCGHH_bRfUroQIp2gUvP_Vmw" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=Q5LYUYvqGIK60QXB5YGQAg" dir="ltr">Emir Kaya</a> için yanıt olarak
      <a href="http://www.youtube.com/watch?v=hYaRoS71Mf8#" class="comment-action comment-action-showparent" onclick="return false;" data-action="show-parent">(Yorumu göster)</a>
  </div>

  </div>


  </li>

  </ul>

  </div>




    <ul>
      <li class="hid" id="parent-comment-loading">Yorum yükleniyor...</li>
    </ul>
  </div>
  <div id="comments-loading" class="hid">Yükleniyor...</div>
        <div class="comments-pagination" data-ajax-enabled="true">
        <button type="button" class="yt-uix-pager-button yt-uix-pager-show-more yt-uix-button yt-uix-button-default" onclick=";return false;" role="button">    <span class="yt-uix-button-content">
Daha fazla göster 
    </span>
</button>
    </div>



</div>



        </div>
        <div id="watch7-sidebar" class="watch-sidebar ">
            
    <div id="watch7-sidebar-discussion"></div>



          <div class="watch-sidebar-section">

    <div class="watch-sidebar-body">
      <ul id="watch-related" class="video-list">
        <li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=RDCQkzHZUnI&list=RD24hYaRoS71Mf8" class="related-playlist yt-pl-thumb-link  yt-uix-sessionlink" data-sessionlink="ved=CAQQzhooAA&amp;feature=list_other&amp;ei=X5HYUbW4LqmL0AW5roGgDw">  <span class="yt-pl-thumb  is-small">
                <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default.jpg" alt="Küçük resim" data-thumb="//i1.ytimg.com/vi/RDCQkzHZUnI/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>



    <span class="sidebar">
      <span class="video-count-wrapper yt-valign">
        <span class="yt-valign-trick"></span>
        <span class="video-count-block yt-valign-container">
          <span class="count-label">
            49
          </span>
          <span class="text-label">
            video
          </span>
        </span>
      </span>
      <span class="side-thumbs">
          <span class="sidethumb ">
                      <span class="video-thumb  yt-thumb yt-thumb-43">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(1).jpg" alt="Küçük resim" data-thumb="//i1.ytimg.com/vi/QK8mJJJvaes/default.jpg" width="43" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>


          </span>
          <span class="sidethumb ">
                      <span class="video-thumb  yt-thumb yt-thumb-43">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(2).jpg" alt="Küçük resim" data-thumb="//i1.ytimg.com/vi/tiay4b5Wna8/default.jpg" width="43" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>


          </span>
          <span class="sidethumb  columns-support-required">
                      <span class="video-thumb  yt-thumb yt-thumb-43">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(3).jpg" alt="Küçük resim" data-thumb="//i1.ytimg.com/vi/lWA2pjMjpBs/default.jpg" width="43" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>


          </span>
          <span class="sidethumb  columns-support-required">
                      <span class="video-thumb  yt-thumb yt-thumb-43">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(4).jpg" alt="Küçük resim" data-thumb="//i1.ytimg.com/vi/kYtGl1dX5qI/default.jpg" width="43" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>


          </span>
      </span>
    </span>
      <span class="yt-pl-thumb-overlay">
        <span class="yt-pl-thumb-overlay-content">
          <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="">
Tümünü oynat
        </span>
      </span>
  </span>
<span dir="ltr" class="title" title="YouTube Mix&#39;i">YouTube Mix'i</span></a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=ASO_zypdnsQ" class="related-video yt-uix-contextlink related-video-featured yt-uix-sessionlink" data-sessionlink="ved=CAUQzRooAQ&amp;feature=fvwrel&amp;ei=X5HYUbW4LqmL0AW5roGgDw" style=""><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(5).jpg" alt="" data-thumb="//i1.ytimg.com/vi/ASO_zypdnsQ/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:54</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="ASO_zypdnsQ" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="PSY - GENTLEMAN M/V">PSY - GENTLEMAN M/V</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">officialpsy</span></span><span class="stat alt badge"><span class="yt-badge ">Öne Çıkanlar</span></span>    <span class="stat view-count">
        465.920.020
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=RDCQkzHZUnI" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAYQzRooAg&amp;feature=relmfu&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default.jpg" alt="" data-thumb="//i1.ytimg.com/vi/RDCQkzHZUnI/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">2:22</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="RDCQkzHZUnI" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA - Caliente (Rock the Roof @ Mexico City)">INNA - Caliente (Rock the Roof @ Mexico City)</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">MagazinYerli</span></span>    <span class="stat view-count">
        
1.595.798 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=AJJNDvXPIBs" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAcQzRooAw&amp;feature=relmfu&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(6).jpg" alt="" data-thumb="//i1.ytimg.com/vi/AJJNDvXPIBs/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">2:23</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="AJJNDvXPIBs" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA - INNdiA (Live @ Kiss FM Romania)">INNA - INNdiA (Live @ Kiss FM Romania)</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">MagazinYerli</span></span>    <span class="stat view-count">
        
72.431 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=zsjJvN7rWco" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAgQzRooBA&amp;feature=relmfu&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(7).jpg" alt="" data-thumb="//i1.ytimg.com/vi/zsjJvN7rWco/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:21</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="zsjJvN7rWco" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA  - Mai Frumoasa - Laura Stoica Cover (Rock the Roof @ Paris)">INNA  - Mai Frumoasa - Laura Stoica Cover (Rock the Roof @ Paris)</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">MagazinYerli</span></span>    <span class="stat view-count">
        
1.245.966 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=8ShDEEGcV4k" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAkQzRooBQ&amp;feature=relmfu&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(8).jpg" alt="" data-thumb="//i1.ytimg.com/vi/8ShDEEGcV4k/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:26</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="8ShDEEGcV4k" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA - Amazing ( Official Video )">INNA - Amazing ( Official Video )</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">MagazinYerli</span></span>    <span class="stat view-count">
        
18.078.385 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=9LK48dtjRl4" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAoQzRooBg&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(9).jpg" alt="" data-thumb="//i1.ytimg.com/vi/9LK48dtjRl4/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">4:53</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="9LK48dtjRl4" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA - Wow (OFFICIAL VIDEO)">INNA - Wow (OFFICIAL VIDEO)</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">diymg</span></span>    <span class="stat view-count">
        
11.366.486 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=hfsfUWjDOsI" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAsQzRooBw&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(10).jpg" alt="" data-thumb="//i1.ytimg.com/vi/hfsfUWjDOsI/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:30</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="hfsfUWjDOsI" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Saat 03.00 (Bengü)">Saat 03.00 (Bengü)</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">muyap</span></span>    <span class="stat view-count">
        
631.053 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=nxzCqd4rW4I" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CAwQzRooCA&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(11).jpg" alt="" data-thumb="//i1.ytimg.com/vi/nxzCqd4rW4I/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">1:22:39</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="nxzCqd4rW4I" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Komedi Dükkanı - 19. Bölüm - Tek Parça Komedi Dükkanı  Tek Parça">Komedi Dükkanı - 19. Bölüm - Tek Parça Komedi Dükkanı  Tek Parça</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">DiziOnlineTV</span></span>    <span class="stat view-count">
        
28.230 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=idAotdJYcdE" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CA0QzRooCQ&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(12).jpg" alt="" data-thumb="//i1.ytimg.com/vi/idAotdJYcdE/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:06</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="idAotdJYcdE" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Bu MüzikKKKKk Krizzzzlikkk kop kop">Bu MüzikKKKKk Krizzzzlikkk kop kop</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">halill18</span></span>    <span class="stat view-count">
        
2.177.426 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=-9q48Sj4D0A" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CA4QzRooCg&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(13).jpg" alt="" data-thumb="//i1.ytimg.com/vi/-9q48Sj4D0A/default.jpg" width="120" data-group-key="thumb-group-0">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">1:20</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="-9q48Sj4D0A" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Bir kıza nasıl çıkma teklifi edersin">Bir kıza nasıl çıkma teklifi edersin</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">Sertaç Atila</span></span>    <span class="stat view-count">
        
486.626 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=_q1dLvWASkU" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CA8QzRooCw&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(14).jpg" alt="" data-thumb="//i1.ytimg.com/vi/_q1dLvWASkU/default.jpg" width="120" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">4:49</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="_q1dLvWASkU" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Kavak Yelleri Final Şarkısı">Kavak Yelleri Final Şarkısı</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">hasancebi82</span></span>    <span class="stat view-count">
        
1.960.976 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=H5ccmKYMfQQ" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBAQzRooDA&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(15).jpg" alt="" data-thumb="//i1.ytimg.com/vi/H5ccmKYMfQQ/default.jpg" width="120" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">2:22</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="H5ccmKYMfQQ" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA - Un Momento (Rock The ROOF - Mexico City).flv">INNA - Un Momento (Rock The ROOF - Mexico City).flv</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">pedro jose macena</span></span>    <span class="stat view-count">
        
222.973 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=UTtAnZm-hMs" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBEQzRooDQ&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(16).jpg" alt="" data-thumb="//i1.ytimg.com/vi/UTtAnZm-hMs/default.jpg" width="120" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:39</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="UTtAnZm-hMs" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="INNA - WOW (official video) HD">INNA - WOW (official video) HD</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">bedeka10</span></span>    <span class="stat view-count">
        
274.530 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=rVFgrCkrmWs" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBIQzRooDg&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(17).jpg" alt="" data-thumb="//i1.ytimg.com/vi/rVFgrCkrmWs/default.jpg" width="120" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">1:25</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="rVFgrCkrmWs" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Ahmet Kural Bankayı Ararsa">Ahmet Kural Bankayı Ararsa</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">STARTVSTAR</span></span>    <span class="stat view-count">
        
900.782 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=kYtGl1dX5qI" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBMQzRooDw&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(4).jpg" alt="" data-thumb="//i1.ytimg.com/vi/kYtGl1dX5qI/default.jpg" width="120" data-group-key="thumb-group-1">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">4:52</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="kYtGl1dX5qI" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="will.i.am - Scream &amp; Shout ft. Britney Spears">will.i.am - Scream &amp; Shout ft. Britney Spears</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">williamVEVO</span></span>    <span class="stat view-count">
        
256.668.666 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=I5lRLhZ1dkg" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBQQzRooEA&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(18).jpg" alt="" data-thumb="//i1.ytimg.com/vi/I5lRLhZ1dkg/default.jpg" width="120" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">2:55</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="I5lRLhZ1dkg" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Hande Yener - Ya Ya Ya Ya">Hande Yener - Ya Ya Ya Ya</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">PollProductionWeb</span></span>    <span class="stat view-count">
        
16.350.949 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=5fAv9qR6350" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBUQzRooEQ&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(19).jpg" alt="" data-thumb="//i1.ytimg.com/vi/5fAv9qR6350/default.jpg" width="120" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">4:30</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="5fAv9qR6350" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Mustafa Ceceli - Dünya&#39;nın Bütün Sabahları (2012) YENİ PARÇA">Mustafa Ceceli - Dünya'nın Bütün Sabahları (2012) YENİ PARÇA</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">KahramanKENT046</span></span>    <span class="stat view-count">
        
412.771 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=ohv5dVjAAW8" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBYQzRooEg&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(20).jpg" alt="" data-thumb="//i1.ytimg.com/vi/ohv5dVjAAW8/default.jpg" width="120" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">3:49</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="ohv5dVjAAW8" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Toygar ışıklı Ben hayatın mağlubuyum">Toygar ışıklı Ben hayatın mağlubuyum</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">missladygirl33</span></span>    <span class="stat view-count">
        
1.081.939 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=Ngaai9fAWJ4" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBcQzRooEw&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(21).jpg" alt="" data-thumb="//i1.ytimg.com/vi/Ngaai9fAWJ4/default.jpg" width="120" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">5:05</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="Ngaai9fAWJ4" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="Sana Birşey Olmasın (Yonca Lodi)">Sana Birşey Olmasın (Yonca Lodi)</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">muyap</span></span>    <span class="stat view-count">
        
1.674.780 görüntüleme
    </span>
</a></li><li class="video-list-item related-list-item"><a href="http://www.youtube.com/watch?v=pODcK6vOvMM" class="related-video yt-uix-contextlink  yt-uix-sessionlink" data-sessionlink="ved=CBgQzRooFA&amp;feature=related&amp;ei=X5HYUbW4LqmL0AW5roGgDw"><span class="ux-thumb-wrap contains-addto ">    <span class="video-thumb  yt-thumb yt-thumb-120">
      <span class="yt-thumb-default">
        <span class="yt-thumb-clip">
          <span class="yt-thumb-clip-inner">
            <img src="./cod3r_files/default(22).jpg" alt="" data-thumb="//i1.ytimg.com/vi/pODcK6vOvMM/default.jpg" width="120" data-group-key="thumb-group-2">
            <span class="vertical-align"></span>
          </span>
        </span>
      </span>
    </span>
<span class="video-time">4:13</span>

  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" type="button" title="Daha Sonra İzle" onclick=";return false;" data-video-ids="pODcK6vOvMM" data-button-menu-id="shared-addto-watch-later-login" role="button">    <span class="yt-uix-button-content">
  <img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="Daha Sonra İzle">
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>
</span><span dir="ltr" class="title" title="müslüm gürses  yıkıldım sevgilim">müslüm gürses  yıkıldım sevgilim</span><span class="stat attribution">sahibi: <span class="yt-user-name " dir="ltr">Erol Kayran</span></span>    <span class="stat view-count">
        
1.180.817 görüntüleme
    </span>
</a></li>
            <div id="watch-more-related" class="hid">
    <li id="watch-more-related-loading">
Diğer öneriler yükleniyor...
    </li>
  </div>
  <button class=" yt-uix-button yt-uix-button-default" id="watch-more-related-button" type="button" onclick=";return false;" data-button-action="yt.www.watch.related.loadMore" role="button">    <span class="yt-uix-button-content">
Daha fazla öneri yükle 
    </span>
</button>

      </ul>
    </div>   </div> 

        </div>
      </div>
    </div>

      <div style="visibility: hidden; height: 0px; padding: 0px; overflow: hidden;">
      <img src="./cod3r_files/gen_204" border="0" width="1" height="1">
  </div>

  </div>
</div></div></div></div><div id="footer-container"><div id="footer"><div id="footer-main"><div id="footer-logo"><a href="http://www.youtube.com/" title="YouTube ana sayfası"><img src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="YouTube ana sayfası"></a></div>  <ul class="pickers yt-uix-button-group" data-button-toggle-group="optional">
      <li>
          
  <button class=" yt-uix-button yt-uix-button-default" id="yt-picker-language-button" type="button" onclick=";return false;" data-picker-position="footer" data-button-toggle="true" data-picker-key="language" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" role="button">    <span class="yt-uix-button-icon-wrapper">
      <img class="yt-uix-button-icon yt-uix-button-icon-footer-language" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title="">
      <span class="yt-uix-button-valign"></span>
    </span>
    <span class="yt-uix-button-content">
  <span class="yt-picker-button-label">
Dil:
  </span>
  Türkçe
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>


      </li>
      <li>
          
  <button class=" yt-uix-button yt-uix-button-default" id="yt-picker-country-button" type="button" onclick=";return false;" data-picker-position="footer" data-button-toggle="true" data-picker-key="country" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" role="button">    <span class="yt-uix-button-content">
  <span class="yt-picker-button-label">
Ülke:
  </span>
  Türkiye
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>


      </li>
      <li>
          
  <button class=" yt-uix-button yt-uix-button-default" id="yt-picker-safetymode-button" type="button" onclick=";return false;" data-picker-position="footer" data-button-toggle="true" data-picker-key="safetymode" data-button-menu-id="arrow-display" data-button-action="yt.www.picker.load" role="button">    <span class="yt-uix-button-content">
  <span class="yt-picker-button-label">
Güvenlik:
  </span>
Kapalı
 
    </span>
<img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif" alt="" title=""></button>


      </li>
  </ul>
  <button class="yt-uix-button-reverse yt-uix-button yt-uix-button-default" type="button" id="google-help" onclick="yt.www.feedback.startHelp(this, null, &quot;watch&quot;);return false;" role="button">    <span class="yt-uix-button-content">
  <img class="questionmark" src="./cod3r_files/pixel-vfl3z5WfW.gif">
  <span>Yardım</span>
    <img class="yt-uix-button-arrow" src="./cod3r_files/pixel-vfl3z5WfW.gif">
 
    </span>
</button>
      <div id="yt-picker-language-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

  </div>

      <div id="yt-picker-country-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

  </div>

      <div id="yt-picker-safetymode-footer" class="yt-picker" style="display: none">
      <p class="yt-spinner">
      <img src="./cod3r_files/pixel-vfl3z5WfW.gif" class="yt-spinner-img" alt="Yükleme simgesi">

    <span class="yt-spinner-message">
Yükleniyor...
    </span>
  </p>

  </div>

</div><div id="footer-links"><ul id="footer-links-primary">  <li><a href="http://www.youtube.com/yt/about/tr/">Hakkında</a></li>
  <li><a href="http://www.youtube.com/yt/press/tr/">Basın ve Blog'lar</a></li>
  <li><a href="http://www.youtube.com/yt/copyright/tr/">Telif hakkı</a></li>
  <li><a href="http://www.youtube.com/yt/creators/">Yaratıcılar ve İş Ortakları</a></li>
  <li><a href="http://www.youtube.com/yt/advertise/">Reklamcılık</a></li>
  <li><a href="http://www.youtube.com/yt/dev/tr/">Geliştiriciler</a></li>
</ul><ul id="footer-links-secondary">  <li><a href="http://www.youtube.com/t/terms">Şartlar</a></li>
  <li><a href="http://www.google.com.tr/intl/tr/policies/privacy/">Gizlilik</a></li>
  <li><a href="http://www.youtube.com/yt/policyandsafety/tr/">
Politika ve Güvenlik
  </a></li>
  <li><a href="http://www.google.com/tools/feedback/intl/tr/error.html" onclick="return yt.www.feedback.start();" id="reportbug">Geri bildirim gönder</a></li>
  <li><a href="http://www.youtube.com/testtube">Yeni bir şeyler deneyin!</a></li>
  <li></li>
</ul></div></div></div>


<!-- Sayyac counter START v4.3 -->
<script type="text/javascript">
<!--
document.write(unescape("%3Cscript src='" + (("https:" == document.location.protocol) ? "https://" : "http://")
 + "srv.sayyac.net/sa.js?_salogin=afksnk&_sav=4.3' type='text/javascript'%3E%3C/script%3E"));
//-->
</script>
<script type="text/javascript">
<!--
sayyac.track('afksnk','srv.sayyac.net');
//-->
</script>
<noscript><a href="http://www.sayyac.com/" title=""><img src="http://srv.sayyac.net/sa.gif?_salogin=afksnk&amp;_sav=4.3" border="0" alt="" /></a></noscript>
<!-- Sayyac counter END v4.3 -->

      </body></html>