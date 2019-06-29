<?php
	require '../koneksi.php';

	$id_kbpl = $_GET['id'];
	$query = "DELETE FROM kb_penelitian WHERE id_kbpl = '$id_kbpl' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo '<script> alert("Berhasil")
		window.location = "../kb_penelitian.php"
		</script>';
	}
	else {
		echo '<script> alert("Gagal")
		window.location = "../kb_penelitian.php"
		</script>';
	}
?>