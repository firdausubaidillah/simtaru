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
           
            <li class="active"><a href="tampilberkasadmin.php"><i class="fa fa-table"></i> Data Pemohon</a></li>
            
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
$data = mysql_query("select * from berkas where noreg='".$_GET['noreg']."'");
?>
<h3 align="center" style="color:#000;">
Data Jabatan 
  </h3>
  <hr />
<form>
<table  class="table table-bordered table-hover tablesorter">
<a href="inputjabatan.php">Input Data Baru</a>
<p>
  <?php
while ($hasil= mysql_fetch_array($data)) {
  # code...
?>
<tr>
	<td>Noreg</td>
  <td>:</td>
  <td><?php echo $hasil['noreg'] ?></td>
</tr>
<tr>
	<td>Nama</td>
  <td>:</td>
  <td><?php echo $hasil['nama'] ?></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
  <td>:</td>
  <td><?php echo $hasil['jeniskelamin'] ?></td>
</tr>
<tr>
  <td>Alamat</td>
  <td>:</td>
  <td><?php echo $hasil['alamat'] ?></td>
</tr>
<tr>
  <td>Pekerjaan</td>
  <td>:</td>
  <td><?php echo $hasil['pekerjaan'] ?></td>
</tr>
<tr>
  <td>Pemanfaatan</td>
  <td>:</td>
  <td><?php echo $hasil['pemanfaatan'] ?></td>
</tr>
<tr>
  <td>Lokasi</td>
  <td>:</td>
  <td><?php echo $hasil['lokasi'] ?></td>
</tr>
<tr>
  <td>No Telpon</td>
  <td>:</td>
  <td><?php echo $hasil['notelpon'] ?></td>
</tr>
<tr>
  <td>Tanggal</td>
  <td>:</td>
  <td><?php echo $hasil['tanggal'] ?></td>
</tr>
<tr>
  <td>No KTP</td>
  <td>:</td>
  <td><?php echo $hasil['noktp'] ?></td>
</tr>
<tr>
  <td>Ktp</td>
  <td>:</td>
  <td><?php echo $hasil['ktp'] ?></td>
</tr>
<tr>
  <td>Kk</td>
  <td>:</td>
  <td><?php echo $hasil['kk'] ?></td>
</tr>
<tr>
  <td>Bukti Kepemilikan Lahan</td>
  <td>:</td>
  <td><?php echo $hasil['bkl'] ?></td>
</tr>
<tr>
  <td>Pbb</td>
  <td>:</td>
  <td><?php echo $hasil['pbb'] ?></td>
</tr>
<tr>
  <td>Surat Pernyataan Penunjukan Lokasi</td>
  <td>:</td>
  <td><?php echo $hasil['sppl'] ?></td>
</tr>
<tr>
  <td>Status</td>
  <td>:</td>
  <td><?php echo $hasil['status'] ?></td>
</tr>

<?php } ?>
</table>
<p align="center">
<a href="editjabatan.php?Id_jabatan=<?php echo $hasil['Id_jabatan']; ?>">Edit</a>
    |
    <a href="hapusjabatan.php?Id_jabatan=<?php echo $hasil['Id_jabatan']; ?>">Hapus</a></p>
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