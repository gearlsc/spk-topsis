
      <div>
        &nbsp;&nbsp;<h4 class="heading"><?php
	    $tgl=date("d-m-Y");
		$tglIndo=region($tgl);
		echo"Selamat Datang di Sistem Penunjang Keputusan Penerima Beasiswa Pada Akademi Analis Kesehatan  - Tanggal Sekarang :$tgl";
		
		?></h4>
 

        
      </div><!-- /.row -->

      <div class="row">

        <div class="col-md-9">

          <div class="row">

            <div class="col-md-4 col-sm-5">

              <div class="thumbnail">
              <?php
			  if(isset($_SESSION['foto'])){
				  echo"<img src='gambar/pengguna_img/AAK.jpg'>";
				  }else{
					  
					echo"
					<img src='gambar/pengguna_img/AAK.jpg' />";  
					  }
				  
			  ?>
              
               
              </div> <!-- /.thumbnail -->

              <br />

              <div class="list-group">  

                <a href="?loadPage=ganti-password" class="list-group-item">
                  <i class="fa fa-asterisk"></i> &nbsp;&nbsp; Ganti Password

                  <i class="fa fa-chevron-right list-group-chevron"></i>
                </a> 

                <a href="?loadPage=mahasiswa&action=edit&id=<?php echo "$_SESSION[username]";?>" class="list-group-item">
                  <i class="fa fa-book"></i> &nbsp;&nbsp;Edit

                  <i class="fa fa-chevron-right list-group-chevron"></i>
                 
                </a> 
                
               
              </div> <!-- /.list-group -->

            </div> <!-- /.col -->


            <div class="col-md-8 col-sm-7">

              <h2><?php echo"$_SESSION[nmLengkap]";?></h2>

              <h4><?php echo"$_SESSION[username]";?></h4>

              <hr />

             

              <ul class="icons-list">
                <li><i class="icon-li fa fa-envelope"></i> <?php echo"$_SESSION[email]";?></li>
                <li><i class="icon-li fa fa-globe"></i> <?php echo"$_SESSION[kontak]";?></li>
                <li><i class="icon-li fa fa-map-marker"></i> <?php echo"$_SESSION[alamat]";?></li>
              </ul>

              <br />

            
              <br />



            

            
        </div> <!-- /.col -->


      </div> <!-- /.row -->