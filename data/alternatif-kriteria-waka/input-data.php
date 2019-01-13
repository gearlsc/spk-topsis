 <div class='content-header'>
        <h2 class='content-header-title'>Mahasiswa Prestasi</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=alternatif-kriteriawk'>Daftar Mahasiswa Prestasi</a></li>
          <li class='active'>Input Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
           Input Data Mahasiswa
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='data/alternatif-kriteria-waka/proses.php?loadPage=alternatif-kriteriawk&action=simpanData' enctype='multipart/form-data'>
            <div class='form-group'>
              <label class='col-md-2'>Nama Mahasiswa </label>

              <div class='col-md-6'>
                <input type="text" class="form-control"  name="txtMahasiswa">
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>NIM</label>

              <div class='col-md-6'>
                <input type="text" class="form-control"  name="txtNIM"> 
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Kelas</label>

              <div class='col-md-2'>
                <input type="text" class="form-control"  name="txtKelas" value="<?php echo"$_SESSION[kelas]" ?>" readonly>
                 </div>
            </div>
            
                              

           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=alternatif-kriteriawk'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Simpan</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
