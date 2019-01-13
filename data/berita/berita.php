<?php

session_start();
ini_set( "display_errors", 0);
if ($_SESSION[username])
{
include "conn.php";
  

if ($_POST[berita])
							   {
								$judul_seo=seo_title($_POST[judul]);
								$isi_berita=$_POST[isi_berita];
								mysql_query("insert into berita (judul,judul_seo,isi_berita,headline) values ('$_POST[judul]','$judul_seo','$_POST[isi_berita]','N')");   
								 echo "<script>alert('berita berhasil ditambah  '); window.location = 'berita.php?hal=berita'</script>";
								 
							   }
if ($_POST[update])
							   {
								$judul_seo=seo_title($_POST[judul]);
								$isi_berita=$_POST[isi_berita];
								mysql_query("update berita set judul='$_POST[judul]', judul_seo='$judul_seo', isi_berita='$isi_berita' where id_berita='$_POST[id]'");   
								 echo "<script>alert('berita berhasil update  '); window.location = 'berita.php?hal=berita'</script>";
								 
							   }



?>

<!DOCTYPE html>
<html class="no-js">
    
     
    <body>
        
				<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Kelola Berita </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <a href="berita.php?module=add"><i class='icon-plus'></i>  Tambah berita</a>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										
										$sis=mysql_query("select * from berita order by id_berita desc   ");
										while ($r=mysql_fetch_array($sis))
										
										?>
                                            <tr class="<?php echo "$cl";?>">
                                               
                                                <td><?php echo" $r[judul]";?> </td>
                                               
                                                <td class="center">
												<a href="hapus.php?id=<?php echo "$r[id_berita]";?>"><i class='icon-remove'></i> hapus</a> | 
												<a href="berita.php?hal=edit&id=<?php echo "$r[id_berita]";?>"><i class='icon-edit'></i> edit</a> |
												<a href="../permohonan/index.php?hal=<?php echo"$r[judul_seo]";?>" target="_blank">
												<i class="icon-globe"></i>Lihat</a></td>
												
                                            </tr>
                                        <?php
										}
										
										?>
										
										
										
										
										
										
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
				
				
				
				
				
				
				
				
				
				<?php

				}
				if($_GET[module] == 'add')
				{
				?>		
			     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">tambah berita </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  <form method="post" action="<?php echo $PHP_SELF ?>">
											<div class="control-group">
											<label class="control-label">judul berita&nbsp;&nbsp;</label>
											<div class="controls">
											<input name="judul" type="text" class="span6 m-wrap" required/>
											</div>
											</div>
											<div class="control-group">
											<label class="control-label">isi berita&nbsp;&nbsp;</label>
											<div class="controls">
											<textarea  id="travaweb" name="isi_berita"  width="100%"/></textarea>
											</div>
											</div>
											<div class="control-group">
											<input name="berita" type="submit" value="simpan berita" />
											</div>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <?php
				}
				if($_GET[hal] == 'edit')
				{
			    $e=mysql_fetch_array(mysql_query("select * from berita where id_berita='$_GET[id]'"));
				?>
				  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Berita </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  <form method="post" action="<?php echo $PHP_SELF ?>">
											<div class="control-group">
											<label class="control-label">Judul Berita&nbsp;&nbsp;</label>
											<div class="controls">
											<input name="judul" type="text" class="span6 m-wrap" value="<?php echo "$e[judul]";?>" required/>
												<input name="id" type="hidden" class="span6 m-wrap" value="<?php echo "$e[id_berita]";?>" required/>
											</div>
											</div>
											<div class="control-group">
											<label class="control-label">Isi Berita&nbsp;&nbsp;</label>
											<div class="controls">
											<textarea  id="travaweb" name="isi_berita"  width="100%"/><?php echo "$e[isi_berita]";?></textarea>
											</div>
											</div>
											<div class="control-group">
											<input name="update" type="submit" value="simpan berita" />
											</div>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
				
				<?php
				}
				?>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; AKADEMI ANALISIS KESEHATAN JAMBI</p>
            </footer>
        </div>
											
											</fieldset>
											</form>
											</div>
        <!--/.fluid-container-->
        <script src="../vendors/jquery-1.9.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>
<?php


header('location:indexadmin.php');


?>