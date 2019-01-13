<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	
	if($loadPage=="alternatif-kriteria" AND $action=="simpanData"){
		
	
		$SQL="INSERT INTO talternatif_kriteria (nama_mahasiswa,nim,kelas,semester)
			  VALUES('$_POST[txtMahasiswa]','$_POST[txtNIM]','$_POST[txtKelas]','$_POST[txtSemester]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?loadPage=alternatif-kriteria')
	</script>
	";
	
		
	
	
	}elseif($loadPage=="alternatif-kriteria" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM talternatif_kriteria WHERE id_alternatif_kriteria=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?loadPage=alternatif-kriteria')
	</script>
	";
		
		
		
	}elseif($loadPage=="alternatif-kriteria" AND $action=="ubahData"){
		 
	$SQL="UPDATE talternatif_kriteria SET nama_mahasiswa='$_POST[txtMahasiswa]',
										  nim='$_POST[txtNIM]',
										  kelas='$_POST[txtKelas]',
										  semester='$_POST[txtSemester]'
							    
		  WHERE id_alternatif_kriteria='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?loadPage=alternatif-kriteria')
	</script>
	";
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?q=alternatif-kriteria')
		</script>
		
		";
		}
?>