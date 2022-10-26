<?
include("guvenlik.php");

$sql=" select * from sayfalar where s_id='".$_GET['g_id']."' ";

$sql_cls=mysql_query($sql);
while($veri=mysql_fetch_assoc($sql_cls))
{
?>


<form name="form1" method="post" action="sayfa_guncelle_islem.php?g_id=<? echo $_GET['g_id'];?>">
  <div>
<link href="css/sayfa_guncelle.css" type="text/css" rel="stylesheet"/>

	  
	  <div class="sayfa_genel_div">
		  <div class="sayfa_ici_kutu_div">
			  <div class="sayfa_bilgileri">SAYFA BİLGİLERİ</div>
	<div class="hizalama_bitir"></div>
	
<div class="sayfa_basligi">Sayfa Başlığı:&nbsp;&nbsp;&nbsp;&nbsp;</div>
	<input class="sayfa_baslik_input" name="baslik" type="text" id="textfield" size="50" value="<? echo $veri['s_baslik'];?>">	  
<div class="hizalama_bitir"></div>
<div class="sayfa_basligi">İç Sayfa Başlığı:</div>
	<input class="sayfa_baslik_input" name="ic_baslik" type="text" id="textfield" size="50" value="<? echo $veri['s_ic_baslik'];?>">	
	
			  
<div class="sayfa_icerigi">Sayfa İçeriği</div>
			  
		<?
    
            $oFCKeditor = new FCKeditor('icerik');
            $oFCKeditor->BasePath = 'fckeditor/';
            $oFCKeditor->Value =$veri['s_icerik'];
            $oFCKeditor -> Height = 450; 
            $oFCKeditor->Create();
        ?>

			  
			  
			  
	<div class="hizalama_bitir"></div>

<div class="guncelle"><input class="guncelle_input" type="submit" name="button" id="button" value="GÜNCELLE"></div>
</div>
</div>

</div>
</form>
<? }?>