<?php 
$SQL=mysql_query("SELECT * FROM talternatif WHERE nim='$_SESSION[username]'");
$e=mysql_fetch_array(mysql_query("SELECT * FROM tmahasiswa WHERE username='$_GET[id]'"));
$_data=mysql_fetch_array($SQL);
?>
	<div class="content-header">
        <h2 class="content-header-title">FORM BEASISWA</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Beasiswa</a></li>
          <li><a href="#">Edit Beasiswa</a></li>
          <li class="active">Update Data</li>
        </ol>
      </div> <!-- /.content-header -->

		 
         <h5 class="content-header-title">DATA DIRI</h5>
            <hr>
      
          <form class="form-horizontal" role="form" method="post" action="data/alternatif/prosesmhs.php?loadPage=alternatif&action=updateData&id=<?php echo "$_SESSION[username]";?>" enctype="multipart/form-data">
            
             <div class="form-group">
              <label class="col-md-2">Nama Lengkap</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="txtAlternatif" value="<?php echo"$_data[nama_alternatif]" ?>"$_SESSION['nmLengkap']>
              </div>
            </div>
            
            <div class="form-group">
           	  <label class="col-md-2">Jenis Kelamin</label>
			<div class="col-md-4">
           <?php 
			if ($_data['jenkel'] == "Laki-laki")
			{ echo "
			<select name='txtJenKel'  />
			<option value=''>Pilih Jenis Kelamin</option>
			<option value='Laki-laki' selected>Laki-Laki</option>
			<option value='Perempuan'>Perempuan</option>
			</select>";}
			else { echo"
				<select name='txtJenKel'  />
			<option value=''>Pilih Jenis Kelamin</option>
			<option value='Laki-laki'>Laki-Laki</option>
			<option value='Perempuan' selected>Perempuan</option>
			</select>";}?>       
            
            </div>
			  </div>
            
              <div class="form-group">
              <label class="col-md-2">NIM</label>

              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="NIM" name="txtNIM" value="<?php echo"$_data[nim]" ?>" readonly>
              </div>        
            </div>
             
             <div class="form-group">
              <label class="col-md-2">Tempat Tanggal Lahir</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Tempat Lahir" name="txtTTL" value="<?php echo"$_data[ttl]" ?>">
                <input type="date" class="form-control" name="txttgllhr" value="<?php echo"$_data[tgllhr]" ?>">
              </div>        
            </div>
             
              <div class="form-group">
                <label class="col-md-2">Alamat</label>
                           <div class="col-md-6">
                <input name="txtAlamat" cols="10" rows="3" class="form-control" value="<?php echo"$_data[alamat]" ?>"></div>
            </div>
             
             <div class="form-group">
              <label class="col-md-2">Email</label>

              <div class="col-md-3">
                <input type="email" class="form-control" placeholder="email@example.com" name="txtEmail" value="<?php echo"$_data[email]"?>">
              </div>
                            
            </div>
             
             <div class="form-group">
              <label class="col-md-2">No. Hp</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="08xx-xxxx-xxx" name="txtKontak" value="<?php echo"$_data[kontak]" ?>">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Nilai IPK</label>

              <div class="col-md-1">
                <input type="text" class="form-control" placeholder="IPK" name="txtIPK" value="<?php echo"$_data[ipk]" ?>">
              </div>
            </div>
             
             <div class="form-group">
              <label class="col-md-2">Upload Berkas</label>

              <div class="col-md-4">
                <input type="file" name="berkas" value="<?php echo"$_data[berkas]" ?>"><label>*dalam format .rar</label>
              </div>
			  </div>
              
              <div class="form-group">
           	  <label class="col-md-2">Status Anak</label>
			<div class="col-md-4">
             <?php 
			if ($_data['status_anak'] == "Lengkap")
			{ echo "
			<select name='txtStatusAnak' />
			<option value=''>Pilih Status Anak</option>
			<option value='Lengkap' selected>Lengkap</option>
			<option value='Yatim atau Piatu'>Yatim atau Piatu</option>
			<option value='Yatim Piatu'>Yatim Piatu</option>
			</select>";}
			else if ($_data['status_anak'] == "Yatim Piatu")
			{ echo"
			<select name='txtStatusAnak' />
			<option value=''>Pilih Status Anak</option>
			<option value='Lengkap'>Lengkap</option>
			<option value='Yatim atau Piatu'>Yatim atau Piatu</option>
			<option value='Yatim Piatu' selected>Yatim Piatu</option>
			</select>";}
			else if ($_data['status_anak'] == "Yatim atau Piatu")
			{ echo"
			<select name='txtStatusAnak' />
			<option value=''>Pilih Status Anak</option>
			<option value='Lengkap'>Lengkap</option>
			<option value='Yatim atau Piatu' selected>Yatim atau Piatu</option>
			<option value='Yatim Piatu'>Yatim Piatu</option>
			</select>";}?>   
            
            </div>
			  </div>
           
            <div class="form-group">
           	  <label class="col-md-2">Riwayat Beasiswa</label>
			<div class="col-md-4">
             <?php 
			if ($_data['riwayat_beasiswa'] == "Sudah pernah, gagal")
			{ echo "
			<select name='txtRiwayat'  />
			<option value=''>Pilih Riwayat Beasiswa</option>
			<option value='Sudah pernah, gagal' selected>Sudah pernah, gagal</option>
			<option value='Sudah pernah, riwayat buruk'>Sudah pernah, riwayat buruk</option>
			<option value='Sudah pernah, riwayat baik'>Sudah pernah, riwayat baik</option>
			<option value='Belum  pernah'>Belum  pernah</option>
			</select>";}
			else if ($_data['riwayat_beasiswa'] == "Sudah pernah, riwayat buruk")
			{ echo "
			<select name='txtRiwayat'  />
			<option value=''>Pilih Riwayat Beasiswa</option>
			<option value='Sudah pernah, gagal' >Sudah pernah, gagal</option>
			<option value='Sudah pernah, riwayat buruk' selected>Sudah pernah, riwayat buruk</option>
			<option value='Sudah pernah, riwayat baik'>Sudah pernah, riwayat baik</option>
			<option value='Belum  pernah'>Belum  pernah</option>
			</select>";}
			else if ($_data['riwayat_beasiswa'] == "Sudah pernah, riwayat baik")
			{ echo "
			<select name='txtRiwayat'  />
			<option value=''>Pilih Riwayat Beasiswa</option>
			<option value='Sudah pernah, gagal' >Sudah pernah, gagal</option>
			<option value='Sudah pernah, riwayat buruk' >Sudah pernah, riwayat buruk</option>
			<option value='Sudah pernah, riwayat baik' selected>Sudah pernah, riwayat baik</option>
			<option value='Belum  pernah'>Belum  pernah</option>
			</select>";}
			else if ($_data['riwayat_beasiswa'] == "Belum  pernah")
			{ echo "
			<select name='txtRiwayat'  />
			<option value=''>Pilih Riwayat Beasiswa</option>
			<option value='Sudah pernah, gagal' >Sudah pernah, gagal</option>
			<option value='Sudah pernah, riwayat buruk' >Sudah pernah, riwayat buruk</option>
			<option value='Sudah pernah, riwayat baik' >Sudah pernah, riwayat baik</option>
			<option value='Belum  pernah' selected>Belum  pernah</option>
			</select>";}?>
            
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
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="txtOrtu" value="<?php echo"$_data[nama_ortu]" ?>">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Pekerjaan</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Pekerjaan" name="txtPekerjaan" value="<?php echo"$_data[pekerjaan]" ?>">
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-md-2">Penghasilan Orang Tua/Wali</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Penghasilan" name="txtPenghasilan" value="<?php echo"$_data[penghasilan_ortu]" ?>">
              </div>
            </div>
             
            <div class="form-group">
              <label class="col-md-2">Tanggungan Orang Tua/Wali</label>

              <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Tanggungan" name="txtTanggungan" value="<?php echo"$_data[tanggungan_ortu]" ?>">
              </div>
            </div> 
             
              <div class="form-group">
              <label class="col-md-2">No. Hp</label>

              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="08xx-xxxx-xxx" name="txtKontakOrtu" value="<?php echo"$_data[kontak_ortu]" ?>">
              </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-2">Alamat</label>
                           <div class="col-md-6">
                <input name="txtAlamatOrtu" id="textarea-input" cols="10" rows="3" class="form-control" value="<?php echo"$_data[alamat_ortu]" ?>"></div>
                    
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
   <button type='submit' class='btn btn-success '>Update</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
       
