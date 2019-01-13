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

<br>


<table width="800" border="0" align="center">
  <tbody>
    <tr>
      <td width="69">&nbsp;</td>
<td width="62">&nbsp;</td>
      <td width="560"><center><img src="./img/logo-login-aak.png" alt="Target Admin" width="40%" ></center></div>
        <div class="account-body" align="center">
          <h3 class="account-body-title">Login Wali Kelas</h3>
          <h5 class="account-body-subtitle">Silahkan Masukan Username dan Password Anda.</h5>
          <form class="form account-form" method="POST" action="cek-loginwk.php">
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
			  <div class="pull-right"> <a href=./registerwk.php>Register</a></div>
            </div>
              <div class="pull-right"> <a href="#">Lupa Password ?</a></div>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4"> Masuk &nbsp; <i class="fa fa-play-circle"></i></button>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <div class="account-wrapper">
          <!-- /.account-body -->
          <div class="account-footer">
            </p>
          </div>
          <!-- /.account-footer -->
        </div>
        <p>&nbsp;</p></td>
      
      <td width="91">&nbsp;</td>
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
