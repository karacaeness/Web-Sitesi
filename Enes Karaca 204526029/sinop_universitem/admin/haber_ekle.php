<?
include("guvenlik.php");
?>


<form name="form1" method="post" action="haber_ekle_islem.php">
	
 <div>
	 
<link href="css/sayfa_guncelle.css"type="text/css" rel="stylesheet"/>

	  <div class="sayfa_genel_div">
		  <div class="sayfa_ici_kutu_div">
			  <div class="sayfa_bilgileri">Haber BİLGİLERİ</div>
	<div class="hizalama_bitir"></div>
	
<div class="sayfa_basligi">Haber Başlığı:</div>
	<input class="sayfa_baslik_input" name="baslik" type="text" id="textfield">	  
<div class="hizalama_bitir"></div>
	
	
<div class="sayfa_icerigi">Haber İçeriği</div>
	
		<?
            $oFCKeditor = new FCKeditor('icerik');//nesne ismi
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value ='';
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>
<div class="hizalama_bitir"></div>
			  
<div class="sayfa_icerigi">Haber İç İçerik</div>
	
		<?
            $oFCKeditor = new FCKeditor('ic_icerik');//nesne ismi
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value ='';
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>
<div class="hizalama_bitir"></div>
			  

<div class="guncelle"><input class="guncelle_input" type="submit" name="button" id="button" value="KAYDET"></div>
</div>
</div>

</div>
	
</form>
