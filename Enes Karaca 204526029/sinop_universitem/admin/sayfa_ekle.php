<?
include("guvenlik.php");
?>


<form name="form1" method="post" action="sayfa_ekle_islem.php">
	
 <div>
	 
<link href="css/sayfa_guncelle.css"type="text/css" rel="stylesheet"/>

	  <div class="sayfa_genel_div">
		  <div class="sayfa_ici_kutu_div">
			  <div class="sayfa_bilgileri">SAYFA BİLGİLERİ</div>
	<div class="hizalama_bitir"></div>
	
			  
<div class="sayfa_basligi">Sayfa Başlığı:</div>
	<input class="sayfa_baslik_input" name="baslik" type="text" id="textfield" size="50" value="<? echo $veri['s_baslik'];?>">	
		<div class="hizalama_bitir"></div>	  
<div class="sayfa_basligi">İç Başlığı</div>
	<input class="sayfa_baslik_input" name="ic_baslik" type="text" id="textfield1" size="50" value="<? echo $veri['s_ic_baslik'];?>">				  
			  
			  
			  
			  
<div class="hizalama_bitir"></div>
	
	
<div class="sayfa_icerigi">Sayfa İçeriği</div>
			  
		<?
            $oFCKeditor = new FCKeditor('icerik');//nesne ismi
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value ='';
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>
	
			  
			  

<div class="guncelle"><input class="guncelle_input" type="submit" name="button" id="button" value="GÜNCELLE"></div>
</div>
</div>

</div>
	
</form>
