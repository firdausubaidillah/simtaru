<?php
include "koneksi.php";
session_start();
if (isset($_POST['login']))
{
	if(isset($_POST['noktp']))
	{
		$noktp = $_POST['noktp'];
		$notelpon = $_POST['notelpon'];
		//$level = $_POST['Level'];
	}else{
		?>
<script type="text/javascript">
alert("Maaf, Data yang dimasukkan salah!!");
document.location = "login.php";
			</script>
        <?php
	}
	
	$query=mysql_query("SELECT * FROM registrasi WHERE noktp='$noktp' and notelpon='$notelpon'");
	$_log=mysql_fetch_array($query);
	if(mysql_num_rows($query))
	{
		$_SESSION['noktp']=$_log['noktp'];
		$_SESSION['notelpon']=$_log['notelpon'];
		$_SESSION['status']=$_log['status'];
		
		
	}
	else
	{
		?>
        	<script type="text/javascript">
				alert("Username dan Password salah");
				document.location="login.php";
			</script>
        <?php
	}
	 if($_SESSION['status']=="pemohon"){
	?>
    <script type="text/javascript">
	document.location="indexpemohon.php"
	</script>
    <?php
     }
	 
	?>
    <script type="text/javascript">
	document.location="indexadmin.php"
	</script>
    <?php
	 }

else{
unset($_POST['login']);
}
?>