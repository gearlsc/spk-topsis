<?php
ini_set( "display_errors", 0);
include "conn.php";
$r=mysql_fetch_array(mysql_query("select * from berita where id_berita='$_GET[id]'"));
if ($r[headline] == 'N' )
{
mysql_query("delete from berita where id_berita='$_GET[id]' and headline='N'");
header ('location:kelola-berita.php?hal=berita');	
}
else
{
echo "<script>alert('maaf berita headline tidak bisa di hapus, anda bisa mengeditnya '); window.location = 'kelola-berita.php?hal=berita'</script>";	
}


?>