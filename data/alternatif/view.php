<?php if ($_POST[submitperiode])
							   {echo "<script>window.location = '?loadPage=alternatif&id=$_POST[periode]'</script>";}
						   ?>
 <div class="content-header">
        <h2 class="content-header-title">DAFTAR MAHASISWA MISKIN</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Daftar Nama Mahasiswa Miskin</li>
        </ol>
      </div> <!-- /.content-header -->

   <div class="content-header">
  <a href='?loadPage=alternatif&action=input-mhs'><button type='button' class='btn btn-info '>Tambah Data</button></a>
     
  <a href="cetak-bbm.php"><button type='button' class='btn btn-info '>Cetak Laporan</button></a>
      </div> <!-- /.content-header -->
  
  <div class="row" >

        <div class="col-md-12" >

          <div class="portlet">

            <div class="portlet-header" >

              <h3>
                <i class="fa fa-table"></i>
              Periode
              </h3>

            </div>
			 <div class="portlet-content">           

              <div class="table-responsive" overflow="auto">
               <div class="overflow">
			   <form method="post" action="<?php echo $PHP_SELF ?>">
											<label class="control-label">Pilih Periode</label>
											<!--<select name='factor' /> -->
                                           	
											<?php if($_GET[id]=="2017"){
				  echo"
				   <select name='periode'/>
			<option value=''>Pilih Periode</option>
			<option value='2017' selected>2017</option>
			<option value='2018'>2018</option>
			<option value='2019'>2019</option>
			</select>
				  ";
				  
				  }
				  
				 else if($_GET[id]=="2018"){
				  echo"
				   <select name='periode'/>
			<option value=''>Pilih Periode</option>
			<option value='2017'>2017</option>
			<option value='2018' selected>2018</option>
			<option value='2019'>2019</option>
			</select>
				  ";
				  
				  }
				  
				  else if($_GET[id]=="2019"){
				  echo"
				   <select name='periode'/>
			<option value=''>Pilih Periode</option>
			<option value='2017'>2017</option>
			<option value='2018'>2018</option>
			<option value='2019' selected>2019</option>
			</select>
				  ";
				  
				  }
				  
				  else{
					  echo"
					   <select name='periode'/>
			<option value='' selected>Pilih Periode</option>
			<option value='2017'>2017</option>
			<option value='2018'>2018</option>
			<option value='2019'>2019</option>
			</select>
				  ";
					  } ?> 
				  							
											<div class="control-group">
											<input name="submitperiode" type="submit" value="Submit" />
											</div>
									</form>
			   </div>
			   </div>
			   </div>
			</div>
			</div>
			</div>
   
  
 <div class="row" >

        <div class="col-md-12" >

          <div class="portlet">

            <div class="portlet-header" >

              <h3>
                <i class="fa fa-table"></i>
              Daftar Alternatif
              </h3>

            </div>
           
             <!-- /.portlet-header -->

            <div class="portlet-content">           

              <div class="table-responsive" overflow="auto">
               <div class="overflow">

              <table 
                class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                data-provide="datatable" 
                data-display-rows="10"
                data-info="true"
                data-search="true"
                data-length-change="true"
                data-paginate="true"
                
              >
                  <thead>
                    <tr>
                        
                      <th data-filterable="true" data-sortable="true" data-direction="asc" width="5%">No</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Nama Mahasiswa</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">NIM</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Nilai IPK</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Jenis Kelamin</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Tempat, Tanggal Lahir</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Email</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Kontak</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Alamat</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Nama orang Tua</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Pekerjaan Orang Tua</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Kontak Orang Tua</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Penghasilan Orang Tua</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Tanggungan Orang Tua</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Status Anak</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Riwayat Beasiswa</th>
                      <th data-filterable="true" data-sortable="true">Lampiran Berkas</th>
                      <th data-filterable="false" class="hidden-xs hidden-sm">Aksi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
				  $alternatif=mysql_query("SELECT * FROM talternatif where tahun='$_GET[id]' ORDER BY nama_alternatif ASC");
				  $no=1;
				  while($al=mysql_fetch_array($alternatif)){
					  $text=$al['deskripsi'];
					  $deskripsi=substr($text,0,100);
					  echo"
					  <tr>
					  <td>$no</td>
					  <td>$al[nama_alternatif]</td>
					  <td>$al[nim]</td>
					  <td>$al[ipk]</td>
					  <td>$al[jenkel]</td>
					  <td>$al[ttl],$al[tgllhr]</td> 
					  <td>$al[email]</td>
					  <td>$al[kontak]</td>
					  <td>$al[alamat]</td>
					  <td>$al[nama_ortu]</td>
					  <td>$al[pekerjaan]</td>
					  <td>$al[kontak_ortu]</td>
					  <td>$al[penghasilan_ortu]</td>
					  <td>$al[tanggungan_ortu]</td>
					  <td>$al[status_anak]</td>
					  <td>$al[riwayat_beasiswa]</td>
					  <td>$deskripsi</td>
					  <td>
					  <!--<a href='?loadPage=alternatif&action=edit&id=$al[id_alternatif]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a> -->
					    <a href='$loadModule?loadPage=alternatif&action=hapusData&id=$al[id_alternatif]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
					  
					  
					  </td>
					  
					  </tr>
					  
					  
					  ";
					  
					 $no++; }
				  ?>
                  
                  </tbody>
                </table>
                
                <hr>
                <table>
                
                  <li align="center">Jumlah Penghasilan  Orang Tua</li>
                <br>
                              
                <div align="left">
                  <table border="1" cellspacing="0" cellpadding="0" width="453" align="center">
                    <tr>
                      <td width="123" valign="bottom"><p align="center"><strong>Klasifikasi</strong></p></td>
                      <td width="170" valign="bottom"><p align="center"><strong>Range Nilai</strong></p></td>
                      <td width="161" valign="bottom"><p align="center"><strong>Nilai Bobot</strong></p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center">&gt;= 4.000.000 </p></td>
                      <td width="161" valign="bottom"><p align="center">1 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center">&gt;= 3.000.000 </p></td>
                      <td width="161" valign="bottom"><p align="center">2 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Cukup</p></td>
                      <td width="170" valign="bottom"><p align="center">&gt;= 2.000.000 </p></td>
                      <td width="161" valign="bottom"><p align="center">3 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center">&gt;= 1.000.000 </p></td>
                      <td width="161" valign="bottom"><p align="center">4 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center">&lt; 1.000.000 </p></td>
                      <td width="161" valign="bottom"><p align="center">5 </p></td>
                    </tr>
                </table>    
                    
                    <br>
                    
                  <li align="center">Jumlah Tanggungan Orang Tua </li>
                <br>
                
                <div align="left">
                  <table border="1" cellspacing="0" cellpadding="0" width="453" align="center">
                    <tr>
                      <td width="123" valign="bottom"><p align="center"><strong>Klasifikasi</strong></p></td>
                      <td width="170" valign="bottom"><p align="center"><strong>Range Nilai</strong></p></td>
                      <td width="161" valign="bottom"><p align="center"><strong>Nilai Bobot</strong></p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> 1 </p></td>
                      <td width="161" valign="bottom"><p align="center">1 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> 2 </p></td>
                      <td width="161" valign="bottom"><p align="center">2 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Cukup</p></td>
                      <td width="170" valign="bottom"><p align="center"> 3 </p></td>
                      <td width="161" valign="bottom"><p align="center">3 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center"> 4 </p></td>
                      <td width="161" valign="bottom"><p align="center">4 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center">> 4 </p></td>
                      <td width="161" valign="bottom"><p align="center">5 </p></td>
                    </tr>
					</table>
                 
                 
                 <br>
                    
                  <li align="center">Nilai IPK</li>
                <br>
                
                <div align="left">
                  <table border="1" cellspacing="0" cellpadding="0" width="453" align="center">
                    <tr>
                      <td width="123" valign="bottom"><p align="center"><strong>Klasifikasi</strong></p></td>
                      <td width="170" valign="bottom"><p align="center"><strong>Range Nilai</strong></p></td>
                      <td width="161" valign="bottom"><p align="center"><strong>Nilai Bobot</strong></p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> 2.70 - 2.95 </p></td>
                      <td width="161" valign="bottom"><p align="center">1 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> 2.96 - 3.21 </p></td>
                      <td width="161" valign="bottom"><p align="center">2 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Cukup</p></td>
                      <td width="170" valign="bottom"><p align="center"> 3.22 - 3.47 </p></td>
                      <td width="161" valign="bottom"><p align="center">3 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center"> 3.48 - 3.74 </p></td>
                      <td width="161" valign="bottom"><p align="center">4 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center"> 3.75 - 4.00 </p></td>
                      <td width="161" valign="bottom"><p align="center">5 </p></td>
                    </tr>
					</table>
                 
                  <br>
                    
                  <li align="center">Status Anak</li>
                <br>
                
                <div align="left">
                  <table border="1" cellspacing="0" cellpadding="0" width="453" align="center">
                    <tr>
                      <td width="123" valign="bottom"><p align="center"><strong>Klasifikasi</strong></p></td>
                      <td width="170" valign="bottom"><p align="center"><strong>Range Nilai</strong></p></td>
                      <td width="161" valign="bottom"><p align="center"><strong>Nilai Bobot</strong></p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> Lengkap </p></td>
                      <td width="161" valign="bottom"><p align="center">1 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> Piatu </p></td>
                      <td width="161" valign="bottom"><p align="center">2 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Cukup</p></td>
                      <td width="170" valign="bottom"><p align="center"> Yatim Piatu Ada Wali </p></td>
                      <td width="161" valign="bottom"><p align="center">3 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center"> Yatim </p></td>
                      <td width="161" valign="bottom"><p align="center">4 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center"> Yatim Piatu Tidak Ada Wali </p></td>
                      <td width="161" valign="bottom"><p align="center">5 </p></td>
                    </tr>
					</table>
                 
                  <br>
                    
                  <li align="center">Riwayat Beasiswa</li>
                <br>
                
                <div align="left">
                  <table border="1" cellspacing="0" cellpadding="0" width="453" align="center">
                    <tr>
                      <td width="123" valign="bottom"><p align="center"><strong>Klasifikasi</strong></p></td>
                      <td width="170" valign="bottom"><p align="center"><strong>Range Nilai</strong></p></td>
                      <td width="161" valign="bottom"><p align="center"><strong>Nilai Bobot</strong></p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Sangat Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> Sudah pernah, gagal </p></td>
                      <td width="161" valign="bottom"><p align="center">1 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Rendah</p></td>
                      <td width="170" valign="bottom"><p align="center"> Sudah pernah, riwayat buruk </p></td>
                      <td width="161" valign="bottom"><p align="center">3 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Cukup</p></td>
                      <td width="170" valign="bottom"><p align="center"> Sudah pernah, riwayat baik </p></td>
                      <td width="161" valign="bottom"><p align="center">4 </p></td>
                    </tr>
                    <tr>
                      <td width="123" valign="bottom"><p align="center">Tinggi</p></td>
                      <td width="170" valign="bottom"><p align="center"> Belum  pernah </p></td>
                      <td width="161" valign="bottom"><p align="center">5 </p></td>
                    </tr>
                    </table>
                 
                 <br>
                 
                  </table>
                </div>
              </div> <!-- /.table-responsive -->
              

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        

        </div> <!-- /.col -->

      </div> <!-- /.row -->
