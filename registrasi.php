<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Informasi Tata Ruang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand">Sistem Informasi Tata Ruang Kota Pasuruan</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
  
      <section class="content">
      <div class="register-box">
     <?php include "koneksi.php";
if(isset($_POST['simpan'])){
  $query_save="insert into registrasi(nopendaftaran,nama,noktp,notelpon,status)
  values(
       '".$_POST['nopendaftaran']."',
       '".$_POST['nama']."',
       '".$_POST['noktp']."',
       '".$_POST['notelpon']."',
       '".$_POST['status']."'
)";
$proses=mysql_query($query_save);
if ($proses) {
  header("location:login.php");
}else{
  echo mysql_error();
}
}


?> 
  <!-- /.login-logo -->
        <div class="register-logo">
        <img src="assets/img/logoo.PNG" width="120" height="144"><br>
            <a href=""><p><h4><b>Informasi Tata Ruang</b></h4></p><p><h4><b> Dinas Pekerjaan Umum dan Penataan Ruang Kota Pasuruan</b></h4></p></a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">Silahkan Daftar</p>

            <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group has-feedback">
                <input type="hidden" name="nopendaftaran" class="form-control" placeholder="nopendaftaran" required>
                <span class="glyphicon glyphicon- form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                <span class="glyphicon glyphicon- form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="noktp" class="form-control" placeholder="No.KTP" required>
                <span class="glyphicon glyphicon-card form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="notelpon" class="form-control" placeholder="No.Telpon/HP" required>
                <span class="glyphicon glyphicon- form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="hidden" name="status" value="pemohon" class="form-control" placeholder="Pemohon" required readonly>
                <span class="glyphicon glyphicon- form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                  <button type="submit" name="simpan" class="btn btn-primary btn-block btn-flat">Registrasi</button>
                </div>
                <!-- /.col -->
            </div>
            </form>

        </div>
    <!-- /.form-box -->
  </div>
    <!-- /.login-box-body -->
  </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019 <a href="https://tataruangkotapasuruan.com">Tata Ruang Kota Pasuruan</a></strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
