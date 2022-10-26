


<div>

	
<form name="form1" method="post" action="kullanici_kayit.php">
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>

	
	
<div class="kullanici_bigileri_genel_div">
	<div class="kullanici_bilgisi">Kullanıcı Bilgileri</div>
<div class="hizalama_bitir"></div>	
	
	<div class="kullanici_adi">Kullanıcı Adı:</div>
	<div class="kullanici_adi_input"><input class="kullanici_adi_inputt" type="text" name="kad" id="textfield"></div>
<div class="hizalama_bitir"></div>	
	
	<div class="kullanici_sifre">Kullanıcı Şifre:</div>
	<div class="kullanici_sifrem_input"><input class="kullanici_sifre_input" type="text" name="ksifre" id="textfield2"></div>

<div class="hizalama_bitir"></div>	
	<div class="kullanici_durumum">Kullanıcı Durum:</div>
	<div><label for="select"></label>
		<select class="aktifpasif_olayi_input" name="kdurum" id="select">
          	<option value="1">Aktif</option>
            <option value="0">Pasif</option>
        </select>
	</div>
	
<div class="hizalama_bitir"></div>
	
	<div class="kaydet"><input class="kaydet_input" type="submit" name="button" id="button" value="KAYDET"></div>
</div>
<div class="hizalama_bitir"></div>
	
	
</form>
	
<div class="hizalama_bitir"></div>
<tr>
    <td>
		<table width="700" align="center" border="3" cellspacing="0" cellpadding="4">
     <tr style="text-align:center;">
    	<td style="color: #FFFFFF;" >Kullanıcı No</td>
    	<td style="color: #FFFFFF;">Kullanıcı Adı</td>
    	<td style="color: #FFFFFF;">Kullanıcı Durum</td>
    	<td style="color: #FFFFFF;">İşlemler</td>
	</tr>
      <?
	  $i=0;
	  	$sql=" select * from kullanici order by k_adi asc";
		$sql_cls=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#ccc";}
			else
			{$renk="#b1b1b1";}
      ?>
      <tr bgcolor="<? echo $renk;?>">
        <td style="width: 70px; text-align: center;"><? echo $i;?></td>
        <td style="width: 70px; text-align: center;"><? echo $kayit['k_adi'];?></td>
        <td style="width: 70px; text-align: center;"><? if($kayit['k_durum']==1){?><span style="color:#5E0B0D">Aktif</span><? }else{?>Pasif<? }?></td>
        <td style="width: 70px; text-align: center;">
		<a href="kullanici_sil.php?sil_id=<? echo $kayit['k_id'];?>">
			<img src="admin_images/sil_icon.png" width="30px" height="30px"/></a>
	    <a href="admin.php?s=kullanici_guncelle&gun_id=<? echo $kayit['k_id'];?>">
			<img src="admin_images/guncelle_icon.png" width="30px" height="30px"/></a></td>
      </tr>
      <? 
	  	} 
	  ?>
     
			
    </table>
		
	</td>
	
  </tr>
	
</div>






