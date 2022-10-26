<?
include("guvenlik.php");
?>


<form name="form1" method="post" action="duyuru_ekle_islem.php">
	
 <div>
	 
<link href="css/sayfa_guncelle.css"type="text/css" rel="stylesheet"/>

	  <div class="sayfa_genel_div">
		  <div class="sayfa_ici_kutu_div">
			  <div class="sayfa_bilgileri">DUYURU BİLGİLERİ</div>
	<div class="hizalama_bitir"></div>
	
<div class="sayfa_basligi">Duyuru Başlığı:</div>
	<input class="sayfa_baslik_input" name="baslik" type="text" id="textfield" size="50" value="<? echo $veri['d_baslik'];?>">	  
<div class="hizalama_bitir"></div>
	
	
<div class="sayfa_icerigi">Duyuru İçeriği</div>
		<?
            $oFCKeditor = new FCKeditor('icerik');//nesne ismi
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value ='';
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>
	<div class="hizalama_bitir"></div>
			  
<div class="sayfa_icerigi">Duyuru İç İçerik</div>
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
