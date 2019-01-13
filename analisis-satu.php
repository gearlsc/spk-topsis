<div class="content-header">
        <h2 class="content-header-title">Seleksi Beasiswa </h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Analisis</a></li>
          <li class="active">Seleksi Beasiswa</li>
        </ol>
      </div> <!-- /.content-header -->
  
 <div class="row">

              

      <div class="col-md-12">
             
<?php
	function tampiltabel($arr)
	{
		echo '<div class="table-responsive" overflow="auto"><table class="table table-bordered table-highlight">';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
			  for ($j=0;$j<count($arr[$i]);$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table> </div>';
	}
	function tampiltabelmahasiswa($arr)
	{
		echo '<table class="table table-bordered table-highlight">
		<thead><tr>
		<td><h6><center><font color="white">Nama Mahasiswa</center></h6></td>
		<td><h6><center><font color="white">K1</center></h6></td>
		<td><h6><center><font color="white">K2</center></h6></td>
		<td><h6><center><font color="white">K3</center></h6></td>
		<td><h6><center><font color="white">K4</center></h6></td>
		<td><h6><center><font color="white">K5</center></h6></td>
		</tr></thead>';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
		  $countt=count($arr[$i])-1;
			  for ($j=-1;$j<$countt;$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}

function tampiltabelnormalisasi($arr)
	{
		echo '<table class="table table-bordered table-highlight">
		<thead><tr>
		<td><h6><center><font color="white">Nama Mahasiswa</center></h6></td>
		<td><h6><center><font color="white">K1</center></h6></td>
		<td><h6><center><font color="white">K2</center></h6></td>
		<td><h6><center><font color="white">K3</center></h6></td>
		<td><h6><center><font color="white">K4</center></h6></td>
		<td><h6><center><font color="white">K5</center></h6></td>
		</tr></thead>';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
		  $countt=count($arr[$i])-1;
			  for ($j=-1;$j<$countt;$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}
	function tampiltabelnormalisasi2($arr)
	{
		echo '<table class="table table-bordered table-highlight">
		<thead><tr>
		<td><h6><center><font color="white">Nama Mahasiswa</center></h6></td>
		<td><h6><center><font color="white">K1</center></h6></td>
		<td><h6><center><font color="white">K2</center></h6></td>
		<td><h6><center><font color="white">K3</center></h6></td>
		<td><h6><center><font color="white">K4</center></h6></td>
		<td><h6><center><font color="white">K5</center></h6></td>
		</tr></thead>';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
		  $countt=count($arr[$i])-1;
			  for ($j=-1;$j<$countt;$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}


	function tampiltabelkriteria($arr)
	{
		echo '<table class="table table-bordered table-highlight">
		<thead>
		<tr>
		<td><h6><center><font color="white">K1</font></center></h6></td>
		<td><h6><center><font color="white">K2</font></center></h6></td>
		<td><h6><center><font color="white">K3</font></center></h6></td>
		<td><h6><center><font color="white">K4</font></center></h6></td>
		<td><h6><center><font color="white">K5</font></center></h6></td>
		</tr></thead>';
		for ($i=0;$i<count($arr);$i++)
		  {
		  echo '
		
		<tr>';
			  for ($j=0;$j<count($arr[$i]);$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}
	
	function tampilbaris($arr)
	{
		echo '<table class="table table-bordered table-highlight">';
		echo '<thead><tr>
		<td><h6><center><font color="white">K1</center></h6></td>
		<td><h6><center><font color="white">K2</center></h6></td>
		<td><h6><center><font color="white">K3</center></h6></td>
		<td><h6><center><font color="white">K4</center></h6></td>
		<td><h6><center><font color="white">K5</center></h6></td>
		</tr>
		<tr></thead>';
			  for ($i=0;$i<count($arr);$i++)
			  {
			    echo '<td>'.$arr[$i].'</td>';
			  }
		echo "</tr>";
		echo '</table>';
	}
	function tampilbarispembagi($arr)
	{
		echo '<table class="table table-bordered table-highlight">';
		echo '<thead><tr>
		<td><h6><center><font color="white">X1</center></h6></td>
		<td><h6><center><font color="white">X2</center></h6></td>
		<td><h6><center><font color="white">X3</center></h6></td>
		<td><h6><center><font color="white">X4</center></h6></td>
		<td><h6><center><font color="white">X5</center></h6></td>
		</tr>
		<tr></thead>';
			  for ($i=0;$i<count($arr);$i++)
			  {
			    echo '<td>'.$arr[$i].'</td>';
			  }
		echo "</tr>";
		echo '</table>';
	}

	function tampilkolom($arr)
	{
		echo '<table class="table table-bordered table-highlight">';
	  echo '<tr>';
	  
	  for ($i=0;$i<count($arr);$i++)
	  {$jk=0-1;
			echo '<tr>';
			    echo '<td>'.$arr[$jk].'</td>';
			    echo '<td>'.$arr[$i].'</td>';
			echo "</tr>";
	   }
		echo '</table>';
	}
	function tampilkolomalternatif($arr)
	{
		echo '<table class="table table-bordered table-highlight">';
	 
	  for ($i=0;$i<count($arr);$i++)
	  {
			echo '<tr>';
			    echo '<td>'.$arr[$i].'</td>';
			echo "</tr>";
	   }
		echo '</table>';
	}
	
	$alternatif = array(); //array("Galaxy", "iPhone", "BB", "Lumia");
	
	$queryalternatif = mysql_query("SELECT * FROM talternatif ORDER BY id_alternatif");
	$i=0;
	while ($dataalternatif = mysql_fetch_array($queryalternatif))
	{
		$alternatif[$i] = $dataalternatif['nama_alternatif'];
		$i++;
	}
	
	$kriteria = array(); //array("Harga", "Kualitas", "Fitur", "Populer", "Purna Jual", "Keawetan");
	
	$costbenefit = array(); //array("cost", "benefit", "benefit", "benefit", "benefit", "benefit");
	
	$kepentingan = array(); //array(4, 5, 4, 3, 3, 2);

	$querykriteria = mysql_query("SELECT * FROM tkriteria ORDER BY id_kriteria");
	$j=0;
	while ($datakriteria = mysql_fetch_array($querykriteria))
	{
		$kriteria[0][$j] = $datakriteria['nama_kriteria'];
		$kriteria[1][$j] = $datakriteria['costbenefit'];
		$kriteria[2][$j] = $datakriteria['kepentingan'];
		$j++;
	}
	
	$kriteria2 = array(); //array("Harga", "Kualitas", "Fitur", "Populer", "Purna Jual", "Keawetan");
	

	$querykriteria = mysql_query("SELECT * FROM tkriteria ORDER BY id_kriteria");
	$i=0;
	while ($datakriteria = mysql_fetch_array($querykriteria))
	{
		$kriteria2[$i] = $datakriteria['nama_kriteria'];
		$costbenefit2[$i] = $datakriteria['costbenefit'];
		$kepentingan2[$i] = $datakriteria['kepentingan'];
		$i++;
	}
	
	$alternatifkriteria = array();
						 /* array(
							array(3500, 70, 10, 80, 3000, 36),				
							array(4500, 90, 10, 60, 2500, 48),					                           
							array(4000, 80, 9, 90, 2000, 48),												                            
							array(4000, 70, 8, 50, 1500, 60)
						  ); */
	
	$queryalternatif = mysql_query("SELECT * FROM talternatif ORDER BY id_alternatif");
	$i=0;
	while ($dataalternatif = mysql_fetch_array($queryalternatif))
	{
		$querykriteria = mysql_query("SELECT * FROM tkriteria ORDER BY id_kriteria");
		$j=0;
		while ($datakriteria = mysql_fetch_array($querykriteria))
		{
			$queryalternatifkriteria = mysql_query("SELECT * FROM talternatif WHERE id_alternatif = '$dataalternatif[id_alternatif]'");
			$dataalternatifkriteria = mysql_fetch_array($queryalternatifkriteria);
			if ($dataalternatifkriteria['penghasilan_ortu'] >= 4000000)
			{$penghasilan_ortu_fix = 1;}
			if ($dataalternatifkriteria['penghasilan_ortu'] >= 3000000 and $dataalternatifkriteria['penghasilan_ortu'] <= 3999999)
			{$penghasilan_ortu_fix = 2;}
			if ($dataalternatifkriteria['penghasilan_ortu'] >= 2000000 and $dataalternatifkriteria['penghasilan_ortu'] <= 2999999)
			{$penghasilan_ortu_fix = 3;}
			if ($dataalternatifkriteria['penghasilan_ortu'] >= 1000000  and $dataalternatifkriteria['penghasilan_ortu'] <= 1999999)
			{$penghasilan_ortu_fix = 4;}
			if ($dataalternatifkriteria['penghasilan_ortu'] < 1000000)
			{$penghasilan_ortu_fix = 5;}
			if ($dataalternatifkriteria['status_anak'] == "Lengkap")
			{$status_anak_fix = 1;}
			if ($dataalternatifkriteria['status_anak'] == "Yatim atau Piatu")
			{$status_anak_fix = 2;}
			if ($dataalternatifkriteria['status_anak'] == "Yatim Piatu")
			{$status_anak_fix = 4;}
			if ($dataalternatifkriteria['tanggungan_ortu'] == 1)
			{$tanggungan_ortu_fix = 1;}
			if ($dataalternatifkriteria['tanggungan_ortu'] == 2)
			{$tanggungan_ortu_fix = 2;}
			if ($dataalternatifkriteria['tanggungan_ortu'] == 3)
			{$tanggungan_ortu_fix = 3;}
			if ($dataalternatifkriteria['tanggungan_ortu'] == 4)
			{$tanggungan_ortu_fix = 4;}
			if ($dataalternatifkriteria['tanggungan_ortu'] > 4)
			{$tanggungan_ortu_fix = 5;}
			if ($dataalternatifkriteria['ipk'] >= 2.7 and $dataalternatifkriteria['ipk'] <= 2.95 )
			{$ipk_fix = 1;}
			if ($dataalternatifkriteria['ipk'] >= 2.96 and $dataalternatifkriteria['ipk'] <= 3.21 )
			{$ipk_fix = 2;}
			if ($dataalternatifkriteria['ipk'] >= 3.22 and $dataalternatifkriteria['ipk'] <= 3.47 )
			{$ipk_fix = 3;}
			if ($dataalternatifkriteria['ipk'] >= 3.48 and $dataalternatifkriteria['ipk'] <= 3.74 )
			{$ipk_fix = 4;}
			if ($dataalternatifkriteria['ipk'] >= 3.75 and $dataalternatifkriteria['ipk'] <= 4 )
			{$ipk_fix = 5;}
			if ($dataalternatifkriteria['riwayat_beasiswa'] == "Sudah pernah, gagal" )
			{$riwayat_beasiswa_fix = 1;}
			if ($dataalternatifkriteria['riwayat_beasiswa'] == "Sudah pernah, riwayat buruk" )
			{$riwayat_beasiswa_fix = 3;}
			if ($dataalternatifkriteria['riwayat_beasiswa'] == "Sudah pernah, riwayat baik" )
			{$riwayat_beasiswa_fix = 4;}
			if ($dataalternatifkriteria['riwayat_beasiswa'] == "Belum  pernah" )
			{$riwayat_beasiswa_fix = 5;}
			
			if($j == 0)
			{$jk=$j-1;
			$alternatifkriteria[$i][$jk] = $alternatif[$i];
			$alternatifkriteria[$i][$j] = $penghasilan_ortu_fix;
			}
			if($j == 1)
			{
			$alternatifkriteria[$i][$j] = $tanggungan_ortu_fix;
			}
			if($j == 2)
			{
			$alternatifkriteria[$i][$j] = $ipk_fix;
			}
			if($j == 3)
			{
			$alternatifkriteria[$i][$j] = $status_anak_fix;
			}
			if($j == 4)
			{
			$alternatifkriteria[$i][$j] = $riwayat_beasiswa_fix;
			}
			
			$j++;
		}
		$i++;
	}
		
	$pembagi = array();
	
	for ($i=0;$i<count($kriteria2);$i++)
	{
		$pembagi[$i] = 0;
		for ($j=0;$j<count($alternatif);$j++)
		{
			$pembagi[$i] = $pembagi[$i] + ($alternatifkriteria[$j][$i] * $alternatifkriteria[$j][$i]);
		}
		$pembagii[$i]= number_format(sqrt($pembagi[$i]),2);
		$pembagi[$i] = $pembagii[$i];
	}
	
	$normalisasi = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=0;$j<count($kriteria2);$j++)
		{$jk=0-1;
		$normalisasi[$i][$jk] = $alternatif[$i];
			$normalisasi[$i][$j] = number_format(($alternatifkriteria[$i][$j] / $pembagi[$j]),2);
		}
	}

	$terbobot = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=0;$j<count($kriteria2);$j++)
		{$jk=0-1;
		$terbobot[$i][$jk] = $alternatif[$i];
			$terbobot[$i][$j] = $normalisasi[$i][$j] * $kepentingan2[$j];
		}
	}	
	
	$aplus = array();
	
	for ($i=0;$i<count($kriteria2);$i++)
	{
		if ($costbenefit[$i] == 'Cost')
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ $jk=$j-1;
				$aplus[$jk] = $alternatif[$i];
					$aplus[$i] = number_format(($terbobot[$j][$i]),2);
				}
				else 
				{
					if ($aplus[$i] > $terbobot[$j][$i])
					{
						$aplus[$i] = number_format(($terbobot[$j][$i]),2);
					}
				}
			}
		}
		else 
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$aplus[$i] = number_format(($terbobot[$j][$i]),2);
				}
				else 
				{
					if ($aplus[$i] < $terbobot[$j][$i])
					{
						$aplus[$i] = number_format(($terbobot[$j][$i]),2);
					}
				}
			}
		}
	}
	
	$amin = array();
	
	for ($i=0;$i<count($kriteria2);$i++)
	{
		if ($costbenefit[$i] == 'Cost')
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$amin[$i] = $terbobot[$j][$i];
				}
				else 
				{
					if ($amin[$i] < $terbobot[$j][$i])
					{
						$amin[$i] = $terbobot[$j][$i];
					}
				}
			}
		}
		else 
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$amin[$i] = $terbobot[$j][$i];
				}
				else 
				{
					if ($amin[$i] > $terbobot[$j][$i])
					{
						$amin[$i] = $terbobot[$j][$i];
					}
				}
			}
		}
	}
	
	$dplus = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$dplus[$i] = 0;
		for ($j=0;$j<count($kriteria2);$j++)
		{
			$dplus[$i] = $dplus[$i] + (($aplus[$j] - $terbobot[$i][$j]) * ($aplus[$j] - $terbobot[$i][$j]));
			
		}
		
		$dplus[$i] = number_format((sqrt($dplus[$i])),2);
		
	}
	
	$dmin = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$dmin[$i] = 0;
		for ($j=0;$j<count($kriteria2);$j++)
		{
			$dmin[$i] = $dmin[$i] + (($terbobot[$i][$j] - $amin[$j]) * ($terbobot[$i][$j] - $amin[$j]));
		}
		$dmin[$i] = number_format((sqrt($dmin[$i])),2);
		
	}
	
	
	$hasil = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasil[$i] = number_format(($dmin[$i] / ($dmin[$i] + $dplus[$i])),2);
	}	
	
	$alternatifrangking = array();
	$hasilrangking = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasilrangking[$i] = number_format($hasil[$i],2);
		$alternatifrangking[$i] = $alternatif[$i];
	}
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=$i;$j<count($alternatif);$j++)
		{
			if ($hasilrangking[$j] > $hasilrangking[$i])
			{
				$tmphasil = $hasilrangking[$i];
				$tmpalternatif = $alternatifrangking[$i];
				$hasilrangking[$i] = $hasilrangking[$j];
				$alternatifrangking[$i] = $alternatifrangking[$j];
				$hasilrangking[$j] = $tmphasil;
				$alternatifrangking[$j] = $tmpalternatif;
			}
		}
	}
?>
<div id="perhitungan" style="display:none;">
<br />
<h4 class="heading">
Mahasiswa :
</h4>
<?php tampilkolomalternatif($alternatif); ?>
<br />
<h4 class="heading">
Kriteria :
</h4>
<?php
tampiltabelkriteria($kriteria);
 ?>
<br />
<h4 class="heading">
Nilai Mahasiswa :
</h4>
<?php tampiltabelmahasiswa($alternatifkriteria); ?>
<br />
<h4 class="heading">
Pembagi :
</h4>
<?php tampilbarispembagi($pembagi); ?>
<br />
<h4 class="heading">
Matriks Keputusan yang Ternormalisasi:
</h4>
<?php tampiltabelnormalisasi($normalisasi); ?>
<br />
<h4 class="heading">
Matriks Keputusan yang Ternormalisasi Terbobot:
</h4>

<?php tampiltabelnormalisasi2($terbobot); ?>
<br />
<h4 class="heading">
A+ (Solusi Ideal Positif):
</h4>
<?php tampilbaris($aplus); ?>
<br />
<h4 class="heading">
A- (Solusi Ideal Negatif):
</h4>
<?php tampilbaris($amin); ?>
<br />
<h4 class="heading">
D+ (Jarak Nilai Mahasiswa dengan Solusi Ideal Positif):
</h4>
<?php tampilkolom($dplus); ?>
<br />
<h4 class="heading">
D- (Jarak Nilai Mahasiswa dengan Solusi Ideal Negatif):
</h4>
<?php tampilkolom($dmin); ?>
<br />
<h4 class="heading">
Nilai Akhir :
</h4>
<?php tampilkolom($hasil); ?>
<br />
<h4 class="heading">
<!--
Hasil Ranking :
</h4>
<?php tampilkolom($hasilrangking); ?>
<br />
<h4 class="heading">
Alternatif Ranking :
</h4>
<?php tampilkolom($alternatifrangking); ?>
<br />
-->

<!--
Alternatif Terbaik : <h4 class="heading"> <span class="label label-primary"> <?php echo $alternatifrangking[0]; ?></span></h4> Dengan nilai terbesar :  <h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[0]; ?></span></h4><br />
-->

</div>
<br />

<input type="button" class="btn btn-success" value="Perhitungan" onclick="document.getElementById('perhitungan').style.display='block';"/>
<br />
<br />

<table class="table table-bordered table-highlight">
	<thead>
    <tr>
    	<th>Ranking</th>
    	<th>Nama Mahasiswa</th>
    	<th>Nilai</th>
    </tr>
    </thead>
    <tbody>
<?php
	for ($i=0;$i<count($hasilrangking);$i++)
	{	
?>
    <tr>
    	<td><?php echo ($i+1); ?></td>
    	<td><?php echo $alternatifrangking[$i]; ?></td>
    	<td><?php echo $hasilrangking[$i]; ?></td>
    </tr>
<?php
	}
?>
</tbody>
</table>
<br />
<br />

<!--
Mahasiswa Terpilih Medapat Beasiswa : <h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[0]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[1]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[2]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[3]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[4]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[5]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[6]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[7]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[8]; ?></span></h4>
<h4 class="heading"> <span class="label label-primary"><?php echo $alternatifrangking[9]; ?></span></h4>
Dengan Nilai : <h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[0]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[1]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[2]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[3]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[4]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[5]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[6]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[7]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[8]; ?></span></h4>
<h4 class="heading"> <span class="label label-success"> <?php echo $hasilrangking[9]; ?></span></h4>

-->
             
            

        

        </div> <!-- /.col -->

      </div> <!-- /.row -->
