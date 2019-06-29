<?php
	require '../koneksi.php';

	if (isset($_POST['simpan'])) {
		$id_kewajiban = $_POST['id_kewajiban'];
		$tahun = $_POST['tahun'];
		$judul_karya = $_POST['judul_karya'];
		$jenis_karya = $_POST['jenis_karya'];
		$forum_publikasi = $_POST['forum_publikasi'];
		$id_user = $_POST['id_user'];

		if ($_FILES['image']['name']=='') {
			$query = "UPDATE kewajiban_khusus SET tahun='$tahun', judul_karya='$judul_karya', jenis_karya='$jenis_karya', forum_publikasi='$forum_publikasi' WHERE id_kewajiban='$id_kewajiban' ";
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
		}
		else {
			$image = $_FILES["image"]["name"];
			$query = "UPDATE kewajiban_khusus SET tahun='$tahun', judul_karya='$judul_karya', jenis_karya='$jenis_karya', forum_publikasi='$forum_publikasi', bukti_dokumen='$image' WHERE id_kewajiban='$id_kewajiban' ";
			$result = mysqli_query($conn, $query);

			if ($result) {
				move_uploaded_file($_FILES['image']['tmp_name'], "../files/kewajiban_khusus/" .$_FILES['image']['name']);
				echo '<script> alert("Berhasil")
				window.location = "../kewajiban_khusus.php"
				</script>';
			}
			else {
				echo '<script> alert("Gagal")
				window.location = "../kewajiban_khusus.php"
				</script>';
			}
		}
	}
?>