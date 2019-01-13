<?php
include("conn.php");
$kdMahasiswa	= $_GET['kdMahasiswa'];
$txtUsername		= $_POST['txtUsername'];
$txtPassword 		= $_POST['txtPassword'];
$txtNmLengkap		= $_POST['txtNmLengkap'];
$txtEmail 			= $_POST['txtEmail'];


//cek username yang sama
$query = mysql_fetch_array(mysql_query("SELECT username FROM tmahasiswa WHERE username='$txtUsername'"));

//Seleksi field2 yang kosong
if (empty($txtUsername) || empty($txtPassword) || empty($txtNmLengkap) ||  empty($txtEmail)){
	echo "<script> alert('Harap isi Field yang kosong');location ='register.php' </script>";
	}
elseif($query){
		echo "<script> alert('username telah dipakai');location ='register.php' </script>";
	}
elseif($username == "admin"){
echo "<script> alert('Anda tidak bisa mendaftar dengan username ADMIN !');location ='register.php' </script>";
}		
else{
	$sql = "insert tmahasiswa (nmLengkap, username, password, email) VALUES ('$txtNmLengkap', '$txtUsername', '$txtPassword', '$txtEmail')";
	}
	
$hasil = mysql_query($sql, $koneksi);	
if ($hasil){
	echo "<script> alert('Selamat. Anda telah terdaftar'); location = 'index.php'; </script>";
	}
else{
	echo "<script> alert('Data Gagal Di SImpan'); location = 'index.php'; </script>";
	}	
?>