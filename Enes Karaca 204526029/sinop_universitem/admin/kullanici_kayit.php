<?
include("../baglanti.php");

$sql=" insert into kullanici values('','".$_POST['kad']."','".$_POST['ksifre']."',".
	" '".date("y-m-d")."','".$_POST['kdurum']."') ";

mysql_query($sql);
header('location:admin.php?s=kullanici');

?>