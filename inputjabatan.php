
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tables - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="tampilpegawai.php"><i class="fa fa-bar-chart-o"></i> Pegawai</a></li>
            <li><a href="tampilabsensi.php"><i class="fa fa-table"></i> Data Absensi</a></li>
            <li><a href="inputabsenmasuk.php"><i class="fa fa-table"></i> Absen Masuk</a></li>
            <li><a href="inputabsenkeluar.php"><i class="fa fa-table"></i> Absen Keluar</a></li>
            <li><a href="tampilketerangan.php"><i class="fa fa-edit"></i> Keterangan</a></li>
            <li class="active"><a href="tampiljabatan.php"><i class="fa fa-font"></i> Jabatan</a></li>
            <li><a href="download.php"><i class="fa fa-table"></i> Inventory</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
                
                
            
           </ul> 
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
           
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-table"></i> Jabatan</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
			
			<?php include "koneksi.php";
if(isset($_POST['Simpan'])){
	$query_save="insert into tabel_jabatan(Id_jabatan,Jabatan)
	values(
		   '".$_POST['Id_jabatan']."',
		   '".$_POST['Jabatan']."'
)";
$proses=mysql_query($query_save);
if ($proses) {
	header("location:tampiljabatan.php");
}else{
	echo mysql_error();
}
}


?>

<form method="POST">
<h3 align="center" style="color:#000">Input Jabatan</h3>
<hr />
<table align="center" class="table table-bordered table-hover tablesorter">

	<tr>
		<td>Id Jabatan</td>
		<td>:</td>
		<td><input type="text" name="Id_jabatan" id="Id_jabatan"></td>
	</tr>

	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><input type="text" name="Jabatan" id="Jabatan"></td>
	</tr>
	<tr>
		<td><input type="submit" name="Simpan" id="Simpan" value="Simpan"></td>
		<td></td>
		<td></td>
	</tr>
</table>	
</form>
</tbody>
             
            </div>
          </div>
          
        </div><!-- /.row -->

        <div class="row"></div><!-- /.row -->

        <div class="row"></div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>