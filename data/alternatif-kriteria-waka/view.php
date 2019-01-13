
 <div class="content-header">
        <h2 class="content-header-title">DAFTAR MAHASISWA PRESTASI</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Daftar Nama Mahasiswa Prestasi</li>
        </ol>
      </div> <!-- /.content-header -->

   <div class="content-header">
  <a href='?loadPage=alternatif-kriteriawk&action=input'><button type='button' class='btn btn-info '>Tambah Data</button></a>     
     
      </div> <!-- /.content-header -->

  
 <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Daftar Mahasiswa Prestasi kelas <?php echo "$_SESSION[kelas]" ?> 
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">           

              <div class="table-responsive">

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
                      <th data-filterable="true" data-sortable="true" width="30%">NIM</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Kelas</th>
                      <th data-filterable="false" class="hidden-xs hidden-sm" width="15%">Aksi</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
				  $kriteria=mysql_query("SELECT * FROM talternatif_kriteria where kelas='$_SESSION[kelas]'");
				  $no=1;
				  while($kr=mysql_fetch_array($kriteria)){
					 
					 
					  echo"
					  <tr>
					  <td>$no</td>
					  <td>$kr[nama_mahasiswa]</td>
					  <td>$kr[nim]</td>
					  <td>$kr[kelas]</td>
					  
					  <td>
					  <a href='?loadPage=alternatif-kriteriawk&action=edit&id=$kr[id_alternatif_kriteria]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>
					    <a href='$loadModule?loadPage=alternatif-kriteriawk&action=hapusData&id=$kr[id_alternatif_kriteria]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
					  
					  
					  </td>
					  
					  </tr>
					  
					  
					  ";
					  
					 $no++; }
				  ?>
                  
                  </tbody>
                
                  
                </table>
              </div> <!-- /.table-responsive -->
              

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        

        </div> <!-- /.col -->

      </div> <!-- /.row -->
