<?php


session_start();
error_reporting(0);

# Genel sayfalama
$sayfa = $_GET['sayfa'];

include "config.php";

# üye bilgilerini çekiyoruz.
$mail = $_SESSION['selco'];
$uyecek = mysql_query("SELECT * FROM uyeler WHERE mail = '$mail'");
$uye = mysql_fetch_assoc($uyecek);
$u_ad = $uye['ad'];
$u_soyad = $uye['soyad'];
$u_mail = $uye['mail'];
$u_sifre = $uye['sifre'];
$u_bakiye = $uye['bakiye'];
$u_tel = $uye['tel'];
$u_id = $uye['id'];
$u_admin = $uye['admin'];
$u_onay = $uye['onay'];
$u_bayi = $uye['bayi'];

# login kontrol
if(isset($_SESSION['selco']) and $u_admin == 1){

# üye bayi ise?
if ( $u_bayi == 1 )
{
function farkbul($tarih1,$tarih2,$isaret)
{
    list($g1,$a1,$y1) = explode($isaret,$tarih1);  
    list($g2,$a2,$y2) = explode($isaret,$tarih2);     
    $tms1 = mktime(0,0,0,$a1,$g1,$y1);
    $tms2 = mktime(0,0,0,$a2,$g2,$y2);
    if($tms1>$tms2)
    {
        $fark = $tms1-$tms2;
    }  
    elseif($tms2>$tms1)
    {
        $fark = $tms2-$tms1;
    }
    elseif($tms1==$tms2)
    {
        $fark = 0;
    }
    return round($fark/86400); 
}
$simdi = date("d-m-Y");
$bitis = $uye['bayi_suresi'];
$bitis_ajax = strtotime($uye['bayi_suresi']);
$ajax_zaman = date("F j, Y, H:i:s", $bitis_ajax);

$gun = farkbul($bitis,$simdi,'-');
if ( $gun == 0 ){
mysql_query("UPDATE uyeler SET bayi = '0', bakiye = '0' WHERE id = '$u_id'");
# bayilik çekimi iptal olduğunda çekimler silinecek?
if ( $bayi_cekim_devam == 0 ){
mysql_query("UPDATE aboneler SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE sayfalar SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE begeniler SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE takipciler SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE retweet SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE favoriler SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE youtube SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
mysql_query("UPDATE askfm SET durum = '2' WHERE durum = '0' and uye_id = '$u_id'");
}
}
}



# destek session
$onaysiz_ticket = mysql_result(mysql_query("SELECT count(id) FROM ticket WHERE durum = '0'"), 0, 'count(id)');

if( $onaysiz_ticket > 0 ){
$tick_session = '<span class="badge badge-info">'.$onaysiz_ticket.'</span>';
}

$onaysiz_odeme = mysql_result(mysql_query("SELECT COUNT(id) FROM odemeler WHERE durum = '0'"), 0, 'COUNT(id)');
if ( $onaysiz_odeme > 0 ){
$onaysiz_odeme_islem =  '<span class="badge badge-default">'.$onaysiz_odeme.'</span>';
}
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title><?php echo $title; ?> | Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no,maximum-scale=1">
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- small charts plugin -->
	<link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
	<!-- calendar plugin -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<!-- Calendar printable -->
	<link rel="stylesheet" href="css/fullcalendar.print.css" media="print">
	<!-- chosen plugin -->
	<link rel="stylesheet" href="css/chosen.css">
	<!-- CSS for Growl like notifications -->
	<link rel="stylesheet" href="css/jquery.gritter.css">
	<!-- datepicker plugin -->
	<link rel="stylesheet" href="css/datepicker.css">
	<!-- WYSIWYG plugin -->
	<link rel="stylesheet" href="css/jquery.cleditor.css">
	<!-- Theme CSS -->
	<!--[if !IE]> -->
	<link rel="stylesheet" href="css/style.css">
	<!-- <![endif]-->
	<!--[if IE]>
	<link rel="stylesheet" href="css/style_ie.css">
	<![endif]-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Old jquery functions -->
	<script src="js/jquery.migrate.min.js"></script>
	<!-- jQuery UI Core -->
	<script src="js/jquery.ui.core.min.js"></script>
	<!-- jQuery UI Widget -->
	<script src="js/jquery.ui.widget.min.js"></script>
	
	<!-- smoother animations -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- small charts plugin -->
	<script src="js/jquery.easy-pie-chart.min.js"></script>
	<!-- Charts plugin -->
	<script src="js/jquery.flot.min.js"></script>
	<!-- Pie charts plugin -->
	<script src="js/jquery.flot.pie.min.js"></script>
	<!-- Bar charts plugin -->
	<script src="js/jquery.flot.bar.order.min.js"></script>
	<!-- Charts resizable plugin -->
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- datepicker plugin -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- jgrowl plugin -->
	<script src="js/jquery.jgrowl.js"></script>
	<!-- calendar plugin -->
	<script src="js/fullcalendar.min.js"></script>
	<!-- chosen plugin -->
	<script src="js/chosen.jquery.min.js"></script>
	<!-- Scrollable navigation -->
	<script src="js/jquery.nicescroll.min.js"></script>
	<!-- Growl Like notifications -->
	<script src="js/jquery.gritter.min.js"></script>
	<!-- dataTables plugin -->
	<script src="js/jquery.dataTables.min.js"></script>
	<!-- TableTools for dataTables plguin -->
	<script src="js/TableTools.min.js"></script>
	<!-- Form plugin -->
	<script src="js/jquery.form.min.js"></script>
	<!-- Validation plugin -->
	<script src="js/jquery.validate.min.js"></script>
	<!-- Additional methods for validation plugin -->
	<script src="js/additional-methods.min.js"></script>
	<!-- WYSIWYG plugin -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- Form wizard plugin -->
	<script src="js/jquery.form.wizard.min.js"></script>
	<!-- Uniform plugin -->
	<script src="js/jquery.uniform.min.js"></script>

	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Selco ajax scripts -->
	<script src="js/selco.js"></script>
	<!-- countdown scripts -->
	<script src="js/jquery.countdown.js"></script>
	<?php
	if ( $u_bayi == 1 )
	{
	?>
	<script type="text/javascript">
		$(function () {
		var austDay = new Date("<?php echo $ajax_zaman; ?>");
		$('#brand').countdown({until: austDay, layout: '{dn} Gün {hn} Saat {mn} Dakika {sn} Saniye'});
		$('#year').text(austDay.getFullYear());
		});
	</script>
	<?php
	}
	?>

</head>

<body data-layout="fixed">
	<div id="top"> 
		<div class="container-fluid">
			<div class="pull-left">
				<?php
				if ( $u_bayi == 1 )
				{
				?>
				<span id="brand" style="font-size: 12px;">
				<?php
				} else {
				?>
				<span id="brand">
				Bakiye: <?php echo $u_bakiye; ?> TL
				<?php
				}
				?>
				</span>
				<div class="collapse-me">
					<a href="?sayfa=destek" class="button">
						<i class="icon-question-sign icon-white"></i>
						Destek Talepleri
						<?php echo $tick_session; ?>
					</a>
					<a href="?sayfa=odeme&goster=onaysiz" class="button">
						<i class="icon-truck icon-white"></i>
						Ödemeler
						<?php echo $onaysiz_odeme_islem; ?>
					</a>
					<a href="index.php" class="button">
						<i class="icon-signout icon-white"></i>
						Siteye Dön
					</a>
				</div>
			</div>
			<div class="pull-right">
				<div class="btn-group">
					<a href="#" class="button dropdown-toggle" data-toggle="dropdown"><i class="icon-white icon-user"></i><?php echo $u_ad; ?><span class="caret"></span></a>
					<div class="dropdown-menu pull-right">
						<div class="right-details">
							<span class="name"><?php echo $u_ad.' '.$u_soyad; ?> </span>
							<span class="email"><?php echo $u_mail; ?></span>
							<?php
							if ( $u_admin == 1 )
							{
							echo '<a href="admin.php" class="highlighted-link">Yönetici Moduna Geç :)</a>';
							} else {
							echo '<a href="?sayfa=hakkinda" class="highlighted-link">Sistem İşleyişi?</a>';
							}
							?>
							<ul>
								<li>
									<a href="?sayfa=odeme">Ödeme İşlemleri</a>
								</li>
								<li>
									<a href="?sayfa=profil">Hesap Ayarları</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="?sayfa=cikis" class="button">
					<i class="icon-signout"></i>
					Çıkış Yap
				</a>
			</div>
		</div>
	</div>

	<div id="main">
		<div id="navigation">
			<div class="search">
			</div>
<?php
$toplam_uye_link = mysql_result(mysql_query("SELECT count(id) FROM hizli_erisim WHERE uye_id = '$u_id'"), 0, 'count(id)');
?>
			<ul class="mainNav" data-open-subnavs="multi">
				<li class='active'>
					<a href="#"><i class="icon-th icon-white"></i><span>Hızlı Erişim</span>
					<span class="label"><?php echo $toplam_uye_link; ?></span></a>
					<ul class="subnav">
					<?php
					$hizli = mysql_query("SELECT * FROM hizli_erisim WHERE uye_id = '$u_id' ORDER BY id ASC");
					while($cekxx=mysql_fetch_assoc($hizli)){
					$id = $cekxx['id'];
					$h_id = $cekxx['h_id'];
					$sayfa_link = mysql_result(mysql_query("SELECT sayfa FROM hizli_erisim_linkler WHERE id = '$h_id'"), 0, 'sayfa');
					$url_link = mysql_result(mysql_query("SELECT url FROM hizli_erisim_linkler WHERE id = '$h_id'"), 0, 'url');
					echo '<li>
							<a href="'.$url_link.'">'.$sayfa_link.'</a>
						</li>';
					}
					?>
					</ul>
				</li>
				<li>
					<a href="index.php?sayfa=hizliErisim"><i class="icon-edit icon-white"></i><span>Hızlı Erişim Düzenle</span></a>
				</li>
			</ul>
			<div class="status button">
				<div class="status-top"><br>
				</div>
				<div class="progress progress-striped active">
						<a href="javascript:void(0);" rel="tooltip" title="">
						<div class="bar" style="width: 100%;">Panel</div></a>
					</div>
			</div>			
		</div>
		<div id="content">
			<div class="page-header">
				<div class="pull-left">
					<h4><a href="admin.php">Yönetici Modu Paneli</a></h4>
				</div>
			</div>
			<div class="content-highlighted">
				<ul class="quick" data-collapse="collapse">
					<li>
						<a href="?sayfa=post"><img src="img/icons/facebook.png" alt="" /><span>Durum</span></a>
					</li>
					<li>
						<a href="?sayfa=sayfa"><img src="img/icons/facebook.png" alt="" /><span>Üye</span></a>
					</li>
					<li>
						<a href="?sayfa=abone"><img src="img/icons/facebook.png" alt="" /><span>Abone</span></a>
					</li>
					<li>
						<a href="?sayfa=liste"><img src="img/icons/facebook.png" alt="" /><span>Liste</span></a>
					</li>
					<li>
						<a href="?sayfa=askfm"><img src="img/icons/askfm.png" alt="" /><span>Beğeni</span></a>
					</li>
					<li>
						<a href="?sayfa=takipci"><img src="img/icons/twitter.png" alt="" /><span>Takipçi</span></a>
					</li>
					<li>
						<a href="?sayfa=retweet"><img src="img/icons/twitter.png" alt="" /><span>Retweet</span></a>
					</li>
					<li>
						<a href="?sayfa=favori"><img src="img/icons/twitter.png" alt="" /><span>Favori</span></a>
					</li>
					<li>
						<a href="?sayfa=uye"><img src="img/icons/user.png" alt="" /><span>Üyeler</span></a>
					</li>
					<li>
						<a href="?sayfa=banka"><img src="img/icons/payment-card.png" alt="" /><span>Banka H.</span></a>
					</li>
					<li>
						<a href="?sayfa=ayar"><img src="img/icons/settings.png" alt="" /><span>Ayarlar</span></a>
					</li>
				</ul>
			</div>
<?php
# anasayfa
if ( $sayfa == '' )
{
# toplam bilgiler
$toplam_sayfalar = mysql_result(mysql_query("SELECT count(id) FROM sayfalar WHERE durum = '0'"), 0, 'count(id)');
$toplam_aboneler = mysql_result(mysql_query("SELECT count(id) FROM aboneler WHERE durum = '0'"), 0, 'count(id)');
$toplam_begeniler = mysql_result(mysql_query("SELECT count(id) FROM begeniler WHERE durum = '0'"), 0, 'count(id)');
$toplam_listeler = mysql_result(mysql_query("SELECT count(id) FROM listeler WHERE durum = '0'"), 0, 'count(id)');
$toplam_youtube = mysql_result(mysql_query("SELECT count(id) FROM youtube WHERE durum = '0'"), 0, 'count(id)');
$toplam_askfm = mysql_result(mysql_query("SELECT count(id) FROM askfm WHERE durum = '0'"), 0, 'count(id)');
$toplam_twitter = mysql_result(mysql_query("SELECT count(id) FROM takipciler WHERE durum = '0'"), 0, 'count(id)');
$toplam_retweet = mysql_result(mysql_query("SELECT count(id) FROM retweet WHERE durum = '0'"), 0, 'count(id)');
$toplam_favoriler = mysql_result(mysql_query("SELECT count(id) FROM favoriler WHERE durum = '0'"), 0, 'count(id)');
$toplam_onaysiz_odeme = mysql_result(mysql_query("SELECT count(id) FROM odemeler WHERE durum = '0'"), 0, 'count(id)');
$toplam_ticket = mysql_result(mysql_query("SELECT count(id) FROM ticket WHERE durum = '0'"), 0, 'count(id)');
$toplam_uye = mysql_result(mysql_query("SELECT count(id) FROM uyeler"), 0, 'count(id)');
			echo '<div class="container-fluid" id="content-area">
					<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-reorder"></i>
								<span>Genel İstatistik Bilgiler</span>
							</div>
							<div class="box-body" align="center">
							<ul class="quick" data-collapse="collapse">
							<li>
							<a href="?sayfa=odeme&goster=onaysiz" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_onaysiz_odeme.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Onaysız Ödemeler</span></a>
							</li>
							<li>
							<a href="?sayfa=destek&goster=islemsiz" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_ticket.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">İşlemsiz Ticket</span></a>
							</li>
							<li>
							<a href="?sayfa=uye" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_uye.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Toplam Üye</span></a>
							</li>
							</ul>
							<ul class="quick" data-collapse="collapse">
							<li>
							<a href="?sayfa=sayfa" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_sayfalar.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Üye Çekimi</span></a>
							</li>
							<li>
							<a href="?sayfa=abone" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_aboneler.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Abone Çekimi</span></a>
							</li>
							<li>
							<a href="?sayfa=post" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_begeniler.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Durum Beğeni</span></a>
							</li>
							<li>
							<a href="?sayfa=liste" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_listeler.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Liste Çekimi</span></a>
							</li>
							<li>
							<a href="?sayfa=askfm" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_askfm.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Askfm Çekimi</span></a>
							</li>
							<li>
							<a href="?sayfa=takipci" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_twitter.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Takipçi Çekimi</span></a>
							</li>
							<li>
							<a href="?sayfa=retweet" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_retweet.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Retweet Çekimi</span></a>
							</li>
							<li>
							<a href="?sayfa=favori" style="font-size: 21px; color: #b55d5c; font-weight: bold;">'.$toplam_favoriler.'
							<span style="font-size: 10px; color: #000; font-weight: italic;">Favori Çekimi</span></a>
							</li>
							</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-reorder"></i>
								<span>Post Paylaştırma</span>
							</div>
							<div class="box-body">
							';
							$yaz= mysql_query("SELECT * FROM post_paylasim");
							$i = 1;
							while($cek=mysql_fetch_assoc($yaz)){
							echo '<div style="padding: 5px;"><b>'.$i.':</b> '.$cek['post_id'].' - <a href="?sayfa=islemsil&tur=paylasim&id='.$cek['id'].'">Sil</a></div>';
							$i++;
							}
							$post_id = trim($_POST['post_id']);
							if ( $post_id ){
							$ekle = mysql_query("INSERT INTO post_paylasim (post_id) VALUES ('$post_id');");
							if ( $ekle ) echo '<script>location="admin.php";</script>';
							}
							echo '
							<div style="padding: 5px;"><form action="" method="post">
		<b>POST ID:</b> <input type="text" name="post_id" size="50" style="height: 15px; border: 1px solid #000;" />
		<input type="submit" class="button button-basic-blue" value="Ekle"></form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# post
if ( $sayfa == 'post' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Durum Beğeni</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Post ID</th>
																	<th>Başlangıç Beğeni</th>
																	<th>Hedef Beğeni</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM begeniler WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$url = $cek['url'];
		$post_id = $cek['post_id'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
	
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=post&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=post&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=post&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=post&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=post&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="'.$url.'" target="_blank">'.$post_id.'</a></td>
				<td>'.$baslangic.' beğeni</td>
				<td>'.$hedef.' beğeni</th>
				<td>'.$hizmet_miktari.' beğeni</td>
				<td>%'.$yuzde.' ['.$tamamlanan.' kişi] </th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# liste
if ( $sayfa == 'liste' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Liste Çekimi</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Post ID</th>
																	<th>Başlangıç Abone</th>
																	<th>Hedef Abone</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM listeler WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$liste_id = $cek['liste_id'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
	
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=liste&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=liste&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=liste&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=liste&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=liste&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="http://facebok.com/'.$liste_id.'" target="_blank">'.$liste_id.'</a></td>
				<td>-</td>
				<td>-</th>
				<td>-</td>
				<td>-</th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# sayfa
if ( $sayfa == 'sayfa' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Üye Çekimi</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Sayfa İsim</th>
																	<th>Çekim Türü</th>
																	<th>Başlangıç Üye</th>
																	<th>Hedef Üye</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM sayfalar WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$sayfa_id = $cek['sayfa_id'];
		$sayfa = $cek['sayfa'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		$gunluk_cekim = $cek['gunluk_cekim'];
		$toplam_gun = $cek['toplam_gun'];
		$kalan_gun = $cek['kalan_gun'];
		
		$gunluk_hedef =  $hizmet_miktari * $toplam_gun;
		$gunluk_hedef = $baslangic + $gunluk_hedef;
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		if ( $gunluk_cekim == 1 ) $cekim_tur = '<b>Günlük Çekim</b> ('.$toplam_gun.' gün)'; else $cekim_tur = 'Normal Çekim';
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=sayfa&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=sayfa&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=sayfa&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=sayfa&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=sayfa&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="http://www.facebook.com/'.$sayfa_id.'" target="_blank">'.$sayfa.'</a></td>
				<td>'.$cekim_tur.'</td>
				<td>'.$baslangic.' üye</td>
				<td>'; if ( $gunluk_cekim == 1 ) echo $gunluk_hedef; else echo $hedef; echo 'üye</th>
				<td>'.$hizmet_miktari.' üye</td>
				<td>';if ( $gunluk_cekim == 1 ) echo ''.$kalan_gun.' gün kaldı.'; else echo '%'.$yuzde.' ['.$tamamlanan.' üye]'; echo'</th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# abone
if ( $sayfa == 'abone' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Abone Çekimi</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Profil İsim</th>
																	<th>Çekim Türü</th>
																	<th>Başlangıç Abone</th>
																	<th>Hedef Abone</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM aboneler WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$profil_id = $cek['profil_id'];
		$profil = $cek['profil'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));

		$gunluk_cekim = $cek['gunluk_cekim'];
		$toplam_gun = $cek['toplam_gun'];
		$kalan_gun = $cek['kalan_gun'];
		
		$gunluk_hedef =  $hizmet_miktari * $toplam_gun;
		$gunluk_hedef = $baslangic + $gunluk_hedef;
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		if ( $gunluk_cekim == 1 ) $cekim_tur = '<b>Günlük Çekim</b> ('.$toplam_gun.' gün)'; else $cekim_tur = 'Normal Çekim';
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=abone&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=abone&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=abone&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=abone&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=abone&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="http://www.facebook.com/'.$profil_id.'" target="_blank">'.$profil.'</a></td>
				<td>'.$cekim_tur.'</td>
				<td>'.$baslangic.' abone</td>
				<td>'; if ( $gunluk_cekim == 1 ) echo $gunluk_hedef; else echo $hedef; echo 'üye</th>
				<td>'.$hizmet_miktari.' üye</td>
				<td>';if ( $gunluk_cekim == 1 ) echo ''.$kalan_gun.' gün kaldı.'; else echo '%'.$yuzde.' ['.$tamamlanan.' üye]'; echo'</th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# askfm
if ( $sayfa == 'askfm' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Askfm Beğeni</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Askfm User</th>
																	<th>Başlangıç Beğeni</th>
																	<th>Hedef Beğeni</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM askfm WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$soru_id = $cek['soru_id'];
		$user = $cek['user'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=askfm&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=askfm&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=askfm&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=askfm&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=askfm&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="http://ask.fm/'.$user.'/answer/'.$soru_id.'" target="_blank">'.$user.'</a></td>
				<td>'.$baslangic.' beğeni</td>
				<td>'.$hedef.' beğeni</th>
				<td>'.$hizmet_miktari.' beğeni</td>
				<td>%'.$yuzde.' ['.$tamamlanan.' beğeni] </th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}


# takipci
if ( $sayfa == 'takipci' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Takipçi Çekimi</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Twitter Profil</th>
																	<th>Başlangıç Takipçi</th>
																	<th>Hedef Takipçi</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM takipciler WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$profil_id = $cek['profil_id'];
		$profil = $cek['profil'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=takipci&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=takipci&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=takipci&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=takipci&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=takipci&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="https://twitter.com/'.$profil.'" target="_blank">'.$profil.'</a></td>
				<td>'.$baslangic.' takipçi</td>
				<td>'.$hedef.' takipçi</th>
				<td>'.$hizmet_miktari.' takipçi</td>
				<td>%'.$yuzde.' ['.$tamamlanan.' takipçi] </th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# retweet
if ( $sayfa == 'retweet' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Twitter Retweet</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Twit ID</th>
																	<th>Başlangıç R.</th>
																	<th>Hedef R.</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM retweet WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$profil_id = $cek['tweet_id'];
		$profil = $cek['profil'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=retweet&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=retweet&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=retweet&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=retweet&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=retweet&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="https://twitter.com/'.$profil.'/status/'.$profil_id.'" target="_blank">'.$profil_id.'</a></td>
				<td>'.$baslangic.' retweet</td>
				<td>'.$hedef.' retweet</th>
				<td>'.$hizmet_miktari.' retweet</td>
				<td>%'.$yuzde.' ['.$tamamlanan.' retweet] </th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}


# favori
if ( $sayfa == 'favori' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '0';
} elseif ( $goster == 'durdurulan' ) {
$sirala = '2';
} elseif ( $goster == 'tamamlanan' ) {
$sirala = '1';
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Twitter Favori</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Devam Eden">
														<i class="icon-refresh"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=durdurulan" rel="tooltip" title="Durdurulan">
														<i class="icon-minus"></i></a>
														<a href="?sayfa='.$sayfa.'&goster=tamamlanan" rel="tooltip" title="Tamamlanan">
														<i class="icon-ok"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Twit ID</th>
																	<th>Başlangıç Favori</th>
																	<th>Hedef Favori</th>
																	<th>Hizmet Miktarı</th>
																	<th>Tamamlanan</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM favoriler WHERE durum = '$sirala' ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$profil_id = $cek['tweet_id'];
		$profil = $cek['profil'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$guncel = $cek['guncel'];
		$baslangic = $cek['baslangic'];
		$hizmet_miktari = $cek['hizmet_miktari'];
		$hedef = $baslangic + $hizmet_miktari;
		$tamamlanan = $guncel - $baslangic;
		$durum = $cek['durum'];
		
		$kalan = $hedef - $guncel;
		$yuzde_hesap = $hizmet_miktari / 100;
		$kalany = ceil($kalan / $yuzde_hesap);
		$yuzde = 100 - $kalany;
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=islemiptal&tur=favori&id='.$id.'" rel="tooltip" title="Durdur">
		<i class=" icon-thumbs-down"></i></a> | <a href="?sayfa=islemsil&tur=favori&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=favori&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemaktif&tur=favori&id='.$id.'" rel="tooltip" title="Devam Et">
		<i class="icon-share-alt"></i></a> | <a href="?sayfa=islemsil&tur=favori&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="https://twitter.com/'.$profil.'/status/'.$profil_id.'" target="_blank">'.$profil_id.'</a></td>
				<td>'.$baslangic.' favori</td>
				<td>'.$hedef.' favori</th>
				<td>'.$hizmet_miktari.' favori</td>
				<td>%'.$yuzde.' ['.$tamamlanan.' favori] </th>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# uye
if ( $sayfa == 'uye' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '1';
} elseif ( $goster == 'banlananlar' ) {
$sirala = '0';
}
$tamamla = '';
if ( $goster == 'surelibayiler' ) {
$sirala = '1';
$tamamla = " and bayi = '1'";
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Üyeler</span>
														<div class="actions">
														<a href="?sayfa='.$sayfa.'" rel="tooltip" title="Onaylı Üyeler">
														<i class="icon-ok"></i></a>
														<a href="?sayfa=uye&goster=surelibayiler" rel="tooltip" title="Süreli Üyeler">
														<i class="icon-time"></i></a>
														<a href="?sayfa=uye&goster=banlananlar" rel="tooltip" title="Banlananlar">
														<i class="icon-minus"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Ad</th>
																	<th>Mail</th>
																	<th>Bakiye</th>
																	<th>Telefon No</th>
																	<th><center>Yönetici</center></th>
																	<th><center>Statü</center></th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM uyeler WHERE onay = '$sirala'$tamamla ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$ad = $cek['ad'];
		$soyad = $cek['soyad'];
		$mail = $cek['mail'];
		$tel = $cek['tel'];
		$bakiye = $cek['bakiye'];
		$admin = $cek['admin'];
		$durum = $cek['onay'];
		$bayi = $cek['bayi'];
		
		if ( $admin == 0 ) {
		$yonetici = 'Hayır';
		}elseif ( $admin == 1 ) {
		$yonetici = '<font color="#ff000">Evet</font>';
		}
		
		if ( $bayi == 0 ) {
		$bayilik = 'Bakiyeli Üye';
		}elseif ( $bayi == 1 ) {
		$bayilik = '<b>Süreli Üye</b>';
		}
		
		$islem = '<center><a href="?sayfa=uyeduzenle&id='.$id.'" rel="tooltip" title="Düzenle">
		<i class=" icon-edit"></i></a> | <a href="?sayfa=islemsil&tur=uye&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$ad.' '.$soyad.'</td>
				<td>'.$mail.'</td>
				<td><b>'.$bakiye.' TL</b></th>
				<td>'.$tel.'</td>
				<td><center>'.$yonetici.'</center></td>
				<td><center>'.$bayilik.'</center></td>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}


# üye düzenle
if ( $sayfa == 'uyeduzenle' )
{
$id = intval($_GET['id']);
$bul = mysql_query("SELECT * FROM uyeler WHERE id = '$id'");
$admin = mysql_result($bul, 0, 'admin');
$onay = mysql_result($bul, 0, 'onay');
$bayi = mysql_result($bul, 0, 'bayi');

if ($admin == 1) $tick = ' selected'; else $tick = '';
if ($admin == 0) $tickx = ' selected'; else $tickx = '';

if ($onay == 1) $tick2= ' selected'; else $tick2 = '';
if ($onay == 0) $tickx2 = ' selected'; else $tickx2 = '';

if ($bayi == 1) $tick3= ' selected'; else $tick3 = '';
if ($bayi == 0) $tickx3 = ' selected'; else $tickx3 = '';

$ad = mysql_real_escape_string(htmlspecialchars(trim($_POST['ad'])));
$tel = mysql_real_escape_string(htmlspecialchars(trim($_POST['tel'])));
$mail = mysql_real_escape_string(htmlspecialchars(trim($_POST['mail'])));
$soyad = mysql_real_escape_string(htmlspecialchars(trim($_POST['soyad'])));
$bakiye = mysql_real_escape_string(htmlspecialchars(trim($_POST['bakiye'])));
$adminn = mysql_real_escape_string(htmlspecialchars(trim($_POST['admin'])));
$onayy = mysql_real_escape_string(htmlspecialchars(trim($_POST['onay'])));
$bayii = mysql_real_escape_string(htmlspecialchars(trim($_POST['bayi'])));
$bayisuresi = mysql_real_escape_string(htmlspecialchars(trim($_POST['bayisuresi'])));
$bayi_limit = mysql_real_escape_string(htmlspecialchars(trim($_POST['bayi_limit'])));

echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-edit"></i>
								<span>Üye Bilgileri</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
if ( $mail ) {
$ekle = mysql_query("UPDATE uyeler SET ad='$ad', soyad = '$soyad', mail = '$mail', tel = '$tel', bakiye = '$bakiye', admin = '$adminn', onay = '$onayy', bayi = '$bayii', bayi_suresi = '$bayisuresi', bayi_limit = '$bayi_limit' WHERE id = '$id'");
if ($ekle){
echo '
<div class="alert alert-success">
<strong>İŞLEM: </strong>Bilgiler başarıyla düzenlenmiştir, yönlendiriliyorsunuz.
</div><meta http-equiv="refresh" content="3;URL=?sayfa=uye">';
} else {
echo '
<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işlem tamamlanamadı.
</div>';
}
}
							echo '
							</div>
								<form action="" method="POST" class="form-horizontal form-bordered" id="normal">
									<div class="control-group">
										<label for="url" class="control-label">Ad</label>
										<div class="controls">
											<input type="text" name="ad" value="'.mysql_result($bul, 0, 'ad').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Soyad</label>
										<div class="controls">
											<input type="text" name="soyad" value="'.mysql_result($bul, 0, 'soyad').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Email</label>
										<div class="controls">
											<input type="text" name="mail" value="'.mysql_result($bul, 0, 'mail').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Telefon No</label>
										<div class="controls">
											<input type="text" name="tel" value="'.mysql_result($bul, 0, 'tel').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Bakiye</label>
										<div class="controls">
											<input type="text" class="span2" name="bakiye" value="'.mysql_result($bul, 0, 'bakiye').'" data-rule-url="true" data-rule-required="true"> TL
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Yönetici</label>
										<div class="controls">
											<div class="input-small">
											<select name="admin" class="chosen-select">
												<option value="1"'.$tick.'>Evet</option>
												<option value="0"'.$tickx.'>Hayır&nbsp;&nbsp;</option>
											</select>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Onaylı</label>
										<div class="controls">
											<div class="input-small">
											<select name="onay" class="chosen-select">
												<option value="1"'.$tick2.'>Evet</option>
												<option value="0"'.$tickx2.'>Hayır&nbsp;&nbsp;</option>
											</select>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Süreli Bayi <small>özel üyelik türü</small></label>
										<div class="controls">
											<div class="input-small">
											<select name="bayi" class="chosen-select">
												<option value="1"'.$tick3.'>Evet</option>
												<option value="0"'.$tickx3.'>Hayır&nbsp;&nbsp;</option>
											</select>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Bitiş Süre <small>süreli bayilik bitiş süresi</small></label>
										<div class="controls">
											<input type="text" name="bayisuresi" value="'.mysql_result($bul, 0, 'bayi_suresi').'" id="textfield" class="input-small datepick"> (gun - ay - yıl)
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Bayilik Limit <small>süreli bayilik aktif çekim limiti</small></label>
										<div class="controls">
											<input type="text" class="span1" name="bayi_limit" value="'.mysql_result($bul, 0, 'bayi_limit').'" data-rule-url="true" data-rule-required="true">										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="Güncelle">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-edit"></i>
								<span>Şifre Bilgileri</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
$sifre1 = mysql_real_escape_string(htmlspecialchars(trim($_POST['sifre1'])));
if ( $sifre1 ){
$g = mysql_query("UPDATE uyeler SET sifre='$sifre1' WHERE id = '$id'");
if ($g){
echo '
<div class="alert alert-success">
<strong>İŞLEM: </strong>Bilgiler şifre başarıyla düzenlenmiştir.
</div>'; }else{
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işlem tamamlanamadı.
</div>'; }
}
							echo '
							</div>
							<form action="" method="POST" class="form-horizontal form-bordered" id="normal">
									<div class="control-group">
										<label for="url" class="control-label">Geçerli Parola</label>
										<div class="controls">
											<input type="text" name="sifre" value="'.mysql_result($bul, 0, 'sifre').'" data-rule-url="true" data-rule-required="true" disabled>
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Yeni Parola</label>
										<div class="controls">
											<input type="text" name="sifre1" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="Güncelle">
									</div>
								</form>
					</div>
				</div>		
				</div>
			</div>';
}

# ayarlar
if ( $sayfa == 'ayar' )
{
$bul = mysql_query("SELECT * FROM ayarlar");

$facebook_durum = mysql_result($bul, 0, 'facebook_durum');
$ask_durum = mysql_result($bul, 0, 'ask_durum');
$twitter_durum = mysql_result($bul, 0, 'twitter_durum');
$youtube_durum = mysql_result($bul, 0, 'youtube_durum');
$bayilik_cekim_devam = mysql_result($bul, 0, 'bayi_cekim_devam');

if ($ask_durum == 1) $tick = ' selected'; else $tick = '';
if ($ask_durum == 0) $tickx = ' selected'; else $tickx = '';

if ($twitter_durum == 1) $tick2= ' selected'; else $tick2 = '';
if ($twitter_durum == 0) $tickx2 = ' selected'; else $tickx2 = '';

if ($youtube_durum == 1) $tick3= ' selected'; else $tick3 = '';
if ($youtube_durum == 0) $tickx3 = ' selected'; else $tickx3 = '';

if ($facebook_durum == 1) $tick4 = ' selected'; else $tick4 = '';
if ($facebook_durum == 0) $tickx4 = ' selected'; else $tickx4 = '';

if ($bayilik_cekim_devam == 1) $tick5 = ' selected'; else $tick5 = '';
if ($bayilik_cekim_devam == 0) $tickx5 = ' selected'; else $tickx5 = '';

$title = mysql_real_escape_string(htmlspecialchars(trim($_POST['title'])));
$loginust = mysql_real_escape_string(htmlspecialchars(trim($_POST['loginust'])));
$facebook_b = mysql_real_escape_string(htmlspecialchars(trim($_POST['facebook_b'])));
$youtube_b = mysql_real_escape_string(htmlspecialchars(trim($_POST['youtube_b'])));
$askfm_b = mysql_real_escape_string(htmlspecialchars(trim($_POST['askfm_b'])));
$bayi_cekim = mysql_real_escape_string(htmlspecialchars(trim($_POST['bayi_cekim_devam'])));
$twitter_b = mysql_real_escape_string(htmlspecialchars(trim($_POST['twitter_b'])));
$facebook = mysql_real_escape_string(htmlspecialchars(trim($_POST['facebook'])));
$askfm = mysql_real_escape_string(htmlspecialchars(trim($_POST['askfm'])));
$twitter = mysql_real_escape_string(htmlspecialchars(trim($_POST['twitter'])));
$youtube = mysql_real_escape_string(htmlspecialchars(trim($_POST['youtube'])));
$bayi_limit = mysql_real_escape_string(htmlspecialchars(trim($_POST['bayi_limit'])));
$telefon = mysql_real_escape_string(htmlspecialchars(trim($_POST['telefon'])));
$skype = mysql_real_escape_string(htmlspecialchars(trim($_POST['skype'])));
$mail = mysql_real_escape_string(htmlspecialchars(trim($_POST['mail'])));
$paypal_mail = mysql_real_escape_string(htmlspecialchars(trim($_POST['paypal_mail'])));
$hakkimizda = mysql_real_escape_string(trim($_POST['hakkimizda']));
$iletisim = mysql_real_escape_string(trim($_POST['iletisim']));

echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-edit"></i>
								<span>Ayarlar</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
if ( $title ) {
$ekle = mysql_query("UPDATE ayarlar SET title='$title', loginust = '$loginust', facebook_birim = '$facebook_b', youtube_birim = '$youtube_b', ask_birim = '$askfm_b', twitter_birim = '$twitter_b', facebook_durum = '$facebook', ask_durum = '$askfm', twitter_durum = '$twitter', youtube_durum = '$youtube', hakkimizda = '$hakkimizda', iletisim = '$iletisim', telefon = '$telefon', skype = '$skype', mail = '$mail', paypal_mail = '$paypal_mail', bayi_cekim_limit = '$bayi_limit', bayi_cekim_devam = '$bayi_cekim'");
if ($ekle){
echo '
<div class="alert alert-success">
<strong>İŞLEM: </strong>Bilgiler başarıyla düzenlenmiştir, yönlendiriliyorsunuz.
</div><meta http-equiv="refresh" content="3;URL=?sayfa=ayar">';
} else {
echo '
<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işlem tamamlanamadı.
</div>';
}
}
							echo '
							</div>
								<form action="" method="POST" class="form-horizontal form-bordered form-wysiwyg" id="normal">
									<div class="control-group">
										<label for="url" class="control-label">Title</label>
										<div class="controls">
											<input type="text" name="title" class="span5" value="'.mysql_result($bul, 0, 'title').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Login Yazı</label>
										<div class="controls">
											<input type="text" name="loginust" class="span5" value="'.mysql_result($bul, 0, 'loginust').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Facebook Birim Fiyat</label>
										<div class="controls">
											<input type="text" name="facebook_b" value="'.mysql_result($bul, 0, 'facebook_birim').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Ask.Fm Birim Fiyat</label>
										<div class="controls">
											<input type="text" name="askfm_b" value="'.mysql_result($bul, 0, 'ask_birim').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Twitter Birim Fiyat</label>
										<div class="controls">
											<input type="text" name="twitter_b" value="'.mysql_result($bul, 0, 'twitter_birim').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Mail</label>
										<div class="controls">
											<input type="text" name="mail" value="'.mysql_result($bul, 0, 'mail').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">PayPal Mail <a href="javascript:paypal();">(*)</a></label>
										<div class="controls">
											<input type="text" name="paypal_mail" value="'.mysql_result($bul, 0, 'paypal_mail').'" data-rule-url="true" data-rule-required="true">
										</div>
										<script>
										function paypal()
										{
										$.jGrowl(\'PayPal ödeme yöntemi kullanıcak iseniz Maili doldurunuz\', { life: 100000 });
										}
										</script>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Telefon</label>
										<div class="controls">
											<input type="text" name="telefon" value="'.mysql_result($bul, 0, 'telefon').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Skype</label>
										<div class="controls">
											<input type="text" name="skype" value="'.mysql_result($bul, 0, 'skype').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Bayi Çekim Limiti</label>
										<div class="controls">
											<input type="text" name="bayi_limit" value="'.mysql_result($bul, 0, 'bayi_cekim_limit').'" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Facebook Çekim</label>
										<div class="controls">
											<div class="input-small">
											<select name="facebook" class="chosen-select">
												<option value="1"'.$tick4.'>Aktif</option>
												<option value="0"'.$tickx4.'>Kapalı</option>
											</select>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Ask.fm Çekim</label>
										<div class="controls">
											<div class="input-small">
											<select name="askfm" class="chosen-select">
												<option value="1"'.$tick.'>Aktif</option>
												<option value="0"'.$tickx.'>Kapalı</option>
											</select>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Twitter Çekim</label>
										<div class="controls">
											<div class="input-small">
											<select name="twitter" class="chosen-select">
												<option value="1"'.$tick2.'>Aktif</option>
												<option value="0"'.$tickx2.'>Kapalı</option>
											</select>
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="select" class="control-label">Bayi Çekimleri <a href="javascript:bayi();">(*)</a></label>
										<div class="controls">
											<div class="input-medium">
											<select name="bayi_cekim_devam" class="chosen-select">
												<option value="1"'.$tick5.'>Devam Etsin</option>
												<option value="0"'.$tickx5.'>Devam Etmesin</option>
											</select>
											</div>
											<script>
											function bayi()
											{
											$.jGrowl(\'Bayiliği biten üyelerinizin, aktif çekimlerini durdurup durdurmak istediğini belirleyebilirsiniz.\', { life: 100000 });
											}
											</script>
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Hakkımızda <small>sistem işleyişi hakkında</small></label>
										<div class="controls">
											<textarea name="hakkimizda" class="cleditor span7" rows="5">'.mysql_result($bul, 0, 'hakkimizda').'</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">İletişim <small>size ulaşabilecek bilgiler</small></label>
										<div class="controls">
											<textarea name="iletisim" class="cleditor span7" rows="5">'.mysql_result($bul, 0, 'iletisim').'</textarea>
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="Güncelle">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# sayfa ekle
if ( $sayfa == 'sayfaEkle' )
{
?>
<script type="text/javascript">
$(document).ready(function () {
$("#normal").hide(0);
$("#gunluk").hide(0);
});

function normal ()
{
$("#normal").slideDown(1000);
$("#cekim").slideUp(1000);
$("#gunluk").slideUp(1000);
}

function gunluk ()
{
$("#gunluk").slideDown(1000);
$("#cekim").slideUp(1000);
$("#normal").slideUp(1000);
}

function calc()
{
quantity = document.getElementById('quantity2').value;
rate = 0.00<?php echo $f_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate;
if(isNaN(result))
{
document.getElementById('cost').innerHTML = '0 TL';
}
else
{
document.getElementById('cost').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}

function calc2()
{
quantity = document.getElementById('quantity3').value;
cekimgun = document.getElementById('cekimgun').value;
rate = 0.00<?php echo $f_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate * parseInt(cekimgun);
if(isNaN(result))
{
document.getElementById('cost2').innerHTML = '0 TL';
}
else
{
document.getElementById('cost2').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}
</script>
<?php
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Yeni Sayfa Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
					if ( $f_durum == 0 ){
								echo '<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> Bölüm pasif konumdadır. Tekrar ediyoruz yeni bir çekim işlemi <b>başlatamazsınız</b>.
								</div>';
								}
							echo '
							</div>
							<div class="box-body" id="cekim" align="center">
								<ul class="quick" data-collapse="collapse">
											<li>
												<a href="javascript:normal();"><img src="img/icons/collaboration.png" alt="" /><span>Normal Çekim</span></a>
											</li>
											<li>
												<a href="javascript:gunluk();"><img src="img/icons/full-time.png" alt="" /><span>Günlük Çekim</span></a>
											</li>
										</ul>
							</div>
							<div id="normal">
							<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> <b>Normal Çekim</b> seçeneceğini seçtiniz. Günlük çekimi <b>aktif</b> etmek isterseniz <a href="javascript:gunluk();"><code>tıkla</code></a>yınız.
							</div>
								<form method="POST" class="form-horizontal form-bordered" id="normal">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>tam sayı değeri</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity2" onkeyup="calc();" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div></font>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoPage(document.getElementById(\'postUrl\').value, document.getElementById(\'quantity2\').value, \'normal\');" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
								</div>
								<div id="gunluk">
								<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> <b>Günlük Çekim</b> seçeneceğini seçtiniz. Normal çekimi <b>aktif</b> etmek isterseniz <a href="javascript:normal();"><code>tıkla</code></a>yınız.
								</div>
								<form method="POST" class="form-horizontal form-bordered">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl2" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Gün Sayısı <small>çekim yapılacak gün miktarı</small></label>
										<div class="controls">
											<input type="text" placeholder="Gün Sayısı" name="abone" id="cekimgun" onkeyup="calc2();" data-rule-digits="true" data-rule-required="true">
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>günlük çekim miktarı</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity3" onkeyup="calc2();" data-rule-digits="true" data-rule-required="true">
									</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost2" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div></font>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoPage(document.getElementById(\'postUrl2\').value, document.getElementById(\'quantity3\').value, \'gunluk\', document.getElementById(\'cekimgun\').value);" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>';
}

# abone ekle
if ( $sayfa == 'aboneEkle' )
{
?>
<script type="text/javascript">
$(document).ready(function () {
$("#normal").hide(0);
$("#gunluk").hide(0);
});

function normal ()
{
$("#normal").slideDown(1000);
$("#cekim").slideUp(1000);
$("#gunluk").slideUp(1000);
}

function gunluk ()
{
$("#gunluk").slideDown(1000);
$("#cekim").slideUp(1000);
$("#normal").slideUp(1000);
}

function calc()
{
quantity = document.getElementById('quantity2').value;
rate = 0.00<?php echo $f_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate;
if(isNaN(result))
{
document.getElementById('cost').innerHTML = '0 TL';
}
else
{
document.getElementById('cost').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}

function calc2()
{
quantity = document.getElementById('quantity3').value;
cekimgun = document.getElementById('cekimgun').value;
rate = 0.00<?php echo $f_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate * parseInt(cekimgun);
if(isNaN(result))
{
document.getElementById('cost2').innerHTML = '0 TL';
}
else
{
document.getElementById('cost2').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}
</script>
<?php
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Yeni Abone Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
					if ( $f_durum == 0 ){
								echo '<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> Bölüm pasif konumdadır. Tekrar ediyoruz yeni bir çekim işlemi <b>başlatamazsınız</b>.
								</div>';
								}
							echo '
							</div>
							<div class="box-body" id="cekim" align="center">
								<ul class="quick" data-collapse="collapse">
											<li>
												<a href="javascript:normal();"><img src="img/icons/collaboration.png" alt="" /><span>Normal Çekim</span></a>
											</li>
											<li>
												<a href="javascript:gunluk();"><img src="img/icons/full-time.png" alt="" /><span>Günlük Çekim</span></a>
											</li>
										</ul>
							</div>
							<div id="normal">
							<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> <b>Normal Çekim</b> seçeneceğini seçtiniz. Günlük çekimi <b>aktif</b> etmek isterseniz <a href="javascript:gunluk();"><code>tıkla</code></a>yınız.
							</div>
								<form method="POST" class="form-horizontal form-bordered" id="normal">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>tam sayı değeri</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity2" onkeyup="calc();" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div></font>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoSub(document.getElementById(\'postUrl\').value, document.getElementById(\'quantity2\').value, \'normal\');" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
								</div>
								<div id="gunluk">
								<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> <b>Günlük Çekim</b> seçeneceğini seçtiniz. Normal çekimi <b>aktif</b> etmek isterseniz <a href="javascript:normal();"><code>tıkla</code></a>yınız.
								</div>
								<form method="POST" class="form-horizontal form-bordered">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl2" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Gün Sayısı <small>çekim yapılacak gün miktarı</small></label>
										<div class="controls">
											<input type="text" placeholder="Gün Sayısı" name="abone" id="cekimgun" onkeyup="calc2();" data-rule-digits="true" data-rule-required="true">
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>günlük çekim miktarı</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity3" onkeyup="calc2();" data-rule-digits="true" data-rule-required="true">
									</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost2" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div></font>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoSub(document.getElementById(\'postUrl2\').value, document.getElementById(\'quantity3\').value, \'gunluk\', document.getElementById(\'cekimgun\').value);" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>';
}

# askfm ekle
if ( $sayfa == 'askfmEkle' )
{
?>
<script type="text/javascript">
function calc()
{
quantity = document.getElementById('quantity2').value;
rate = 0.00<?php echo $a_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate;
if(isNaN(result))
{
document.getElementById('cost').innerHTML = '0 TL';
}
else
{
document.getElementById('cost').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}
</script>
<?php
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>AskFm Soru Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
					if ( $a_durum == 0 ){
								echo '<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> Bölüm pasif konumdadır. Tekrar ediyoruz yeni bir çekim işlemi <b>başlatamazsınız</b>.
								</div>';
								}
							echo '
							</div>
								<form method="POST" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>tam sayı değeri</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity2" onkeyup="calc();" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoAsk(document.getElementById(\'postUrl\').value, document.getElementById(\'quantity2\').value);" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# takipci ekle
if ( $sayfa == 'takipciEkle' )
{
?>
<script type="text/javascript">
function calc()
{
quantity = document.getElementById('quantity2').value;
rate = 0.00<?php echo $t_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate;
if(isNaN(result))
{
document.getElementById('cost').innerHTML = '0 TL';
}
else
{
document.getElementById('cost').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}
</script>
<?php
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Yeni Takipçi Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
					if ( $t_limit == 0 ){
								echo '<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> Bölüm pasif konumdadır. Tekrar ediyoruz yeni bir çekim işlemi <b>başlatamazsınız</b>.
								</div>';
								}
							echo '
							</div>
								<form method="POST" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>tam sayı değeri</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity2" onkeyup="calc();" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoTwitter(document.getElementById(\'postUrl\').value, document.getElementById(\'quantity2\').value, \'takipci\');" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# retweet ekle
if ( $sayfa == 'retweetEkle' )
{
?>
<script type="text/javascript">
function calc()
{
quantity = document.getElementById('quantity2').value;
rate = 0.00<?php echo $t_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate;
if(isNaN(result))
{
document.getElementById('cost').innerHTML = '0 TL';
}
else
{
document.getElementById('cost').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}
</script>
<?php
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Yeni Retweet Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
					if ( $t_limit == 0 ){
								echo '<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> Bölüm pasif konumdadır. Tekrar ediyoruz yeni bir çekim işlemi <b>başlatamazsınız</b>.
								</div>';
								}
							echo '
							</div>
								<form method="POST" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>tam sayı değeri</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity2" onkeyup="calc();" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoTwitter(document.getElementById(\'postUrl\').value, document.getElementById(\'quantity2\').value, \'retweet\');" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# favori ekle
if ( $sayfa == 'favoriEkle' )
{
?>
<script type="text/javascript">
function calc()
{
quantity = document.getElementById('quantity2').value;
rate = 0.00<?php echo $t_limit; ?>;
rate = rate.toFixed(3);
result = parseInt(quantity) * rate;
if(isNaN(result))
{
document.getElementById('cost').innerHTML = '0 TL';
}
else
{
document.getElementById('cost').innerHTML = parseFloat(result.toFixed(3)) + ' TL';
}
}
</script>
<?php
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Yeni Favori Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							<div id="icerik">';
					if ( $t_limit == 0 ){
								echo '<div class="alert alert-info">
									<i class="icon-info-sign icon-large"></i> Bölüm pasif konumdadır. Tekrar ediyoruz yeni bir çekim işlemi <b>başlatamazsınız</b>.
								</div>';
								}
							echo '
							</div>
								<form method="POST" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="url" class="control-label">URL <small>http:// ile</small></label>
										<div class="controls">
											<input type="text" placeholder="URL Girin" name="postUrl" id="postUrl" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="abone" class="control-label">Çekim Sayı <small>tam sayı değeri</small></label>
										<div class="controls">
											<input type="text" placeholder="Çekim Sayısı" name="abone" id="quantity2" onkeyup="calc();" data-rule-digits="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Maliyet</label>
										<div class="controls">
											<font size="+6"><div id="cost" style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;"style="font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif;-webkit-font-smoothing:antialiased color:#1C2A47; font-size:30px;">0 TL</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="button" onclick="selcoTwitter(document.getElementById(\'postUrl\').value, document.getElementById(\'quantity2\').value, \'favori\');" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# ödeme
if ( $sayfa == 'odeme' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = " WHERE durum NOT IN('0')";
} elseif ( $goster == 'onaysiz' ) {
$sirala = " WHERE durum = '0'";
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Ödemeler</span>
														<div class="actions">
														<a href="?sayfa=odeme" rel="tooltip" title="Ödemeler">
														<i class="icon-credit-card"></i></a>
														<a href="?sayfa=odeme&goster=onaysiz" rel="tooltip" title="Onaysız Ödeme">
														<i class="icon-money"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Sipariş Kodu</th>
																	<th>Ödeme Türü</th>
																	<th>Tutarı</th>
																	<th>Ödeme Durumu</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM odemeler$sirala ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$siparis_kodu = $cek['siparis_kodu'];
		$odeme_tur = $cek['odeme_tur'];
		if ( intval($odeme_tur) ){
		$odeme_tur = mysql_result(mysql_query("SELECT * FROM banka_hesaplari WHERE id = '$odeme_tur'"), 0, 'banka');
		}
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$tutar = $cek['tutar'];
		$aciklama = $cek['aciklama'];
		$durum = $cek['durum'];
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $durum == 0 ) {
		$islem = '<center><a href="?sayfa=odemeIslem&tur=onayla&id='.$id.'" rel="tooltip" title="Onayla">
		<i class=" icon-ok"></i></a> | <a href="?sayfa=odemeIslem&tur=iptal&id='.$id.'" rel="tooltip" title="İptal Et">
		<i class="icon-remove-sign"></i></a></center>';
		$islem_durum = '<font color="red">Onay Bekliyor</font>';
		}elseif ( $durum == 1 and $odeme_tur == 'PayPal' ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=odeme&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		$islem_durum = '<font color="green">Onaylandı</font> (Online İşlem)';
		}elseif ( $durum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=odeme&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		$islem_durum = '<font color="green">Onaylandı</font>';
		}elseif ( $durum == 2 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=odeme&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		$islem_durum = '<font color="blue">Ödeme Bekleniyor</font>';
		}elseif ( $durum == 3 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=odeme&id='.$id.'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center>';
		$islem_durum = '<font color="red">İptal Edildi</font>';
		}
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></th>
				<td><a href="javascript:void(0);" onclick="aciklama'.$id.'();"><b>'.$siparis_kodu.'</b></a></td>
				<td>'.$odeme_tur.'</th>
				<td>'.$tutar.' TL</td>
				<td>'.$islem_durum.'</th>
				<td>'.$islem.'</td>
			</tr>';
			echo '<script>
				function aciklama'.$id.' ()
				{
				$.jGrowl(\'Banka: <b>'.$odeme_tur.'</b><br>Sip. No: <b>'.$siparis_kodu.'</b><br>Açıklama: <b>'.$aciklama.'</b>\', { life: 100000 });
				}
				</script>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# ödeme işlem
if ( $sayfa == 'odemeIslem' )
{
$tur = $_GET['tur'];
$id = intval($_GET['id']);
if ( $tur == 'onayla' ){
# ödeme gerekli kısımları çek
$sorgu = mysql_query("SELECT * FROM odemeler WHERE id = '$id'");
$tutar = mysql_result($sorgu, 0, 'tutar');
$uye_id = mysql_result($sorgu, 0, 'uye_id');
# üye bakiye çek
$sorgu2 = mysql_query("SELECT * FROM uyeler WHERE id = '$uye_id'");
$uye_bakiye = mysql_result($sorgu2, 0, 'bakiye');
# onaylama ve bakiye ekleme işlemleri
$yeni_bakiye = $uye_bakiye + $tutar;
$onayla = mysql_query("UPDATE odemeler SET durum = '1' WHERE id = '$id'");
if ( $onayla ){
mysql_query("UPDATE uyeler SET bakiye = '$yeni_bakiye' WHERE id = '$uye_id'");
echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>';
} else {
echo '<script>alert("Saptanamayan Hata!");</script>';
}
} elseif ( $tur == 'iptal' ){
$iptal = mysql_query("UPDATE odemeler SET durum = '3' WHERE id = '$id'");
if ( $iptal ){
echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>';
} else {
echo '<script>alert("Saptanamayan Hata!");</script>';
}
}
}

# banka
if ( $sayfa == 'banka' )
{
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Hesap Bilgileri</span>
														<div class="actions">
														<a href="?sayfa=bankaEkle" rel="tooltip" title="Hesap Ekle">
														<i class="icon-plus"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Banka</th>
																	<th>Hesap Sahibi</th>
																	<th>Şube No</th>
																	<th>Hesap No</th>
																	<th>IBAN</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
		$yaz= mysql_query("SELECT * FROM banka_hesaplari ORDER BY id ASC");
		while($cek=mysql_fetch_assoc($yaz)){

		echo '<tr>
					<td>'.$i.'</td>
                      <td>'.$cek['banka'].'</td>
                      <td>'.$cek['hesap_sahibi'].'</td>
                      <td>'.$cek['sube'].'</td>
                      <td>'.$cek['hesap_numara'].'</td>
                      <td>'.$cek['iban'].'</td>
					  <td><center><a href="?sayfa=islemsil&tur=banka&id='.$cek['id'].'" rel="tooltip" title="Sil">
		<i class=" icon-trash"></i></a></center></td>
             </tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}

# hesap ekle
if ( $sayfa == 'bankaEkle' )
{
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Hesap Ekle</span>
							</div>
							<div class="box-body box-body-nopadding">
							';
# post işlemleri
$banka = mysql_real_escape_string(htmlspecialchars(trim($_POST['banka'])));
$isim = mysql_real_escape_string(htmlspecialchars(trim($_POST['isim'])));
$sube = mysql_real_escape_string(htmlspecialchars(trim($_POST['sube'])));
$hesap = mysql_real_escape_string(htmlspecialchars(trim($_POST['hesap'])));
$iban = mysql_real_escape_string(htmlspecialchars(trim($_POST['iban'])));

if ( $banka ) {
$ekle = mysql_query("INSERT INTO banka_hesaplari (banka, hesap_sahibi, sube, hesap_numara, iban) VALUES ('$banka', '$isim', '$sube', '$hesap', '$iban');");
if ($ekle){
echo '<div class="alert alert-success">
<strong>İŞLEM: </strong>Hesap ekleme işlemi tamamlanmıştır, yönlendiriliyorsunuz.
</div><meta http-equiv="refresh" content="3;URL=?sayfa=banka">';
} else {
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>';
}
}
							echo '
								<form method="POST" action="" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="url" class="control-label">Banka İsim</label>
										<div class="controls">
											<input type="text" name="banka" value="" class="span5" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Hesap Sahibi</label>
										<div class="controls">
											<input type="text" name="isim" value="" class="span5" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Şube No</label>
										<div class="controls">
											<input type="text" name="sube" value="" class="span5" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">Hesap No</label>
										<div class="controls">
											<input type="text" name="hesap" value="" class="span5" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="url" class="control-label">IBAN</label>
										<div class="controls">
											<input type="text" name="iban" value="" class="span5" data-rule-url="true" data-rule-required="true">
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# ödeme ekle
if ( $sayfa == 'odemeBildir' and $u_bayi == 0 )
{
$id = intval($_GET['id']);
$tur = $_GET['tur'];
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Ödeme Sipariş</span>
							</div>
							<div class="box-body box-body-nopadding">
							';
# post işlemleri
$odemeyontem = trim($_POST['odemeyontem']);
$tutar = trim($_POST['tutar']);
$siparis_kodu=rand(5,10000000000);
$tarih = time();
if ( $odemeyontem and $tutar ) {
$ekle = mysql_query("INSERT INTO odemeler (odeme_tur, uye_id, tutar, siparis_kodu, tarih) VALUES ('$odemeyontem', '$u_id', '$tutar', '$siparis_kodu', '$tarih')");
if ($ekle){
echo '<div class="alert alert-success">
<strong>İŞLEM: </strong>Ödeme siparişiniz başarıyla alınmıştır. Gönderme işlemi sırasında girmeniz gereken açıklama; Sipariş Numara: <b>'.$siparis_kodu.'</b>
</div><meta http-equiv="refresh" content="3;URL=?sayfa=odeme">';
} else {
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>';
}
}
							echo '
								<form method="POST" action="" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="textfield" class="control-label">Ödeme Yöntemi</label>
										<div class="controls">
											<div class="input-xlarge">
											<select name="odemeyontem" id="select" class="chosen-select">
												';
		$yaz= mysql_query("SELECT * FROM banka_hesaplari ORDER BY id ASC");
		while($cek=mysql_fetch_assoc($yaz)){
			echo '<option value="'.$cek['id'].'">'.$cek['banka'].'</option>';
		}
		if ( $tur == 'paypal' ) $tick = ' selected'; else $tick = '';
		if ( $paypal_mail ) echo '<option value="PayPal"'.$tick.'>Paypal (Kredi Kartı ile Güvenli Ödeme)</option>';
												echo'
											</select></div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label"></label>
										<div class="controls">
											<input name="tutar" type="text" value="0" style="border:#CCC 1px solid; text-align:center; padding:30px; font-size:20px; margin-right:15px; width: 50px;" /> TL
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# ödeme açıklama ekle
if ( $sayfa == 'odemeAciklama' and $u_bayi == 0 )
{
$id = intval($_GET['id']);
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Ödemeye Dair Bildirim (#'.$id.')</span>
							</div>
							<div class="box-body box-body-nopadding">
							';
							# post işlemleri
$aciklama = mysql_real_escape_string(htmlspecialchars(trim($_POST['aciklama'])));
if ( $aciklama ) {
$ekle = mysql_query("UPDATE odemeler SET aciklama='$aciklama', durum = '0' WHERE id = '$id' and durum = '2'");
if ($ekle){
echo '<div class="alert alert-success">
<strong>İŞLEM: </strong>Ödeme siparişinizin açıklaması başarıyla alınmıştır., yönlendiriliyorsunuz.
</div><meta http-equiv="refresh" content="3;URL=?sayfa=odeme">';
} else {
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>';
}
}
							echo '
								<form method="POST" action="" class="form-horizontal form-bordered" id="bb">
									<div class="control-group">
										<label for="aciklama" class="control-label">Açıklama <small>dekont ile uyuşmalıdır</small></label>
										<div class="controls">
											<textarea name="aciklama" id="tt333" class="span12" rows="7" placeholder=""></textarea>
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# ödeme paypal yolu
if ( $sayfa == 'PayPal' and $u_bayi == 0 )
{
$id = intval($_GET['id']);
$tur = mysql_result(mysql_query("SELECT odeme_tur FROM odemeler WHERE id = '$id'"), 0, 'odeme_tur');
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>PayPal ( Kredi Kartı ile Online Ödeme )</span>
							</div>
							<div class="box-body box-body-nopadding">
							';
	if ($id and $tur == 'PayPal'){
	$cek = mysql_query("SELECT * FROM odemeler WHERE id = '$id'");
	$siparis_no = mysql_result($cek, 0, 'siparis_kodu');
	$tutar = mysql_result($cek, 0, 'tutar');

	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="form-horizontal form-bordered" id="payPalForm">
	<input type="hidden" name="item_number" value="'.$siparis_no.'">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="'.$paypal_mail.'" />
	<input type="hidden" name="currency_code" value="TRY" />
	<input type="hidden" name="item_name" id="item_name" value="'.$tutar.' TL degerinde bakiye" />
	<input type="hidden" name="amount" value="'.$tutar.'" />
</form>';
echo '<br><center><img src="img/loading.gif" /><br>
Güvenli ödeme yöntemi olan PayPal sitesine yönlendiriliyorsunuz.</center><br>';
	} else {
	echo '<script>location="?sayfa=odeme";</script>';
	}
?>
<script>
window.onload = function(){ document.getElementById('payPalForm').submit(); }
</script>
<?php
			echo '
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# profil
if ( $sayfa == 'profil' )
{
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-user"></i>
								<span>'.$u_ad.'\'s Profil (düzenleme)</span>
							</div>
							<div class="box-body box-body-nopadding">';
$ad = mysql_real_escape_string(htmlspecialchars(trim($_POST['ad'])));
$tel = mysql_real_escape_string(htmlspecialchars(trim($_POST['tel'])));
$mail = mysql_real_escape_string(htmlspecialchars(trim($_POST['mail'])));
$soyad = mysql_real_escape_string(htmlspecialchars(trim($_POST['soyad'])));

if ( $ad && $tel && $mail && $soyad ) {
$ekle = mysql_query("UPDATE uyeler SET ad='$ad', soyad = '$soyad', mail = '$mail', tel = '$tel' WHERE id = '$u_id'");
if ($ekle){
echo '<div class="alert alert-success">
<strong>İŞLEM: </strong>Bilgileriniz başarıyla düzenlenmiştir, yönlendiriliyorsunuz.
</div><meta http-equiv="refresh" content="4;URL=?sayfa=profil">';
} else {
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>';
}
}
							echo'
								<form action="?sayfa=profil" method="post" class="form-horizontal form-bordered">
									<div class="control-group">
										<label for="textfield" class="control-label">Ad</label>
										<div class="controls">
											<input type="text" name="ad" value="'.$u_ad.'">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Soyad</label>
										<div class="controls">
											<input type="text" name="soyad" value="'.$u_soyad.'">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Email</label>
										<div class="controls">
											<div class="input-prepend">
												<span class="add-on">@</span>
												<input type="text" name="mail" value="'.$u_mail.'">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Telefon</label>
										<div class="controls">
											<input type="text" name="tel" value="'.$u_tel.'">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" name="gonder" class="button button-basic-blue">Kaydet</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-cogs"></i>
								<span>'.$u_ad.'\'s Profil (şifre değiştirme)</span>
							</div>
							<div class="box-body box-body-nopadding">';
$sifre1 = mysql_real_escape_string(htmlspecialchars(trim($_POST['sifre1'])));
$sifre2 = mysql_real_escape_string(htmlspecialchars(trim($_POST['sifre2'])));
$eskisifre = mysql_real_escape_string(htmlspecialchars(trim($_POST['eskisifre'])));	

	
if ( $sifre1 && $sifre2 && $eskisifre)
{
if ($sifre1 != $sifre2 || $u_sifre != $eskisifre)
{
echo '<div class="alert alert-error">
<strong>HATA: </strong>Yeni parolalarınız ya da eski şifreniz uyuşmamaktadır.
</div>';
}else{
$g = mysql_query("UPDATE uyeler SET sifre='$sifre1' WHERE id = '$u_id'");
if ($g){
echo '<div class="alert alert-success">
<strong>İŞLEM: </strong>Şifreniz başarıyla güncellenmiştir.
</div>'; }else{
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>'; }
}
}
							echo'
								<form action="?sayfa=profil" method="post" class="form-horizontal form-bordered">
									<div class="control-group">
										<label for="textfield" class="control-label">Geçerli Parola</label>
										<div class="controls">
											<input type="password" name="eskisifre" value="">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Yeni Parola</label>
										<div class="controls">
											<input type="password" name="sifre1" value="">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Yeni Parola (tekrar)</label>
										<div class="controls">
											<input type="password" name="sifre2" value="">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" name="gonder2" class="button button-basic-blue">Güncelle</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
	
}

# destek
if ( $sayfa == 'destek' )
{
$goster = mysql_real_escape_string($_GET['goster']);
if ( $goster == '' ) {
$sirala = '';
} elseif ( $goster == 'islemsiz' ) {
$sirala = " WHERE durum = '0'";
}
echo '								<div class="container-fluid" id="content-area">
										<div class="row-fluid">
											<div class="span12">
												<div class="box">
													<div class="box-head">
														<i class="icon-table"></i>
														<span>Destek (ticket)</span>
														<div class="actions">
														<a href="?sayfa=destek" rel="tooltip" title="Tüm Ticketlar">
														<i class="icon-lock"></i></a>
														<a href="?sayfa=destek&goster=islemsiz" rel="tooltip" title="İşlemsiz Ticket">
														<i class="icon-unlock"></i></a>
														</div>
													</div>
													<div class="box-body box-body-nopadding">
													<table class="table table-nomargin table-bordered dataTable table-striped table-hover">
															<thead>
																<tr>
																	<th></th>
																	<th>Tarih</th>
																	<th>Üye</th>
																	<th>Başlık</th>
																	<th>Kategori</th>
																	<th>Durum</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															';
															$i = 1;
$yaz= mysql_query("SELECT * FROM ticket$sirala ORDER BY id DESC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$konu = $cek['konu'];
		$kategori = $cek['kategori'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$tickdurum = $cek['durum'];
		$tickcevap = mysql_query("SELECT cevaplayan_id,uye_id FROM ticket_cevap WHERE ticket_id = '$id' ORDER BY id DESC");
		$tickuyeid = mysql_result($tickcevap, 0, 'uye_id');
		$tickcevaylayanid = mysql_result($tickcevap, 0, 'cevaplayan_id');
		
		$uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad from uyeler where id = '$uye_id'");
		$uye_ad = ucwords(mysql_result($sorguu, 0, 'ad'));
		
		if ( $tickdurum == 0 ) {
		$islem = '
		<center><a href="?sayfa=islemiptal&tur=ticket&id='.$id.'" rel="tooltip" title="Sonuçlandır">
		<i class=" icon-ok"></i></a> | <a href="?sayfa=islemsil&tur=ticket&id='.$id.'" rel="tooltip" title="Sil">
		<i class="icon-trash"></i></a></center>';
		}elseif ( $tickdurum == 1 ) {
		$islem = '<center><a href="?sayfa=islemsil&tur=ticket&id='.$id.'" rel="tooltip" title="Sil">
		<i class="icon-trash"></i></a></center>';
		}
		
		if ( ($tickuyeid == '') & ($tickcevaylayanid == '') ){ $tick_durum = '<b>Yanıt Bekleniyor</b>'; }elseif ( $tickuyeid != '' & $tickcevaylayanid == 0){ $tick_durum = '<font color="green"><b>Müşteri Yanıtladı</b></font>'; }elseif ( $tickcevaylayanid != '' & $tickuyeid == 0 ) { $tick_durum = '<font color="red"><b>Yetkili Yanıtladı</b></font>'; }
		if ( $tickdurum == 1 ) $tick_durum2 = '<i>Sonuçlandı</i>'; else $tick_durum2 = $tick_durum;
		
		echo '<tr>
				<td>'.$i.'</td>
				<td>'.$tarih.'</td>
				<td><a href="?sayfa=uyeduzenle&id='.$uye_id.'">'.$uye_ad.'</a></td>
				<td><a href="?sayfa=destekDetay&id='.$id.'">'.$konu.'</a></td>
				<td>'.$kategori.'</td>
				<td>'.$tick_durum2.'</td>
				<td>'.$islem.'</td>
			</tr>';
			$i++;
		}
																echo '	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>';
}



# hizli erişim
if ( $sayfa == 'hizliErisim' )
{
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-list"></i>
								<span>Hizli Erişim</span>
								<div class="actions">
									<a href="?sayfa=linkEkle" rel="tooltip" title="Hizli erişim linki ekleyin."><i class="icon-plus"></i> Hizli Erişim Ekle</a>
								</div>
							</div>
							<div class="box-body box-body-nopadding">
								<table class="table table-striped table-invoice">
									<thead>
										<tr>
											<th>Sayfa Adı</th>
											<th>URL</th>
											<th class="tr"></th>
										</tr>
									</thead>
									<tbody>';
$yaz= mysql_query("SELECT * FROM hizli_erisim WHERE uye_id = '$u_id' ORDER BY id ASC");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$h_id = $cek['h_id'];
		$sayfa = mysql_result(mysql_query("SELECT sayfa FROM hizli_erisim_linkler WHERE id = '$h_id'"), 0, 'sayfa');
		$url = mysql_result(mysql_query("SELECT url FROM hizli_erisim_linkler WHERE id = '$h_id'"), 0, 'url');
		echo '<tr>
                      <td>'.$sayfa.'</td>
                      <td>'.$_SERVER['HTTP_HOST'].'/index.php'.$url.'</td>
                      <td class="total"><a href="?sayfa=islemsil&tur=erisim&id='.$id.'" rel="tooltip" title="Sil"><i class="icon-remove"></i></a></td>
             </tr>';
		}
										echo '								
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid"></div>
			</div>
		</div>
	</div>';
}

# destek detay
if ( $sayfa == 'destekDetay' )
{
$id = intval($_GET['id']);
$yaz= mysql_query("SELECT * FROM ticket WHERE id = '$id'");
		while($cek=mysql_fetch_assoc($yaz)){
		$id = $cek['id'];
		$konu = $cek['konu'];
		$kategori = $cek['kategori'];
		$tarih = $cek['tarih'];
		$tarih = turkcetarih(date("j M Y, D H:i", $tarih));
		$gonderen_uye_id = $cek['uye_id'];
		$sorguu = mysql_query("select ad,soyad from uyeler where id = '$gonderen_uye_id'");
		$uye_ad = mysql_result($sorguu, 0, 'ad');
		$uye_soyad = mysql_result($sorguu, 0, 'soyad');
		$uye_isim = "$uye_ad $uye_soyad";
		$tickdurum = $cek['durum'];
		$tickcevap = mysql_query("SELECT cevaplayan_id,uye_id FROM ticket_cevap WHERE ticket_id = '$id' ORDER BY id DESC");
		$tickuyeid = mysql_result($tickcevap, 0, 'uye_id');
		$tickcevaylayanid = mysql_result($tickcevap, 0, 'cevaplayan_id');
		if ( ($tickuyeid == '') & ($tickcevaylayanid == '') ){ $tick_durum = '<b>Yanıt Bekleniyor</b>'; }elseif ( $tickuyeid != '' & $tickcevaylayanid == 0){ $tick_durum = '<font color="green"><b>Müşteri Yanıtladı</b></font>'; }elseif ( $tickcevaylayanid != '' & $tickuyeid == 0 ) { $tick_durum = '<font color="red"><b>Yetkili Yanıtladı</b></font>'; }
		if ( $tickdurum == 1 ) $tick_durum2 = '<i>Sonuçlandı</i>'; else $tick_durum2 = $tick_durum;
		
echo '		<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-comments"></i>
								<span>'.$konu.' [ '.$tick_durum2.' ]</span>
								<div class="actions">
									<a href="#" rel=\'tooltip\' title="Save conversation"><i class="icon-save"></i></a>
									<a href="#" rel=\'tooltip\' title="Show history" data-placement="left"><i class="icon-time"></i></a>
								</div>
							</div>
							<div class="box-body box-body-nopadding">
								<ul class="messages">
									<li class="left">
										<div class="image">
											<img src="img/user.png" width="60" alt="">
										</div>
										<div class="message">
											<span class="name">'.ucwords($uye_isim).'</span> (müşteri)
											<p>'.str_replace("\n", "<br />", $cek['icerik']).'</p>
											<span class="time">
												'.$tarih.'
											</span>
										</div>
									</li>';
									}

# ticket yazışmaları
$cek2= mysql_query("SELECT * FROM ticket_cevap WHERE ticket_id = '$id'");
while($yaz2=mysql_fetch_assoc($cek2)){
	$cevap_id = $yaz2['id'];
	$cevap_cevaplayan_id = $yaz2['cevaplayan_id'];
	$cevap_uye_id = $yaz2['uye_id'];
	$cevap_tarih = $yaz2['tarih'];
	$cevap_tarih = turkcetarih(date("j M Y, D H:i", $cevap_tarih));
	
	$sorguu = mysql_query("select ad,soyad from uyeler where id = '$cevap_uye_id'");
	$cevap_uye_ad = mysql_result($sorguu, 0, 'ad');
	$cevap_uye_soyad = mysql_result($sorguu, 0, 'soyad');
	$cevap_uye_isim = "$cevap_uye_ad $cevap_uye_soyad";
	
	$sorguu2 = mysql_query("select ad,soyad from uyeler where id = '$cevap_cevaplayan_id'");
	$yetkili_isim_ad = mysql_result($sorguu2, 0, 'ad');
	$yetkili_isim_soyad = mysql_result($sorguu2, 0, 'soyad');
	$yetkili_isim = "$yetkili_isim_ad $yetkili_isim_soyad";
	
	if ( $cevap_cevaplayan_id == 0 & $cevap_uye_id != 0) { $uye_isim2=$cevap_uye_isim; $mesaj_renk = 'left'; $yetki_isim = 'müşteri'; $imza='user'; }elseif ( $cevap_cevaplayan_id != 0 & $cevap_uye_id == 0 ) { $uye_isim2=$yetkili_isim; $mesaj_renk = 'right'; $imza='admin'; $yetki_isim = 'yetkili'; }
									
									echo '
									<li class="'.$mesaj_renk.'">
										<div class="image">
											<img src="img/'.$imza.'.png" width="60" alt="">
										</div>
										<div class="message">
											<span class="name">'.ucwords($uye_isim2).'</span> ('.$yetki_isim.')
											<p>'.str_replace("\n", "<br />", $yaz2['icerik']).'</p>
											<span class="time">
												'.$cevap_tarih.'
											</span>
										</div>
									</li>';
						}
								if ( $tickdurum == 0 )
								{
									echo '
									<form action="" method="post" class="mainForm">
									<li class="insert">
										<div class="text">
											<input type="text" name="message" placeholder="Buraya yaz..." class="input-block-level">
										</div>
										<div class="submit">
											<input type="submit" value="Ekle" class=\'button button-highlighted\'>
										</div>
									</li>
									</form>';
								}
$tick_cevap_icerik = mysql_real_escape_string($_POST['message']);
$tarih = time();
if ( $tick_cevap_icerik )
{
	$ekle=mysql_query("insert into ticket_cevap (`ticket_id`,`cevaplayan_id`,`icerik`,`tarih`) values ('$id','$u_id','$tick_cevap_icerik','$tarih')");
	if ($ekle){ 
	mysql_query("UPDATE ticket SET okunma = '0' WHERE id = '$id'");
	echo '<script>location="?sayfa=destekDetay&id='.$id.'"</script>';
	 } else { echo '<script>alert("Bilinmeyen bir Sorun Olustu.")</script>'; }
}
									echo '
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# destek talebi ekle
if ( $sayfa == 'destekEkle' )
{
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-plus"></i>
								<span>Destek Talebi Oluştur</span>
							</div>
							<div class="box-body box-body-nopadding">
							';
# post işlemleri
$baslik=mysql_real_escape_string(htmlspecialchars($_POST['subject']));
$aciklama=mysql_real_escape_string($_POST['message']);
$category=mysql_real_escape_string(htmlspecialchars($_POST['category']));
if ($baslik && $aciklama && $category){
$tarih = time();
$ekle=mysql_query("insert into ticket (`uye_id`,`konu`,`icerik`,`kategori`,`tarih`) values ('$u_id','$baslik','$aciklama','$category','$tarih')");
if ($ekle){
echo '<div class="alert alert-success">
<strong>İŞLEM: </strong>Destek talebiniz başarıyla alınmıştır.
</div><meta http-equiv="refresh" content="3;URL=?sayfa=destek">';
} else {
echo '<div class="alert">
<strong>HATA: </strong>Sunucu hatasından ötürü işleminiz tamamlanamadı.
</div>';
}
}
							echo '
								<form method="POST" action="" class="form-horizontal form-bordered form-wysiwyg" id="bb">
									<div class="control-group">
										<label for="textfield" class="control-label">Konu</label>
										<div class="controls">
											<input type="text" name="subject" id="textfield" placeholder="" class="input-block-level">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Kategori</label>
										<div class="controls">
											<div class="input-xlarge">
							<select name="category" id="select" class="chosen-select">
							<option value="Facebook">Facebook</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Muhasebe">Muhasebe</option>
                            <option value="Diğer">Diğer</option>
							</select></div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">Mesajınız</label>
										<div class="controls">
											<textarea name="message" id="tt333" class="span12" rows="7" placeholder=""></textarea>
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="button button-basic-blue" value="EKLE">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>';
}

# hakkında
if ( $sayfa == 'hakkinda' )
{
echo '<div class="container-fluid" id="content-area">
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-head">
								<i class="icon-reorder"></i>
								<span>Sistem Hakkında</span>
							</div>
							<div class="box-body">
								'.$hakkimizda.'
							</div>
						</div>
					</div>
				</div>
			</div>';
}
# siparişleri iptal etme
if ( $sayfa == 'islemiptal' )
{
$id = intval($_GET['id']);
$tur = mysql_real_escape_string($_GET['tur']);

if ( $tur == 'post' ){
$a = mysql_query("UPDATE begeniler SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'sayfa' ){
$a = mysql_query("UPDATE sayfalar SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'abone' ){
$a = mysql_query("UPDATE aboneler SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'takipci' ){
$a = mysql_query("UPDATE takipciler SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'retweet' ){
$a = mysql_query("UPDATE retweet SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'favori' ){
$a = mysql_query("UPDATE favoriler SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'liste' ){
$a = mysql_query("UPDATE listeler SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'youtube' ){
$a = mysql_query("UPDATE youtube SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'askfm' ){
$a = mysql_query("UPDATE askfm SET durum = '2' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'odeme' ){
$a = mysql_query("UPDATE odemeler SET durum = '3' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'ticket' ){
$a = mysql_query("UPDATE ticket SET durum = '1' WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
}

}

# siparişleri silme
if ( $sayfa == 'islemsil' )
{
$id = intval($_GET['id']);
$tur = mysql_real_escape_string($_GET['tur']);

if ( $tur == 'post' ){
$a = mysql_query("DELETE FROM begeniler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'sayfa' ){
$a = mysql_query("DELETE FROM sayfalar WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
}  elseif ( $tur == 'liste' ){
$a = mysql_query("DELETE FROM listeler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
}  elseif ( $tur == 'paylasim' ){
$a = mysql_query("DELETE FROM post_paylasim WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'abone' ){
$a = mysql_query("DELETE FROM aboneler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'takipci' ){
$a = mysql_query("DELETE FROM takipciler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'retweet' ){
$a = mysql_query("DELETE FROM retweet WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'favori' ){
$a = mysql_query("DELETE FROM favoriler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'liste' ){
$a = mysql_query("DELETE FROM listeler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'youtube' ){
$a = mysql_query("DELETE FROM youtube WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'askfm' ){
$a = mysql_query("DELETE FROM askfm WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'odeme' ){
$a = mysql_query("DELETE FROM odemeler WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'banka' ){
$a = mysql_query("DELETE FROM banka_hesaplari WHERE id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'ticket' ){
$a = mysql_query("DELETE FROM ticket WHERE id = '$id'");
if ( $a ){
mysql_query("DELETE FROM ticket_cevap WHERE ticket_id = '$id'");
echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; 
} else { 
echo '<script>alert("Saptanamayan Hata!");</script>';
}
} elseif ( $tur == 'uye' ){
$a = mysql_query("DELETE FROM uyeler WHERE id = '$id'");
if ( $a ){ 
mysql_query("DELETE FROM begeniler WHERE uye_id = '$id'");
mysql_query("DELETE FROM sayfalar WHERE uye_id = '$id'");
mysql_query("DELETE FROM aboneler WHERE uye_id = '$id'");
mysql_query("DELETE FROM youtube WHERE uye_id = '$id'");
mysql_query("DELETE FROM askfm WHERE uye_id = '$id'");
mysql_query("DELETE FROM takipciler WHERE uye_id = '$id'");
echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; 
}else{ 
echo '<script>alert("Saptanamayan Hata!");</script>'; }
}

}

# siparişleri aktif etme
if ( $sayfa == 'islemaktif' )
{
$id = intval($_GET['id']);
$tur = mysql_real_escape_string($_GET['tur']);

if ( $tur == 'post' ){
$a = mysql_query("UPDATE begeniler SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'sayfa' ){
$a = mysql_query("UPDATE sayfalar SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'abone' ){
$a = mysql_query("UPDATE aboneler SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'takipci' ){
$a = mysql_query("UPDATE takipciler SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'retweet' ){
$a = mysql_query("UPDATE retweet SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'favori' ){
$a = mysql_query("UPDATE favoriler SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'liste' ){
$a = mysql_query("UPDATE listeler SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'youtube' ){
$a = mysql_query("UPDATE youtube SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'askfm' ){
$a = mysql_query("UPDATE askfm SET durum = '0' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'odeme' ){
$a = mysql_query("UPDATE odemeler SET durum = '3' WHERE uye_id = '$u_id' and id = '$id' and durum = '2'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
} elseif ( $tur == 'ticket' ){
$a = mysql_query("UPDATE ticket SET durum = '1' WHERE uye_id = '$u_id' and id = '$id'");
if ( $a ) echo '<script>location="'.$_SERVER['HTTP_REFERER'].'";</script>'; else echo '<script>alert("Saptanamayan Hata!");</script>';
}

}

# çıkış
if ( $sayfa == 'cikis' )
{
session_destroy();
echo '<script>location="index.php";</script>';
}
?>
</body>
</html>
<?php
} else {
header("location: login.php");
}
?>