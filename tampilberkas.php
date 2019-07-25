<? session_start();?>
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
            <li><?php include "selamatadmin.php" ?></li>
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
           
            <li class="active"><a href="tampilberkas.php"><i class="fa fa-table"></i> Data Pemohon</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            </ul>
            </li>
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

<?php
include "koneksi.php";
$data = mysql_query("select * from berkas where noktp='".$_SESSION['noktp']."'");
?>
<h3 align="center" style="color:#000;">
Data Jabatan 
  </h3>
  <hr />
<form>
<table class="table table-bordered table-hover tablesorter">
<a href="inputberkaspemohon.php">Input Data Baru</a>
<p>
<tr>
	<td>Noreg</td>
	<td>Nama</td>
	<td>Jenis Kelamin</td>
  <td>Tanggal</td>
  <td>No KTP</td>
  <td>Status</td>
  <td>Pilihan</td>
</tr>	
<?php
while ($hasil= mysql_fetch_array($data)) {
	# code...
?>
<tr>
	<td><?php echo $hasil['noreg'] ?></td>
	<td><?php echo $hasil['nama'] ?></td>
  <td><?php echo $hasil['jeniskelamin'] ?></td>
  <td><?php echo $hasil['tanggal'] ?></td>
  <td><?php echo $hasil['noktp'] ?></td>
  <td><?php echo $hasil['status'] ?></td>

	
	<td><a href="detailberkas.php?noreg=<?php echo $hasil['noreg']; ?>">detail</a>
    |
    <a href="hapusjabatan.php?Id_jabatan=<?php echo $hasil['Id_jabatan']; ?>">Hapus</a></td>
</tr>
<?php } ?>




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