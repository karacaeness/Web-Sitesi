<?

include("baglanti.php");

if(isset($_GET['s']))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="orta";
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sinop Üniversitesi</title>
<link rel="shortcut icon" href="images/logo.png">
<link href="css/ana.css" type="text/css" rel="stylesheet"/>
</head>
<body>
	<div>
		
			<!--Banner başlangıç-->
		
			<div class="banner_ust">
				<div class="banner_ust_govde">
					<div class="bayrak"><img src="images/bayrak.png" width="16px" height="11px"/></div>
					<div class="turkce">TÜRKÇE</div>
					<div class="asagiok"><img src="images/asagi_ok.png" width="7px" height="8px"/></div>
					<div class="ataturk"><img src="images/ataturk.png" width="77px" height="34px"/></div>
			    </div>
		    </div>
		   <div class="hizalama_bitir"></div>
		  <!--Banner menu ikinci kısım-->
		  
		   <div class="banner_alt">
			   <div class="banner_alt_govde">
				  <div class="logo_ve_yazi_div">
				   <a href="index.php"><div class="logo"><img src="images/logo.png" width="80px" height="80px"/></div></a>
				   <a href="index.php"><div class="sinop_uni_yazi">SİNOP ÜNİVERSİTESİ</div></a>
			      </div>
				  <div class="banner_menu_yazilar_div">
					  
					<div>
					  <a href="index.php"><div class="menuler">ÜNİVERSİTEMİZ </div></a>
						
					<?
						$sql=" select * from sayfalar order by s_id asc";
						$sql_cls=mysql_query($sql);
						while($veri=mysql_fetch_assoc($sql_cls))
						{
                	?>
                		<a href="index.php?s=sayfalar&sid=<? echo $veri['s_id'];?>">
							<div class="menuler"><? echo $veri['s_baslik'];?></div></a>
                    <?
						}
					?>
					</div>
					  
					  
					  <div class="uc_cizgi"></div>
					  <div class="arama_butonu"></div>
					 
				  </div>  
				      <div class="ucgen_kirmizi"><img src="images/ucgen_kirmizi.png"width="50px" height="50px"/></div>
					  <div class="yuvarlak_beyaz"><img src="images/yuvarlak_beyaz.png" width="50px" height="50px"/></div>
			   </div>
		   </div>
		   <!--Banner menu ikinci kısım bitiş-->
	       <!--Banner bitiş-->
		
		        <div class="hizalama_bitir"></div>
		
		   <!--body baslangıc-->
		
		<div style= "margin:auto;">
		<? 
			include($sayfa.".php");//orta.php
		?>
    	</div>
		
		<!--body bitis-->
		  <!--Turuncu Foother Ustu Başlangıç-->
		    <div class="turuncu_ana_div">
				<div class="turuncu_govde">
					<div class="turuncu_yazi1">SİNOP ÜNİVERSİTESİ</div>
					<div class="turuncu_fotograf"><img src="images/turuncu_fotograf.svg" width="76px" height="76px"/></div>
					<div class="turuncu_yazi2">Mutlu Şehir Sinopun Mutlu Universitesi</div>
				</div>
		    </div>
		    <div class="hizalama_bitir"></div>
		  <!--Turuncu Foother Ustu Bitiş-->
		
		  <!--FootherBaşlangıç-->
		     <div class="fother_ana_div">
				 <div class="fother_govde">
					 
					 <div class="fother_yazilar1_div">
						 <div class="fother_yazi_baslik">ÜNİVERSİTEMİZ</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi1">Kısa Tanıtım</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi2">Misyon-Vizyon</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi3">Kalite Politikasi</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi4">Araştırma Politkasi</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi5">Kalite El Kitabi</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi6">Tanıtım Videolari</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi7">İletişim</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi8">Evrak Doğrulama</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi9">KVKK</div>
						 <div class="hizalama_bitir"></div>
						 
					 </div>
					 
					 <div class="fother_yazilar1_div">
						 <div class="fother_yazi_baslik">AKADEMİK</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi1">Fakülteler</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi2">Ensitüler</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi3">Yüksekokullar</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi4">Meselek Yüksekokulları</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi5">Arastırma Merkezleri</div>
						 <div class="hizalama_bitir"></div>
					 </div>
					 <div class="fother_yazilar3_div">
						 <div class="fother_yazi_baslik">AKADEMİK</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi1">Genel Sekreterlik</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi2">Basın Yayın Halkla İlişkiler Müdürlüğü</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi3">Kütüphane ve Dokumantasyon Daire Başkanlığı</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi4">Öğrenci İsleri Daire Baskanligi</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi5">Saglik Kultur ve Spor Daire Başkanlığı</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi6"><b>TÜM İDARİ BİRİMLER</b></div>
					 </div>
					 <div class="fother_yazilar4_div">
						 <div class="fother_yazi_baslik">ÖĞRENCİ</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi1">Öğrenci İsleri Daire Başkanlığı</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi2">Öğrenci Bilgi Sistemi</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi3">Mezun Bilgi Sistemi</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi4">Engelli Öğrenci Birimi Kordinatörlüğü</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi5">Erasmus Değişim Programı</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi6">Farabi Değişim Programı</div>
						 <div class="hizalama_bitir"></div>
						 <div class="fother_yazi7">Mevlana Değişim Programı</div>
					 </div>
					 <div class="fother_yazilar5_div">
						 <div class="fother_yazi_baslik5">KURUMSAL BAĞLANTILAR</div>
						 <a href="https://www.cimer.gov.tr/"><div class="fother_resim_sol"><img src="images/fother_cimer.png" width="90px" height="54px"/></div></a>
						 <a href="https://bilgiedinme.sinop.edu.tr/"><div class="fother_resim_sol"><img src="images/fother_bigi_edinme.png" width="90px" height="54px"/></div></a>
						 <div class="hizalama_bitir"></div>
						 <a href="https://www.yok.gov.tr/"><div class="fother_resim_sol"><img src="images/fother_yok.png" width="90px" height="54px"/></div></a>
						 <a href="https://www.osym.gov.tr/"><div class="fother_resim_sol"><img src="images/fother_osym.png" width="90px" height="54px"/></div></a>
						 <div class="hizalama_bitir"></div>
						 <a href="https://www.tubitak.gov.tr/"><div class="fother_resim_sol"><img src="images/fother_tubitak.png" width="90px" height="54px"/></div></a>
						 <a href="https://www.turkiye.gov.tr/"><div class="fother_resim_sol"><img src="images/fother_edevlet.png"width="90px" height="54px"/></div></a>
						 <div class="hizalama_bitir"></div>
						 <a href="https://covid19.sinop.edu.tr/"><div class="fother_resim_sol"><img src="images/fother_covid19.png"width="90px" height="54px"/></div></a>
						 <a href="http://ebelgedogrulama.sinop.edu.tr/envision.sorgula/belgedogrulama.aspx"><div class="fother_resim_sol"><img src="images/fother_ebelge.png"width="90px" height="54px"/></div></a>
						 <div class="hizalama_bitir"></div>
						 <a href="https://www.ilan.gov.tr/ilan/tum-ilanlar?aci=79"><div class="fother_resim_uzun"><img src="images/fother_resmi_ilan.png"width="192px" height="54px"/></div></a>
					 </div>
					 <div class="hizalama_bitir"></div>
				  <div class="top1_genel_divi">
					 <div class="top1">
						 <a href="https://www.facebook.com/sinopuniversity/"><div class="top_resim1"></div></a>
					 </div>
					 <div class="top1">
						 <a href="https://twitter.com/sinopuniversity"><div class="top_resim2"></div></a>
					 </div>
					 <div class="top1">
						 <a href="https://www.instagram.com/sinopuniversity/"><div class="top_resim3"></div></a>
					 </div> 
					 <div class="top1">
						 <a href="https://www.youtube.com/channel/UCWz9OjtsfDEm7D261hdt2xg"><div class="top_resim4"></div></a>
					 </div>
				  </div>  
				 </div>
		     </div>
		  <!--Foother Bitiş-->
		  <!--Foother en alt Başlangıç-->
		    <div class="fother_alt_ana_div">
				<div class="fother_alt_govde">
					<div class="fother_alt_yazi">Copyright 2019 - Sinop Üniversitesi</div>
				</div>
		    </div>
		  <!--Foother en alt Bitiş-->	
	</div>
</body>
</html>