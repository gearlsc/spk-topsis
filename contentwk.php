<?php
error_reporting(0);
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
if($_GET['loadPage']=="dashboardwk"){
	include"dashboardwk.php";
	}elseif($_GET['loadPage']=="analisis-satu"){
	include"analisis-satu.php";
	}elseif($_GET['loadPage']=="analisis-dua"){
	include"analisis-dua.php";
	}elseif($_GET['loadPage']=="analisis-tiga"){
	include"analisis-tiga.php";
	}elseif($_GET['loadPage']=="alternatif"){
	include"data/alternatif/alternatif.php";
	}elseif($_GET['loadPage']=="alternatif-kriteriawk"){
	include"data/alternatif-kriteria-waka/alternatif-kriteria.php";
	}elseif($_GET['loadPage']=="kriteria"){
	include"data/kriteria/kriteria.php";
	}elseif($_GET['loadPage']=="pengguna"){
	include"data/pengguna/pengguna.php";
	}elseif($_GET['loadPage']=="ganti-password"){
	include"data/ganti-password/ganti-password.php";
	}else{
		
		include"404.php";
	}
}else{
	
	echo "<script type='text/javascript'>
	window.alert('Anda Tidak Mempunyai Akses di Halaman Ini, Silahkan Login Terlebih Dahulu'); 
	window.location =('indexwk.php')</script>";
}
?>