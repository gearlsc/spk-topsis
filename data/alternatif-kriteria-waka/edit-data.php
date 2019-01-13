 <?php
 $SQL=mysql_query("SELECT * FROM talternatif_kriteria WHERE id_alternatif_kriteria='$_GET[id]'");
 $_data=mysql_fetch_array($SQL);
 echo"
 <div class='content-header'>
        <h2 class='content-header-title'>Mahasiswa Berprestasi</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=alternatif-kriteriawk'>Daftar Mahasiswa Berpestasi</a></li>
          <li class='active'>Edit Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
          Edit Mahasiswa Berprestasi
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='$loadModule?loadPage=alternatif-kriteriawk&action=ubahData' enctype='multipart/form-data'>
		  <input type='hidden' value='$_data[id_alternatif_kriteria]' name='id'>
            
                  <div class='form-group'>
              <label class='col-md-2'>Nama Mahasiswa</label>

              <div class='col-md-2'>
                <input type='text' class='form-control'  name='txtNama' value='$_data[nama_mahasiswa]'>
                 </div>
            </div>
			<div class='form-group'>
              <label class='col-md-2'>Nim</label>

              <div class='col-md-2'>
                <input type='text' class='form-control'  name='txtNim' value='$_data[nim]'>
                 </div>
            </div>
			<div class='form-group'>
              <label class='col-md-2'>Kelas</label>

              <div class='col-md-2'>
                <input type='text' class='form-control'  name='txtKelas' value='$_data[kelas]' readonly>
                 </div>
            </div>
				  


           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=alternatif-kriteriawk'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Ubah</button>
   <button type='reset' class='btn btn-warning '>Reset</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
";?>