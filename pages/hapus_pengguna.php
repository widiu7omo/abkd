<?php
	require '../koneksi.php';

	$id_pengguna = $_GET['id'];
	$query = "DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo '<script> alert("Berhasil")
		window.location = "../pengguna.php"
		</script>';
	}
	else {
		echo '<script> alert("Gagal")
		window.location = "../pengguna.php"
		</script>';
	}
?>