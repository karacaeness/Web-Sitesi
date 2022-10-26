<?

$sql=" select * from kullanici where k_id ='".$_GET['gun_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
?>


<div>
	
<form name="form1" method="post" action="kullanici_guncelle_islem.php?g_id=<? echo $_GET['gun_id'];?>">
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>
	
	
	
	
	
<div class="kullanici_bigileri_genel_div">
	<div class="kullanici_bilgisi">Kullanıcı Bilgileri</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="kullanici_adi">Kullanıcı Adı:</div>
	<div><label for="textfield"></label>
        <input class="kullanici_adi_inputt" type="text" name="kad" id="textfield" value="<? echo $kayit['k_adi'];?>"></div>
<div class="hizalama_bitir"></div>	
	
	
	<div class="kullanici_sifre">Kullanıcı Şifre:</div>
	<div>
		<input class="kullanici_sifre_input" type="text" name="ksifre" id="textfield2" value="<? echo $kayit['k_sifre'];?>"></div>
<div class="hizalama_bitir"></div>	

	
	<div class="kullanici_durumum">Kullanıcı Durum:</div>
	<div><label for="select"></label>
		<select class="aktifpasif_olayi_input" name="kdurum" id="select">
          <option value="1" <? if($kayit['k_durum']==1){ echo "selected";}?>>Aktif</option>
          <option value="0" <? if($kayit['k_durum']==0){ echo "selected";}?>>Pasif</option>
        </select>
	</div>

<div class="hizalama_bitir"></div>

	<div class="kaydet"><input class="kaydet_input" type="submit" name="button" id="button" value="GÜNCELLE"></div>
</div>

<div class="hizalama_bitir"></div>
</form>

</div>

<? }?>
