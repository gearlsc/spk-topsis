<?php 
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	$loadModule="data/walikelas/proses.php";
	switch($_GET[action]){
		default:
		include"view.php";
		break;
		case"input":
		include"input-data.php";
		break;
		case"edit":
		include"edit-data.php";
		break;
		
		
		}
	
	}else{
		echo"
		<script language='javascript'>
		window.alert('Anda Tidak Dapat Mengakses laman ini');
		window.location=('framewk.php?q=walikelas')
		</script>
		";
		}

?>