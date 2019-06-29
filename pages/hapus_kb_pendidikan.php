<?php
	require '../koneksi.php';

	$id_kbp = $_GET['id'];
	$query = "DELETE FROM kb_pendidikan WHERE id_kbp = '$id_kbp' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo '<script> alert("Berhasil")
		window.location = "../kb_pendidikan.php"
		</script>';
	}
	else {
		echo '<script> alert("Gagal")
		window.location = "../kb_pendidikan.php"
		</script>';
	}
?>