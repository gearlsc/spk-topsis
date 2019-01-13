<html>
<head>
<title>Print</title>
</head>
<body>
 

<table border='0' Width='100%'>  
<tr>
      <td align="center"><img src="./img/logo-login-aak.png" alt="Target Admin" width="15%" ></td>
</tr>
<tr>
    <td align="center"> <h4>AKADEMI ANALIS KESEHATAN JAMBI </h4></td>   
</tr>
<tr>
    <td align="center"> Jl. H. Agus Salim No. 15 Kota Baru, Jambi </td>   
</tr>
<tr>
    <td align="center"> Email : aakjambi00gmail.com | Telp : (0741) 41331 | Kode Pos : 36128</td>   
</tr>
<tr>
    <td align="center">  </td>   
</tr>

	</table>

<hr>

<h3 align="center">Daftar Penerima Beasiswa Prestasi</h3><!-- /.content-header --><!-- /.content-header -->



<tbody>
<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'db_spktopsis';  
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;
?>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table border='1' Width='90%' align="center">  
<tr>
    <th> Nama </th>
    <th> NIM </th>
    <th> Kelas </th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * from talternatif_kriteria" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id_alternatif_kriteria'];
 echo "    
        <tr>
        <td>".$data['nama_mahasiswa']."</td>
        <td>".$data['nim']."</td>
        <td>".$data['kelas']."</td>
        
        </tr> 
        ";
        
}

?>

</table>                                            									
	</tbody>
	
	
	</table>  
</body>
</html>
<?php
echo
"<script>
window.print();
</script>";
?>