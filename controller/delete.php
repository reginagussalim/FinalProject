<?php 
require "../config.php";
require "destinationController.php";
$id = $_GET["id"];

if(delete_dest($id) > 0){
	echo "
		<script>
			alert('destination berhasil dihapus');
			document.location.href='../src/admin/dashboard.php';
		</script>
	";
}else{
	echo "
		<script>
			alert('destination gagal dihapus');
			document.location.href='../src/admin/dashboard.php';
		</script>
	";
}

?>