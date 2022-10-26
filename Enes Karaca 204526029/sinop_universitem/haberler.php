<?

$sql="select * from haberler where h_id='".$_GET['hid']."'";
$sql_cls=mysql_query($sql)or die(mysql_error());
while($kayit=mysql_fetch_assoc($sql_cls))
{
	 $baslik=$kayit['h_baslik'];
	
	 $tarih=$kayit['h_tarih'];
	
	 $ic_icerik=$kayit['h_ic_icerik'];
}
?>




<link href="css/haberler.css" type="text/css" rel="stylesheet"/>

<div>


		
		
		
		   <!--Body baslangıc-->
		<div class="politika_ana_div">
		  <div class="politika_govde">
			<div class="politika_yazi"><? echo $baslik ?></div>
		<div class="hizalama_bitir"></div>
	      <a href="index.php"><div class="ev"><img src="images/ev.png" width="13px" height="13px"/></div></a>
		  <div class="yan_ok_evin">></div>
		  <div class="uluslararasi_yazi">Haberler</div>
		  <div class="yan_ok_evin">></div>,
		  <div class="uluslararasi_yazi"><? echo $baslik ?></div>
		  </div>
		</div>
	    <div class="hizalama_bitir"></div>
	
	<div class="haber_govde_ana">
		<div class="haber_sol_div_ana">
			<div class="saat_dosya_div">
				<div class="saat_icon"><img src="images/saat.png" width="12px" height="12px"/>&nbsp;
			<? echo substr($tarih,2,2),".";?>
			<? echo substr($tarih,5,2),".";?>
			<? echo substr($tarih,0,4);?>&nbsp;&nbsp;-</div>
				<div class="haber_icon"><img src="images/dosya_icon.png" width="12px" height="12px"/>&nbsp;Haberler</div>
			</div>
			<div class="hizalama_bitir"></div>
			<div class="icerik"><? echo $ic_icerik ?></div>
			
		</div>
		
		
		
		<div class="haber_sag_div_ana">
			<div class="ara_input"><input type="text" name="kadi" class="e_mail"  
		 placeholder="&nbsp;&nbsp;Ara"/></div>
			<div class="hizalama_bitir"></div>
		<div class="mavi_iconum"><img src="images/mavi_icon.png" width="3px" height="15px"/>&nbsp;&nbsp;&nbsp;&nbsp;FAALİYETLER</div>
			<div class="hizalama_bitir"></div>
			<div class="kategori_input"><input type="text" name="kadi" class="kategori"  
		 placeholder="&nbsp;&nbsp;Kategori Seçin"/></div>
			<div class="hizalama_bitir"></div>
			<div class="mavi_iconum"><img src="images/mavi_icon.png" width="3px" height="15px"/>&nbsp;&nbsp;&nbsp;&nbsp;TÜM FAALİYETLER</div>
			<div class="hizalama_bitir"></div>
			<div class="tum_faliyetler_input"><input type="text" name="kadi" class="tum_faliyet"  
		 placeholder="&nbsp;&nbsp;Ay Seçin"/></div>
			<div class="hizalama_bitir"></div>
			<div class="mavi_iconum"><img src="images/mavi_icon.png" width="3px" height="15px"/>&nbsp;&nbsp;&nbsp;&nbsp;FAALİYETLER (YAYIN TARİHİNE GÖRE)</div>
			<div class="hizalama_bitir"></div>
			<div class="sag_yazilar">
			   <div class="sag_yazilar_ic">Türk Eğitim-Sen Üniversite Temsilciliğinden 
				   İftar Programı
				  <span class="sag_yazilar_ic_tarihh">23 Nisan 2022</span>
			   </div>
			</div>
			<div class="hizalama_bitir"></div>
			<div class="sag_yazilar">
			   <div class="sag_yazilar_ic">Sinop’ta 23 Nisan Kutlamaları Renkli Görüntülere Sahne Oldu
				  <span class="sag_yazilar_ic_tarihh">23 Nisan 2022</span>
			   </div>
			</div>
			<div class="hizalama_bitir"></div>
			<div class="sag_yazilar">
			   <div class="sag_yazilar_ic">“Çalışma Yaşamında Kadın ve İş-Yaşam Dengesi” Başlıklı Seminer Dizisi Tamamlandı
				  <span class="sag_yazilar_ic_tarihh">22 Nisan 2022</span>
			   </div>
			</div>
			<div class="hizalama_bitir"></div>
			<div class="sag_yazilar">
			   <div class="sag_yazilar_ic">Vefat ve Baş Sağlığı
				  <span class="sag_yazilar_ic_tarihh">22 Nisan 2022</span>
			   </div>
			</div>
			<div class="hizalama_bitir"></div>
			<div class="sag_yazilar">
			   <div class="sag_yazilar_ic">Lojman Tahsis Talebi 
				  <span class="sag_yazilar_ic_tarihh">22 Nisan 2022</span>
			   </div>
			</div>
			
			
		</div>
		<div class="hizalama_bitir"></div>
	</div>
	<div class="hizalama_bitir"></div>
	
	     
	    
	
	    
	
	    
	
	    
	    
		
		
		
		   
		   <!--Body bitiş-->
		
		        
		  
		  
		  
		
		
		  




</div>