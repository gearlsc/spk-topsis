<?php 
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	$loadModule="data/alternatif/proses.php";
	switch($_GET[action]){
		default:
		include"view.php";
		break;
		case"input-mhs":
		include"input-data-mhs.php";
		break;
		case"input":
		include"input-data.php";
		break;
		case"update-mhs":
		include"update-data-mhs.php";
		break;
		case"edit":
		include"edit-data.php";
		break;
		}
	
	}else{
		echo"
		<script language='javascript'>
		window.alert('Anda Tidak Dapat Mengakses laman ini');
		window.location=('framemhs.php?loadPage=alternatif')
		</script>
		";
		}

?>