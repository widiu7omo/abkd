<?php
require_once '../koneksi.php';
if(isset($_GET['id'])){
	$query = "UPDATE tahun_ajaran set status = 0";
	if(mysqli_query( $conn, $query) or die(mysqli_error($conn))){
		$query = "UPDATE tahun_ajaran set status = 1 where id = $_GET[id]";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if($result){
			echo '<script> alert("Tahun berhasil di update")
				window.location = "../tahunakademik.php"
				</script>';
		}
	}


}