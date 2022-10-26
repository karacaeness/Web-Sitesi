<?

$sql="select * from sayfalar where s_id='".$_GET['sid']."'";
$sql_cls=mysql_query($sql)or die(mysql_error());
while($kayit=mysql_fetch_assoc($sql_cls))
{
	 $ic_baslik=$kayit['s_ic_baslik'];
	
	 $icerik=$kayit['s_icerik'];
}
?>

<link href="css/sayfalar.css" type="text/css" rel="stylesheet"/>		
		   <!--Body baslangıc-->

		<div class="politika_ana_div">
		  <div class="politika_govde">
			<div class="politika_yazi"><? echo $ic_baslik ?></div>
		<div class="hizalama_bitir"></div>
	      <div class="ev">
			  <a href="index.php"><img src="images/ev.png" width="13px" height="13px"/></a></div>
		  <div class="yan_ok_evin">></div>
		  <div class="uluslararasi_yazi"><? echo $ic_baslik ?></div>
		  </div>
		</div>
	    <div class="hizalama_bitir"></div>
	    

<div class="haber_duyuru_govde">
	    <div class="akademik_tavim_govde"><? echo $icerik ?>	
	    </div>
		   <!--Body bitiş-->
</div>