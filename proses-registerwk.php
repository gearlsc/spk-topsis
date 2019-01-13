<?php
include("conn.php");
$kdWaka				= $_GET['kdWaka'];
$txtUsername		= $_POST['txtUsername'];
$txtPassword 		= $_POST['txtPassword'];
$txtNmLengkap		= $_POST['txtNmLengkap'];
$txtKelas 			= $_POST['txtKelas'];


//cek username yang sama
$query = mysql_fetch_array(mysql_query("SELECT username FROM twalikelas WHERE username='$txtUsername'"));

//Seleksi field2 yang kosong
if (empty($txtUsername) || empty($txtPassword) || empty($txtNmLengkap) ||  empty($txtKelas)){
	echo "<script> alert('Harap isi Field yang kosong');location ='registerwk.php' </script>";
	}
elseif($query){
		echo "<script> alert('username telah dipakai');location ='registerwk.php' </script>";
	}
elseif($username == "admin"){
echo "<script> alert('Anda tidak bisa mendaftar dengan username ADMIN !');location ='registerwk.php' </script>";
}		
else{
	$sql = "insert twalikelas (nmLengkap, username, password, kelas) VALUES ('$txtNmLengkap', '$txtUsername', '$txtPassword', '$txtKelas')";
	}
	
$hasil = mysql_query($sql, $koneksi);	
if ($hasil){
	echo "<script> alert('Selamat. Anda telah terdaftar'); location = 'indexwk.php'; </script>";
	}
else{
	echo "<script> alert('Data Gagal Di SImpan'); location = 'registerwk.php'; </script>";
	}	
?>