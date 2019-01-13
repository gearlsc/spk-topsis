<!DOCTYPE html>
<html class="no-js">
<head>
  <title> Login Dashboard</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- App CSS -->
  <link rel="stylesheet" href="./css/target-admin.css">
  <link rel="stylesheet" href="./css/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class="account-bg">

<div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="./index.php">
        <img src="./img/logo-aak.png" alt="Site Logo" width="23%">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">   

        <li>
          <a href=./register.php>
            <i class="fa fa-angle-double-right"></i> 
            Register
          </a>
          
        </li> 

      </ul>
       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<hr class="account-header-divider">

<table width="1200" border="0" align="center">
  <tbody>
    <tr>
      <td width="80">&nbsp;</td>
      <td width="455"><div class="account-body">
          <h3 class="account-body-title">Login Mahasiwa</h3>
          <h5 class="account-body-subtitle">Silahkan Masukan Username dan Password Anda.</h5>
          <form class="form account-form" method="POST" action="cek-loginmhs.php">
            <div class="form-group">
              <label for="login-username2" class="placeholder-hidden">Username</label>
              <input type="text" class="form-control" id="login-username2" name="txtUsername" placeholder="Username" tabindex="1">
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="login-password" class="placeholder-hidden">Password</label>
              <input type="password" class="form-control" id="login-password" name="txtPassword" placeholder="Password" tabindex="2">
            </div>
            <!-- /.form-group -->
            <div class="form-group clearfix">
              <div class="pull-left">
                <label class="checkbox-inline">
                  <input type="checkbox" class="" value="" tabindex="3">
                  Ingatkan Saya </label>
              </div>
              <div class="pull-right"> <a href="#">Lupa Password ?</a> </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4"> Masuk &nbsp; <i class="fa fa-play-circle"></i> </button>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <br>
        
        <div class="account-body">
        
        <a href="cetak-bbm.php"><button type='button' class='btn btn-info '>Daftar Nama Penerima Beasiswa Miskin</button></a>
        <br>
        <br>
        <a href="cetak-bmb.php"><button type='button' class='btn btn-info '>Daftar Nama Penerima Beasiswa Berprestasi</button></a>
		<br>
        <br>
	    </div>
        
        <div class="account-wrapper">
          <!-- /.account-body -->
          <div class="account-footer">
            
          </div>
          <!-- /.account-footer -->
        </div>
        
      <p>&nbsp;</p></td>
      <td width="80">&nbsp;</td>
      <td width="455"><div class="account-body">
        <p>Berkas untuk Permohonan Beasiswa : </p>
        <hr>
        <p>a) Kartu Keluarga (KK) dan foto copy Elektronik Kartu Tanda Penduduk (EKTP);</p>
        <p>b) Surat Keterangan belum menikah;</p>
        <p>c) Surat pernyataan tidak sedang menerima Beasiswa atau Bantuan Biaya Pendidikan dari Anggaran Pendapatan dan belanja Negara (APBN) atau Anggaran Pendapatan dan Belanja Daerah (APBD);</h5>
        <p>d) Kartu Mahasiswa;</p>
        <p>e) Surat pernyataan bersedia tidak menikah, bebas narkoba, menaati norma agama dan etika kemasyarakatan;</p>
        <p>f) Surat keterangan masih aktif kuliah dari kampus;</p>
        <p>g) Kartu nilai/kartu hasil studi 2 semester terakhir;</p>
        <p>h) Rekening Bank atas nama Mahasiswa;</p>
        <p>i) Foto warna ukuran 3 x 4 cm;</p>
        <p>j) Kartu Keluarga Sejahtera (KKS) dan Kartu Indonesia Pintar (KIP) jika ada (khusus mahasiswa kurang mampu);</p>
        <p>k) Surat Keterangan Kurang Mampu dari Kepala Desa atau Lurah (khusus mahasiswa kurang mampu); </p>
        <br>
        <p><font color="#FF0004">*File dilampirkan dalam bentuk .pdf dan dijadikan 1 dalam bentuk .rar</font></p>
        
        <form class="form account-form" method="POST" action="cek-login.php">
            <div class="form-group">
              <label for="login-username2" class="placeholder-hidden">Username</label>
</div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="login-password" class="placeholder-hidden">Password</label>
</div>
            <!-- /.form-group -->
            <div class="form-group clearfix">
              <div class="pull-left"> </div>
              <div class="pull-right"> </div>
            </div>
            <!-- /.form-group -->
            <div class="form-group"> </div>
            <!-- /.form-group -->
          </form>
        </div>
<p>&nbsp;</p></td>
      
      <td width="80">&nbsp;</td>
    </tr>
  </tbody>
</table><!-- /.account-wrapper -->

<script src="./js/libs/jquery-1.10.1.min.js"></script>
  <script src="./js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="./js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="./js/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="./js/target-account.js"></script>

  


  

</body>
</html>
