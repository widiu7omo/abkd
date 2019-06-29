<?php
	require '../koneksi.php';

	$id_kbpm = $_GET['id'];
	$query = "DELETE FROM kb_pengabdian_masy WHERE id_kbpm = '$id_kbpm' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo '<script> alert("Berhasil")
		window.location = "../kb_pengabdian_masy.php"
		</script>';
	}
	else {
		echo '<script> alert("Gagal")
		window.location = "../kb_pengabdian_masy.php"
		</script>';
	}
?>