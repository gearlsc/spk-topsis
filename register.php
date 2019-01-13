<!DOCTYPE html>
<html class="no-js">
<head>
  <title> Register Dashboard</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- App CSS -->
  <link rel="stylesheet" href="css/target-admin.css">
  <link rel="stylesheet" href="css/custom.css">


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

      <a class="navbar-brand navbar-brand-image" href="index.php">
        <img src="img/logo-aak.png" alt="Site Logo" width="23%" >
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">   

        <li> </li> 

      </ul>
       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

<hr class="account-header-divider">

<table width="800" border="0" align="center">
  <tbody>
    <tr>
      <td width="80">&nbsp;</td>
<td width="80">&nbsp;</td>
      <td width="455"><center><img src="img/logo-login-aak.png" alt="Target Admin" width="30%"></center></div>
        <div class="account-body">
          <h3 class="account-body-title" align="center">Register</h3>
          <h5 class="account-body-subtitle" align="center">Silahkan Isi Form di Bawah ini</h5>
          <form class="form account-form" method="POST" action="proses-register.php">         
             
        
        
        <div class="portlet">
      
             
        <div class="portlet-content">
      
        <table width="400" border="0">
  <tbody>
    <tr>
      <td><label class="col-md-3">Nama Lengkap</label></td>
      <td><input type="text" class="form-control" placeholder="Nama Lengkap" name="txtNmLengkap"></td>
    </tr>
    
    <tr>
      <td><label class="col-md-3">Username</label></td>
      <td><input type="text" class="form-control" placeholder="Diisi dengan NIM" name="txtUsername"></td>
    </tr>
    <tr>
      <td><label class="col-md-3">Password</label></td>
      <td><input type="password" class="form-control" placeholder="Password" name="txtPassword"></td>
    </tr>
    <tr>
      <td><label class="col-md-2">Email</label></td>
      <td><input type="email" class="form-control" placeholder="email@example.com" name="txtEmail"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><button type='submit' class='btn btn-success '>Daftar</button>
   <button type='reset' class='btn btn-warning '>Batal</button></td>
    </tr>
    
  </tbody>
</table>

         
         <!-- /.portlet -->
        
        
        <div class="account-wrapper">
          <!-- /.account-body -->
          
          <!-- /.account-footer -->
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
