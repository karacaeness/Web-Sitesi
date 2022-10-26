
<div class="hizalama_bitir"></div>
<link href="css/ana.css" type="text/css" rel="stylesheet"/>
<!--Slider başlangıç-->
		   <div class="slider_genel_div">
		    <div class="slider_resim_div"></div>
		   </div>	   
		<div class="hizalama_bitir"></div>
		  <!--Slider bitiş-->
		  <!--Sliderın altındaki renkli kutular başlangıç-->
		    <div class="renkli_kutular_govde">
				<div class="renkli_kutu">
					<div class="renkli_foto"><img src="images/renkli_foto1.png" width="11px" height="13px"/></div>
					<div class="ebys_giris_yazi">EBYS Giriş</div>
	
				</div>
				<div class="renkli_kutu_2">
					<div class="renkli_foto_2"><img src="images/renkli_foto2.png" width="11px" height="13px"/></div>
					<div class="ebys_giris_yazi_2">Telefon Rehberi</div>
				
				</div>
				<div class="renkli_kutu_3">
					<div class="renkli_foto_3"><img src="images/renkli_foto3.png" width="15px" height="13px"/></div>
					<div class="ebys_giris_yazi_3">Uygulama Oteli</div>
				
				</div>
				<div class="renkli_kutu_4">
					<div class="renkli_foto_4"><img src="images/renkli_foto4.png" width="12px" height="11px"/></div>
					<div class="ebys_giris_yazi_4">Uzaktan Eğitim</div>
				
				</div>
				<div class="renkli_kutu_5">
					<div class="renkli_foto_5"><img src="images/renkli_foto5.png" width="13px" height="13px"/></div>
					<div class="ebys_giris_yazi_5">İhale Duyuruları</div>
				
				</div>
				<div class="renkli_kutu_6">
					<div class="renkli_foto_6"><img src="images/renkli_foto6.png" width="13px" height="13px"/></div>
					<div class="ebys_giris_yazi_6">Kütüphane</div>
				
				</div>
				<div class="renkli_kutu_7">
					<div class="renkli_foto_7"><img src="images/renkli_foto7.png" width="13px" height="13px"/></div>
					<div class="ebys_giris_yazi_7">E-Posta</div>
				
				</div>
				<div class="renkli_kutu_8">
					<div class="renkli_foto_8"><img src="images/renkli_foto8.png" width="13px" height="13px"/></div>
					<div class="ebys_giris_yazi_8">Universite Vakfı</div>
				
				</div>
				<div class="renkli_kutu_9">
					<div class="renkli_foto_9"><img src="images/renkli_foto9.png" width="13px" height="13px"/></div>
					<div class="ebys_giris_yazi_9">Yayınlarımız</div>
				
				</div>
		    </div>
		  <div class="hizalama_bitir"></div>
		  <!--Sliderın altındaki renkli kutular bitiş-->
		  <!--Haberler Duyurular başlangıç-->
		    <div class="haber_duyuru_govde">
				<div class="haberler_div">
					<div class="haberler_yazi">HABERLER</div>
					<div class="hizalama_bitir"></div>
		<?
        	$sql=" select * from haberler order by h_tarih desc";
			$sebelebeddin=mysql_query($sql);
			while($gel=mysql_fetch_assoc($sebelebeddin))
			{
		?>
					<div class="h_div1">
						<div class="haberler_foto1"><img src="images/h1.jpg" width="220px" height="145px"/></div>
						<div class="h_div1_ic">
						<a href="index.php?s=haberler&hid=<? echo $gel['h_id'];?>"><div class="h_yazi_1"><? echo $gel['h_baslik'];?></div></a>
						<div class="hizalama_bitir"></div>
						<div class="tarih_1"><? echo substr($gel['h_tarih'],2,2),"/";?>
		<? echo substr($gel['h_tarih'],5,2),"/";?>
			<? echo substr($gel['h_tarih'],0,4);?></div>
						<div class="haber_metin_1"><? echo $gel['h_icerik'];?></div>
						</div>	
					</div>
				<?
					}
				?>	

					<div class="hizalama_bitir"></div>
					<div class="tum_haberler_yazi_div">
						<div class="tum_haberler_yazi">TÜM HABERLER</div>
					</div>
				</div>
				
				<div class="duyurular_div">
					<div class="duyurular_yazi">DUYURULAR</div>
					<div class="hizalama_bitir"></div>
					
				<?
        			$sql=" select * from duyurular order by d_tarih asc";
					$sebelebeddin=mysql_query($sql);
					while($gel=mysql_fetch_assoc($sebelebeddin))
					{
				?>
					<div class="duyuru_div_1">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="tarih_ic_div1">
								<b><? echo substr($gel['d_tarih'],2,2);?></b>
							</div>
							<div class="hizalama_bitir"></div>
							<div class="tarih_ic_div2">
								<? echo substr($gel['d_tarih'],5,2);?>
							</div>
						    <div class="hizalama_bitir"></div>
							<div class="tarih_ic_div3">
								<? echo substr($gel['d_tarih'],0,4);?>
							</div>
						</div>
						<div class="duyuru_yazi_div1">
						<a href="index.php?s=duyurular&did=<? echo $gel['d_id'];?>">
						<div class="duyuru_yazi_div_ic1"><? echo $gel['d_baslik'];?></div></a>
							<div class="duyuru_yazi_div_ic2"><? echo $gel['d_icerik'];?></div>
						</div>
					</div>
					
					
				<?
					}
				?>

					<div class="hizalama_bitir"></div>
					<div class="tum_duyurular_yazi_div">
						<div class="tum_duyurular_yazi">TUM DUYURULAR</div>
					</div>
				</div>
		    </div>
		  <div class="hizalama_bitir"></div>
		  <!--Haberler Duyurular baitiş-->
		
		  <!--Etkinlikler başlangıç-->
		     <div class="etkinlik_ana_div">
				 <div class="etkinlik_govde">
					 <div class="etkinilkler_yazi">ETKİNLİKLER</div>
					 <div class="etkinlik_ic">
						 
					 	<div class="hizalama_bitir"></div>
					<div class="etkinlik_div_1">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="etk_tarih_ic_div1">18</div>
							<div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div2">Mart</div>
						    <div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div3">2022</div>
						</div>
						<div class="etkinlik_yazi_div1">
							<div class="etkinlik_yazi_div_ic1">Minik Öğrenciler Bilim Senliği İle Ogrendi</div>
							<div class="etkinlik_yazi_div_ic2">Çocuk Üniversitesi, Mühendislik ve Mimarlik ...</div>
						</div>
					</div>
						 
					<div class="etkinlik_div_2">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="etk_tarih_ic_div1">18</div>
							<div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div2">Mart</div>
						    <div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div3">2022</div>
						</div>
						<div class="etkinlik_yazi_div1">
							<div class="etkinlik_yazi_div_ic1">Üniversitemizde Kadın Emeği Konulu Seminer Verildi</div>
							<div class="etkinlik_yazi_div_ic2">Üniversitemiz Kadın Çalısmaları Uygulama ve ...</div>
						</div>
					</div>
						 
						 <div class="etkinlik_div_3">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="etk_tarih_ic_div1">16</div>
							<div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div2">Mart</div>
						    <div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div3">2022</div>
						</div>
						<div class="etkinlik_yazi_div1">
							<div class="etkinlik_yazi_div_ic1">Üniversitemizde İstiklal Marşının Kabülünün 101. Yıldönümü ve Çanakkale Zaferinin 107.</div>
							<div class="etkinlik_yazi_div_ic2">Yıldönümü Kutlandı</div>
						</div>
					</div>
						 
						 <div class="hizalama_bitir"></div>
					<div class="etkinlik_div_1">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="etk_tarih_ic_div1">16</div>
							<div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div2">Mart</div>
						    <div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div3">2022</div>
						</div>
						<div class="etkinlik_yazi_div1">
							<div class="etkinlik_yazi_div_ic1">Üniversitemiz Meslek Yüksekokuludan</div>
							<div class="etkinlik_yazi_div_ic2">Çanakkale ve İstiklal Marsi Konulu Anma Etkinliği</div>
						</div>
					</div>
						 
						 <div class="etkinlik_div_2">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="etk_tarih_ic_div1">16</div>
							<div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div2">Mart</div>
						    <div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div3">2022</div>
						</div>
						<div class="etkinlik_yazi_div1">
							<div class="etkinlik_yazi_div_ic1">Üniversitemizde İstiklal Marşımızın Kabülü ve Çanakkale Savasları Anlatıldı</div>
							<div class="etkinlik_yazi_div_ic2">Üniversitemiz Mühendislik ve Mimarlık Fakültesi</div>
						</div>
					</div>
						 
					 <div class="etkinlik_div_3">
						<div class="hizalama_bitir"></div>
						<div class="tarih_div1">
							<div class="etk_tarih_ic_div1">15</div>
							<div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div2">Mart</div>
						    <div class="hizalama_bitir"></div>
							<div class="etk_tarih_ic_div3">2022</div>
						</div>
						<div class="etkinlik_yazi_div1">
							<div class="etkinlik_yazi_div_ic1">Üniversitemizde 14 Mart Dünya Matematik Günü Etkinliği</div>
							<div class="etkinlik_yazi_div_ic2">Üniversitemiz Ortak Noktamız Matematik Öğrenci </div>
						</div>
					</div>
						<div class="hizalama_bitir"></div>
					<div class="tum_etkinlikler_yazi_div">
						<div class="tum_etkinlikler_yazi">TUM ETKİNLİKLER</div>
					</div>  
					 </div>
				 </div>
		     </div>
		     <div class="hizalama_bitir"></div>
		  <!--Etkinlikler baitiş-->
		
		  <!--Etkinlikler Takvimi Başlangıç-->
		   <div class="etkinlik_takvimi_govde">
			   <div class="etkinlik_yazi">ETKİNLİK <b>TAKVİMİ</b></div>
			   <div class="etkinlik_resimler_div">
				   
				   <div class="resim_div">
				   	  <div class="resim1"><img src="images/orman_haftasi.jpg" width="224px" height="316px"/></div>
					   <div class="resim_alti_yazi1">ORMAN HAFTASI PROGRAMI</div>
					   <div class="hizalama_bitir"></div>
					   <div class="resim_alti_yazi2">21-23 Mart 2022</div>
				   </div> 
				   
				   <div class="resim_div">
				   	  <div class="resim1"><img src="images/e-ihracat.jpg" width="224px" height="316px"/></div>
					   <div class="resim_alti_yazi1">E-İhracat Eğitim Sertifika Programı</div>
					   <div class="hizalama_bitir"></div>
					   <div class="resim_alti_yazi2">19 Mart - 2 Nisan 2022</div>
				   </div> 
				   
				   <div class="resim_div">
				   	  <div class="resim1"><img src="images/turkiye_bagimlilik.jpeg" width="224px" height="316px"/></div>
					   <div class="resim_alti_yazi1">Tükiye Bağımlılıkla Mücadele Eğitimi</div>
					   <div class="hizalama_bitir"></div>
					   <div class="resim_alti_yazi2">21-23 Mart 2022</div>
				   </div> 
				   
				   <div class="resim_div">
				   	  <div class="resim1"><img src="images/kitap_bagisi.jpg" width="224px" height="316px"/></div>
					   <div class="resim_alti_yazi1">Kitap Bağışı Kampanyası</div>
					   <div class="hizalama_bitir"></div>
					   <div class="resim_alti_yazi2">7 Mart - 11 Nisan 2022</div>
				   </div> 
			   </div>
			   <div class="hizalama_bitir"></div>
					<div class="tum_etkinlik_takvimi_yazi_div">
						<div class="tum_etkinlik_takvimi_yazi">TÜM ETKiNLİK TAKVİMİ</div>
					</div> 
		   </div>
		   <div class="hizalama_bitir"></div>
		  <!--Etkinlikler Takvimi Bitiş-->
		
		  <!--Kep Atma Öğrenciler Başlangıç-->
		    <div class="kep_atma_ogrenciler">
				<div class="kep_atma_govde">
					<div class="kep_atma_yazi">SINOP ÜNİVERSİTESİ<br><b> FOTOĞRAF & VİDEO GALERİ</b></div>
					<div class="hizalama_bitir"></div>
					<div class="buton1_fotograf_galeri">
						<div class="kep_atma_resim1"><img src="images/icon_resim1_normal.png"width="25px" height="20px"/></div>
						<div class="fotograf_galeri_yazi"><b>FOTOĞRAF</b><br>&nbsp;&nbsp;&nbsp;&nbsp;GALERİ</div>
					</div>
					<div class="buton2_fotograf_galeri">
						<div class="kep_atma_resim2"><img src="images/icon_resim2_normal.png"width="25px" height="20px"/></div>
						<div class="fotograf_galeri_yazi1"><b>&nbsp;VİDEO</b><br>GALERİ</div>
					</div>
				</div>
		    </div>
		     <div class="hizalama_bitir"></div>
          <!--Kep Atma Öğrenciler Bitiş-->
		
		  <!--Oynayan Sayılar Başlangıç-->
		 <div class="oynayan_ana_div">
		    <div class="oynayan_sayilar_govde">
				
				<div class="oynayan_sayilar_div">
					<div class="oynayan_resim"><img src="images/fakulte.png"width="40px" height="40px"/></div>
					<div class="hizalama_bitir"></div>
					<div class="oynayan_yazi">Enstitü / Fakülte / Yüksekokul</div>
					<div class="oynayan_yazi1">20</div>
				</div>
				
				<div class="oynayan_sayilar_div">
					<div class="oynayan_resim"><img src="images/kep.png"width="50px" height="30px"/></div>
					<div class="hizalama_bitir"></div>
					<div class="oynayan_yazi">Öğretim Elemanı</div>
					<div class="oynayan_yazi1">580</div>
				</div>
				
				<div class="oynayan_sayilar_div">
					<div class="oynayan_resim"><img src="images/adam.png"width="35px" height="40px"/></div>
					<div class="hizalama_bitir"></div>
					<div class="oynayan_yazi">İdari Personel</div>
					<div class="oynayan_yazi1">521</div>
				</div>
				
				<div class="oynayan_sayilar_div">
					<div class="oynayan_resim"><img src="images/ogrenci.png"width="35px" height="40px"/></div>
					<div class="hizalama_bitir"></div>
					<div class="oynayan_yazi">Öğrenci</div>
					<div class="oynayan_yazi1">12664</div>
				</div>
				<div class="hizalama_bitir"></div>
				<div class="oynayan_alt_yazi"><b>*Mart 2022</b> verilerinden derlenmiştir. Detaylı Bilgi İçin Tıklayınız.</div>
		    </div>
		 </div>
		 <div class="hizalama_bitir"></div>
		  <!--Oynayan Sayılar Bitiş-->