<?
include("../baglanti.php");

$sql=" update duyurular set d_baslik='".$_POST['baslik']."' , d_icerik='".$_POST['icerik']."', ".
	" d_ic_icerik='".$_POST['ic_icerik']."'   where d_id='".$_GET['g_id']."' ";


mysql_query($sql);

header('location:admin.php?s=duyurular');

?>