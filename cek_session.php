<?php session_start();
if (session_is_registered('noktp'))
{	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.html";
	</script>
	<?php 
}
?>