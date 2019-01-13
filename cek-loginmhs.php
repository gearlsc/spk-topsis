<?php
include "appConfig/conn.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username 	= antiinjection($_POST['txtUsername']);
$pass     	= antiinjection($_POST['txtPassword']);
$kode 		= substr($username,0,2);

$waktu = time()+25200;
$expired=60;

$query=mysql_query("SELECT * FROM tmahasiswa WHERE username='$username' AND password='$pass' ");
$in=mysql_num_rows($query);
$r=mysql_fetch_array($query);

if ($in > 0 AND ($kode == 17 OR $kode == 18 OR $kode == 19)){
  session_start();
  
  $_SESSION['kdMahasiswa']     	  = $r['kdMahasiswa'];
  $_SESSION['username']    		  = $r['username'];
  $_SESSION['password']      	  = $r['password'];
  $_SESSION['nmLengkap']  		  = $r['nmLengkap'];
  $_SESSION['alamat']  		  	  = $r['alamat'];
  $_SESSION['foto']      		  = $r['foto'];
  $_SESSION['kontak']      	  	  = $r['kontak'];
  $_SESSION['email']      	  	  = $r['email'];
  $_SESSION['levelPengguna'] 	  = $r['levelPengguna'];
	  
  
  $_SESSION['timeout']		= $waktu+$expired;
  $waktulog= time();												
										
  header('location:framemhs.php?loadPage=dashboardmhs');
}
else if($kode != 17 OR $kode != 18 OR $kode != 19)
{
	 echo "<script type='text/javascript'>
	window.alert('Masukkan NIM yang benar'); 
	window.location =('index.php')</script>";
	
}


else{
    echo "<script type='text/javascript'>
	window.alert('Username Atau Password Anda Salah'); 
	window.location =('index.php')</script>";
}
?>
