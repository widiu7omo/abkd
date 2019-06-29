<?php
require '../koneksi.php';

$id = $_GET['id'];
$query       = "DELETE FROM tahun_ajaran WHERE id = '$id' ";
$result      = mysqli_query( $conn, $query );
if ( $result ) {
	echo '<script> alert("Berhasil")
		window.location = "../tahunakademik.php"
		</script>';
} else {
	echo '<script> alert("Gagal")
		window.location = "../tahunakademik.php"
		</script>';
}
