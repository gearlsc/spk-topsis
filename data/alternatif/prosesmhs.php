<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	$alternatif = $_POST['txtAlternatif'];
	$nim = $_POST['txtNIM'];
	$jenkel=$_POST['txtJenKel'];
	$ttl= $_POST['txtTTL'];
	$tgllhr=$_POST['txttgllhr'];
	$email=$_POST['txtEmail'] ;
	$kontak=$_POST['txtKontak'];
	$alamat=$_POST['txtAlamat'] ;
	$ortu=$_POST['txtOrtu'];
	$pekerjaan=$_POST['txtPekerjaan'];
	$alamatortu=$_POST['txtAlamatOrtu'];
	$kontakortu=$_POST['txtKontakOrtu'];
	$penghasilan=$_POST['txtPenghasilan'];
	$tanggungan=$_POST['txtTanggungan'];
	$status=$_POST['txtStatusAnak'];
	$riwayat=$_POST['txtRiwayat'] ;
	$ipk=$_POST['txtIPK'];
	$berkas=$_POST['berkas'];
	
	
	if($loadPage=="alternatif" AND $action=="simpanData"){
		
	if( $alternatif == null or $berkas = null or $nim = null or $jenkel == null or $ttl == null or $tgllhr == null or $email == null or $kontak == null or $alamat== null or $ortu  == null or $pekerjaan == null or	$alamatortu == null or $kontakortu == null or $penghasilan == null or $tanggungan == null or $status == null or $riwayat == null or $ipk == null)
	{
	echo"
	<script language='javascript'>
	window.alert('Isi data dengan lengkap!');
	window.location=('../../framemhs.php?loadPage=alternatif&action=input-mhs&txtAlternatif=$alternatif&txtIPK=$ipk')
	</script>";
	}
	else
	{
	$SQL="INSERT INTO talternatif (berkas,nama_alternatif, nim, jenkel, ttl, tgllhr, email, kontak, alamat, foto,nama_ortu,pekerjaan,alamat_ortu,kontak_ortu, penghasilan_ortu, tanggungan_ortu, ipk, status_anak, riwayat_beasiswa)
			  VALUES('$_POST[berkas]','$_POST[txtAlternatif]','$_POST[txtNIM]','$_POST[txtJenKel]','$_POST[txtTTL]','$_POST[txttgllhr]','$_POST[txtEmail]','$_POST[txtKontak]','$_POST[txtAlamat]','$_POST[upPhoto]','$_POST[txtOrtu]','$_POST[txtPekerjaan]','$_POST[txtAlamatOrtu]','$_POST[txtKontakOrtu]','$_POST[txtPenghasilan]','$_POST[txtTanggungan]','$_POST[txtIPK]','$_POST[txtStatusAnak]','$_POST[txtRiwayat]')";
	
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../framemhs.php?loadPage=dashboardmhs')
	</script>
	";
	}
		
	
	
		
	
	
	}
	
	if($loadPage=="alternatif" AND $action=="updateData"){
	
		$SQL="UPDATE talternatif SET
		nama_alternatif='$_POST[txtAlternatif]',
		berkas='$_POST[berkas]',
		nim='$_POST[txtNIM]',
		jenkel='$_POST[txtJenKel]',
		ttl='$_POST[txtTTL]',
		tgllhr='$_POST[txttgllhr]',
		email='$_POST[txtEmail]',
		kontak='$_POST[txtKontak]',
		alamat='$_POST[txtAlamat]',
		nama_ortu='$_POST[txtOrtu]',
		pekerjaan='$_POST[txtPekerjaan]',
		alamat_ortu='$_POST[txtAlamatOrtu]',
		kontak_ortu='$_POST[txtKontakOrtu]',
		penghasilan_ortu='$_POST[txtPenghasilan]',
		tanggungan_ortu='$_POST[txtTanggungan]',
		ipk='$_POST[txtIPK]',
		status_anak='$_POST[txtStatusAnak]',
		riwayat_beasiswa='$_POST[txtRiwayat]'   
		  WHERE nim='$_GET[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../framemhs.php?loadPage=dashboardmhs')
	</script>
	";
	
		
	
	
	}
	
	elseif($loadPage=="alternatif" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM talternatif WHERE id_alternatif=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../framemhs.php?loadPage=dashboardmhs')
	</script>
	";
		
		
		
	}elseif($loadPage=="alternatif" AND $action=="ubahData"){
		 
	$SQL="UPDATE talternatif SET nama_alternatif='$_POST[txtAlternatif]',
							   deskripsi='$_POST[txtDeskripsi]'
							    
		  WHERE id_alternatif='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../framemhs.php?loadPage=alternatif')
	</script>
	";
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../framemhs.php?q=alternatif')
		</script>
		
		";
		}
?>