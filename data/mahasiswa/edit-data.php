 <?php
 $SQL=mysql_query("SELECT * FROM tmahasiswa WHERE kdMahasiswa='$_GET[id]'");
 $e=mysql_fetch_array(mysql_query("SELECT * FROM tmahasiswa WHERE username='$_GET[id]'"));
 $_data=mysql_fetch_array($SQL);
 echo"
 <div class='content-header'>
        <h2 class='content-header-title'>MAHASISWA</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Mahasiswa</a></li>
          <li><a href='?loadPage=mahasiswa'>Mahasiswa</a></li>
          <li class='active'>Edit Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
          Edit Data Mahasiswa
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='$loadModule?loadPage=mahasiswa&action=ubahData' enctype='multipart/form-data'>
		  <input type='hidden' value='$e[kdMahasiswa]' name='id'>
             <div class='form-group'>
              <label class='col-md-2'>Nama Lengkap</label>

              <div class='col-md-10'>
                <input type='text' class='form-control' placeholder='Nama Lengkap' name='txtNmLengkap' value='$e[nmLengkap]'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Username</label>

              <div class='col-md-4'>
                <input type='text' class='form-control' placeholder='Username' name='txtUsername' value='$e[username]'>
              </div>
            </div>
            
             <div class='form-group'>
              <label class='col-md-2'>Email</label>

              <div class='col-md-10'>
                <input type='email' class='form-control' placeholder='email@example.com' name='txtEmail' value='$e[email]'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Kontak</label>

              <div class='col-md-4'>
                <input type='text' class='form-control' placeholder='08xx-xxxx-xxx' name='txtKontak' value='$e[kontak]'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Alamat</label>

              <div class='col-md-10'>
                <input type='text' class='form-control' placeholder='Jl.Example' name='txtAlamat' value='$e[alamat]'>
              </div>
            </div>
			<div class='form-group'>
              <label class='col-md-2'>Foto Lama</label>

              <div class='col-md-4'>";
			  if(isset($e['foto'])){
				  echo"<img src='gambar/pengguna_img/small/small_$e[foto]'>";
				  }else{
					  echo"Tidak Ada Gambar";
				  }
				  echo"
               
              </div>
            </div>
			<div class='form-group'>
              <label class='col-md-2'>Upload Foto Baru</label>

              <div class='col-md-4'>
                <input type='file' name='upPhoto'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Level Pengguna</label>

              <div class='col-md-4'>";
			  if($e['levelPengguna']=="Mahasiswa"){
				  echo"
				   <input type='radio' value='Mahasiswa' name='rbLevel' checked>
                Mahasiswa
                <input type='radio' value='Umum' name='rbLevel'>
                Umum
				  ";
				  
				 }else{
					 echo"
					 <input type='radio' value='Mahasiswa' name='rbLevel'>
                Mahasiswa
                <input type='radio' value='Umum' name='rbLevel' checked>
                Umum
					 
					 ";
				}
                echo"
              </div>
            </div>
               <div class='form-group'>
              <label class='col-md-2'>Aktif</label>

              <div class='col-md-4'>";
			  if($e['aktif']=="Y"){
				  echo"
				      <input type='radio' value='Y' name='rbAktif' checked>
                Ya
                <input type='radio' value='T' name='rbAktif'>
                Tidak
				  ";
				  }else{
					echo"
					       <input type='radio' value='Y' name='rbAktif'>
                Ya
                <input type='radio' value='T' name='rbAktif' checked>
                Tidak
					";  
					  }
         echo"
              </div>
            </div>
           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=mahasiswa'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Ubah</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
";?>