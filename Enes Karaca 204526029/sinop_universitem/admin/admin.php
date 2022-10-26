<?
session_start();

include("guvenlik.php");

include("../baglanti.php");

include("fckeditor/fckeditor.php") ;

if(isset($_GET['s']))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="orta";
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sinop Üniversitesi Admin Paneli </title>
<link rel="shortcut icon" href="admin_images/logo.png">
<link href="css/admin.css" type="text/css" rel="stylesheet"/>	
</head>

<body>
	<div>
		<!--Banner başlangıç-->
		
			<div class="banner_ust">
				<div class="banner_ust_govde">
					<div class="bayrak"><img src="admin_images/bayrak.png" width="16px" height="11px"/></div>
					<div class="turkce">TÜRKÇE</div>
					
					<div class="ataturk"><img src="admin_images/ataturk.png" width="77px" height="34px"/></div>
			    </div>
		    </div>
		   <div class="hizalama_bitir"></div>
		   
		
		   <!--Banner menu ikinci kısım-->
		   <div class="banner_alt">
			   <div class="banner_alt_govde">
				  <div class="logo_ve_yazi_div">
				   <div class="logo"><img src="admin_images/logo.png" width="80px" height="80px"/></div>
				   <div class="sinop_uni_yazi">SİNOP ÜNİVERSİTESİ</div>
			      </div>
				  <div class="banner_menu_yazilar_divimiz">
					  <a href="admin.php"><div class="menuler">
						  <img src="admin_images/home.png" width="15px" height="15px"/>&nbsp;&nbsp;Ana Sayfa </div></a>
					  <a href="admin.php?s=kullanici"><div class="menuler">
						  <img src="admin_images/kullanici.png" width="15px" height="15px"/>&nbsp;Kullanıcılar</div></a>
					  <a href="admin.php?s=sayfalar"><div class="menuler">
						  <img src="admin_images/sayfa_icerik.png" width="15px" height="15px"/>&nbsp;&nbsp;Sayfa İçerileri</div></a>
					  <a href="admin.php?s=duyurular"><div class="menuler">
						  <img src="admin_images/duyurular.png" width="15px" height="15px"/>&nbsp;&nbsp;Duyurular</div></a>
					  <a href="admin.php?s=haberler"><div class="menuler">
						  <img src="admin_images/haberler.png" width="15px" height="15px"/>&nbsp;&nbsp;Haberler</div></a>
					  <a href="cikis.php"><div class="cikis">
						  <img src="admin_images/cikis.png" width="20px" height="21px"/></div></a>
					  <div class="ucgen_kirmizim"><img src="admin_images/ucgen_kirmizi.png"width="50px" height="50px"/></div>
					  <div class="yuvarlak_beyaz"><img src="admin_images/yuvarlak_beyaz.png" width="50px" height="50px"/></div>
		          </div>
				  </div>  
				   
				      
			   </div>
		   </div>
		   <!--Banner menu ikinci kısım bitiş-->
	       <!--Banner bitiş-->
		
		
	<div class="ana_govde">
		<div class="ic_body">
			<?
        	include($sayfa.".php");
			?>
		</div>
	</div>
		
		
		
		
		
		
</div>
</body>
</html>