
<div>
<link href="css/sayfalar.css" type="text/css" rel="stylesheet"/>

	
	<a href="admin.php?s=sayfa_ekle"><div class="yeni_sayfa_eklem">
		<img src="admin_images/ekle.png" width="25px" height="25px" align="center"/>Yeni Sayfa Ekle</div></a>
<div class="hizalama_bitir"></div>
	
	
	
	<div>
	
 
		<table width="800" align="center" border="3" cellspacing="0" cellpadding="3">
			
			<tr style="text-align:center;">
    			<td style="color: #FFFFFF;" >Sayfa No</td>
    			<td style="color: #FFFFFF;"> Başlıklar</td>
    			<td style="color: #FFFFFF;">İşlemler</td>
			</tr>
     
      <?
	  $i=0;
	  	$sql=" select * from sayfalar order by s_id asc ";
		$sql_calistir=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_calistir))
		{
			$i=$i+1;
			if($i%2==0)
			{$renk="#ccc";}
			else
			{$renk="#b1b1b1";}
      ?>
      <tr class=""  bgcolor="<? echo $renk;?>">
        <td  style="width: 70px; text-align: center;"><? echo $i; ?></td>
        <td  style="width: 70px; text-align: center;"><? echo $kayit['s_baslik'];?></td>
        <td  style="width: 70px; text-align: center;"><a href="sayfa_sil_islem.php?sil_id=<? echo $kayit['s_id'];?>">
			<img src="admin_images/sil_icon.png" width="30px" height="30px"/></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?s=sayfa_guncelle&g_id=<? echo $kayit['s_id'];?>">
			<img src="admin_images/guncelle_icon.png" width="30px" height="30px"/></a></td>
      </tr>
      <?
		}
	  ?>
      
    </table>

		
	</div>
	
	
</div>













