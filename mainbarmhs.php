 <ul class="nav navbar-nav mainbar-nav">

        <li class="active">
          <a href="?loadPage=dashboardmhs">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        </li>

        
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          <i class="fa fa-align-left"></i> 
          Beasiswa
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li class="dropdown-header"><a href="?loadPage=alternatif&action=input-mhs">
            <i class="fa fa-location-arrow nav-icon"></i> 
            Daftar Beasiswa
              </a></li>
            <li class="dropdown-header"><a href="?loadPage=alternatif&action=update-mhs&id=<?php echo "$_SESSION[username]";?>"">
            <i class="fa fa-location-arrow nav-icon"></i> 
            Edit Beasiswa
              </a></li>
           
            
          </ul>
        </li>

        <li class="dropdown ">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-files-o"></i>
          Pengguna</a>
          <ul class="dropdown-menu">
            <li><a href="?loadPage=ganti-password"><i class="fa fa-cogs nav-icon"></i> Ganti Password</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out nav-icon"></i> Logout</a></li>
           
          </ul>
        </li>  

         </ul>
         
