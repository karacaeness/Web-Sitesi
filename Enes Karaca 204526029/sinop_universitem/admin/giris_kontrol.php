

<?
session_start();

include("../baglanti.php");
if( ($_POST['kadi']=="q")&&($_POST['ksifre']=="q") )
	{
		$_SESSION['giris']="basarili";
		//header('location:');
		?>
        <script type="application/javascript">
			window.location="admin.php";
        </script>
        <?
		
	}
	else
	{
		header('location:index.php?hata=1');
	}
/*
session_start();
include("../baglanti.php");

if(($_POST['kad']!="")&&($_POST['ksifre']!=""))
{
	$sql=" select * from kullanici where k_adi='".$_POST['kad']."' ".
		" and k_sifre='".$_POST['ksifre']."' and k_durum=1 ";
	
	$sql_giris=mysql_query($sql) or die (mysql_error());
	if(mysql_num_rows($sql_giris)>0)
	{
		$_SESSION['giris']="basarili";
		header('location:admin.php');
	}
	else
	{
		header('location:index.php?hata=2');
	}
}
else
{
	header('location:index.php?hata=1&c=5&d=sinop&k=true');
}
*/

?>