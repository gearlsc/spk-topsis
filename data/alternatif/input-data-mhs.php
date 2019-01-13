<?php 
$SQL=mysql_query("SELECT * FROM tmahasiswa WHERE kdMahasiswa='$_GET[id]'");
$e=mysql_fetch_array(mysql_query("SELECT * FROM tmahasiswa WHERE username='$_GET[id]'"));
$_data=mysql_fetch_array($SQL);
?>
	<div class="content-header">
        <h2 class="content-header-title">FORM BEASISWA</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Beasiswa</a></li>
          <li><a href="#">Pendaftaran Beasiswa</a></li>
          <li class="active">Input Data</li>
        </ol>
      </div> <!-- /.content-header -->

		 
         <h5 class="content-header-title">DATA DIRI</h5>
            <hr>
      
          <form class="form-horizontal" role="form" method="post" action="data/alternatif/prosesmhs.php?loadPage=alternatif&action=simpanData" enctype="multipart/form-data">
            
             <div class="form-group">
              <label class="col-md-2">Nama Lengkap</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="txtAlternatif" value="<?php echo"$_SESSION[nmLengkap]" ?>"$_SESSION['nmLengkap']>
              </div>
            </div>
            
            <div class="form-group">
           	  <label class="col-md-2">Jenis Kelamin</label>
			<div class="col-md-4">
            <select name="txtJenKel"  />
			<option value=''>Pilih Jenis Kelamin</option>
			<option value='Laki-laki'>Laki-laki</option>
			<option value='Perempuan'>Perempuan</option>
			</select>
            </div>
			  </div>
            
              <div class="form-group">
              <label class="col-md-2">NIM</label>

              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="NIM" name="txtNIM" value="<?php echo"$_SESSION[username]" ?>" readonly>
              </div>        
            </div>
             
             <div class="form-group">
              <label class="col-md-2">Tempat Tanggal Lahir</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Tempat Lahir" name="txtTTL">
                <input type="date" class="form-control" name="txttgllhr">
              </div>        
            </div>
             
              <div class="form-group">
                <label class="col-md-2">Alamat</label>
                           <div class="col-md-6">
                <input name="txtAlamat" cols="10" rows="3" class="form-control" value="<?php echo"$_SESSION[alamat]" ?>"></div>
            </div>
             
             <div class="form-group">
              <label class="col-md-2">Email</label>

              <div class="col-md-3">
                <input type="email" class="form-control" placeholder="email@example.com" name="txtEmail" value="<?php echo"$_SESSION[email]"?>">
              </div>
                            
            </div>
             
             <div class="form-group">
              <label class="col-md-2">No. Hp</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="08xx-xxxx-xxx" name="txtKontak" value="<?php echo"$_SESSION[kontak]" ?>">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Nilai IPK</label>

              <div class="col-md-1">
                <input type="text" class="form-control" placeholder="x.xx" name="txtIPK">
              </div>
            </div>
             
             <div class="form-group">
              <label class="col-md-2">Upload Berkas</label>

              <div class="col-md-4">
                <input type="file" name="berkas" size="256"><label>Transkrip Nilai</label>
              </div>
			  </div>
			  
			  <div class="form-group">
              <label class="col-md-2"></label>
			  <div class="col-md-4">
                <input type="file" name="berkas" size="256"><label>Scan Kartu Keluarga</label>
              </div>
			  </div>
			  
			   <div class="form-group">
              <label class="col-md-2"></label>
			  <div class="col-md-4">
                <input type="file" name="berkas" size="256"><label>Scan Kartu Mahasiswa</label>
              </div>
			  </div>
			  
			   <div class="form-group">
              <label class="col-md-2"></label>
			  <div class="col-md-4">
                <input type="file" name="berkas" size="256"><label>Surat Aktif Kuliah</label>
              </div>
			  </div>
			  
			   <div class="form-group">
              <label class="col-md-2"></label>
			  <div class="col-md-4">
                <input type="file" name="berkas" size="256"><label>Pas Foto 3x4</label>
              </div>
			  </div>
			  
			   <div class="form-group">
              <label class="col-md-2"></label>
			  <div class="col-md-4">
                <input type="file" name="berkas" size="256"><label>Scan Slip Gaji Orangtua</label>
              </div>
			  </div>
              
              <div class="form-group">
           	  <label class="col-md-2">Status Anak</label>
			<div class="col-md-4">
            <select name="txtStatusAnak"  />
			<option value=''>Pilih Status Anak</option>
			<option value='Lengkap'>Lengkap</option>
			<option value='Yatim atau Piatu'>Yatim</option>
			<option value='Yatim atau Piatu'>Piatu</option>
			<option value='Yatim Piatu'>Yatim Piatu</option>
			</select>
            </div>
			  </div>
           
            <div class="form-group">
           	  <label class="col-md-2">Riwayat Beasiswa</label>
			<div class="col-md-4">
            <select name="txtRiwayat"  />
			<option value=''>Pilih Riwayat Beasiswa</option>
			<option value='Sudah pernah, gagal'>Sudah pernah, gagal</option>
			<option value='Sudah pernah, riwayat buruk'>Sudah pernah, riwayat buruk</option>
			<option value='Sudah pernah, riwayat baik'>Sudah pernah, riwayat baik</option>
			<option value='Belum  pernah'>Belum  pernah</option>
			</select>
            </div>
            
				<div class="form-group" hidden="true">
                <label class="col-md-2">                Deskripsi</label>
                           <div class="col-md-6">
                <textarea name="txtDeskripsi" id="textarea-input" cols="10" rows="3" class="form-control"></textarea></div>
              </div>
          
      
        
      
          <br><hr>
          <h5 class="content-header-title">DATA ORANGTUA</h5>
            <hr>
             <div class="form-group">
              <label class="col-md-2">Nama Ayah/Ibu/Wali</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="txtOrtu">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Pekerjaan</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Pekerjaan" name="txtPekerjaan">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Penghasilan Orang Tua/Wali</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Tanpa titik, Contoh 1000000" name="txtPenghasilan" >
              </div>
            </div>
             
            <div class="form-group">
              <label class="col-md-2">Tanggungan Orang Tua/Wali</label>

              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Tanggungan" name="txtTanggungan">
              </div>
            </div> 
             
              <div class="form-group">
              <label class="col-md-2">No. Hp</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="08xx-xxxx-xxx" name="txtKontakOrtu">
              </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-2">Alamat</label>
                           <div class="col-md-6">
                <textarea name="txtAlamatOrtu" id="textarea-input" cols="10" rows="3" class="form-control"></textarea></div>
                    
            </div>
             
				<div class="form-group" hidden="true">
                <label class="col-md-2">                Deskripsi</label>
                           <div class="col-md-6">
                <textarea name="txtDeskripsi" id="textarea-input" cols="10" rows="3" class="form-control"></textarea></div>
              </div>
           <div class="col-md-8">
  
      	</div> <!-- /.content-header -->
			<div class="col-md-4">
            <a href='?loadPage=alternatif'></a>
   <button type='submit' class='btn btn-success '>Simpan</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
       
