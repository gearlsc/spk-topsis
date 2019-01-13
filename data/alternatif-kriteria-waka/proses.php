<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	
	if($loadPage=="alternatif-kriteriawk" AND $action=="simpanData"){
		
	
		$SQL="INSERT INTO talternatif_kriteria (nama_mahasiswa,nim,kelas)
			  VALUES('$_POST[txtMahasiswa]','$_POST[txtNIM]','$_POST[txtKelas]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../framewk.php?loadPage=alternatif-kriteriawk')
	</script>
	";
	
		
	
	
	}elseif($loadPage=="alternatif-kriteriawk" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM talternatif_kriteria WHERE id_alternatif_kriteria=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../framewk.php?loadPage=alternatif-kriteriawk')
	</script>
	";
		
		
		
	}elseif($loadPage=="alternatif-kriteriawk" AND $action=="ubahData"){
		 
	$SQL="UPDATE talternatif_kriteria SET nama_mahasiswa='$_POST[txtNama]',
										  nim='$_POST[txtNIM]',
										  kelas='$_POST[txtKelas]'
							    
		  WHERE id_alternatif_kriteria='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../framewk.php?loadPage=alternatif-kriteriawk')
	</script>
	";
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../framewk.php?q=alternatif-kriteriawk')
		</script>
		
		";
		}
?>