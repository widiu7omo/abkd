<?php
	require '../koneksi.php';

	$id_kewajiban = $_GET['id'];
	$query = "DELETE FROM kewajiban_khusus WHERE id_kewajiban = '$id_kewajiban' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo '<script> alert("Berhasil")
		window.location = "../kewajiban_khusus.php"
		</script>';
	}
	else {
		echo '<script> alert("Gagal")
		window.location = "../kewajiban_khusus.php"
		</script>';
	}
?>