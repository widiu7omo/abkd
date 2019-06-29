<?php
	require '../koneksi.php';

	$id_kbpn = $_GET['id'];
	$query = "DELETE FROM kb_penunjang_lain WHERE id_kbpn = '$id_kbpn' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo '<script> alert("Berhasil")
		window.location = "../kb_penunjang_lain.php"
		</script>';
	}
	else {
		echo '<script> alert("Gagal")
		window.location = "../kb_penunjang_lain.php"
		</script>';
	}
?>