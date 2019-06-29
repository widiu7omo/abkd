<?php
	require '../koneksi.php';
	

	if (isset($_POST['simpan'])) {
		$tahun = $_POST['tahun'];
		$judul_karya = $_POST['judul_karya'];
		$jenis_karya = $_POST['jenis_karya'];
		$forum_publikasi = $_POST['forum_publikasi'];
		$id_user = $_POST['id_user'];

		$ekstensi_diperbolehkan	= array('pdf', 'png', 'jpg', 'jpeg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['file']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true ) {
			move_uploaded_file($file_tmp, '../files/kewajiban_khusus/'.$nama);
			$query = "INSERT INTO kewajiban_khusus (id_kewajiban, tahun, judul_karya, jenis_karya, forum_publikasi, bukti_dokumen,id_user) VALUES (NULL, '$tahun', '$judul_karya', '$jenis_karya', '$forum_publikasi', '$nama','$id_user')";
			$result = mysqli_query($conn, $query);

			if ($result) {
				echo '<script> alert("Data Berhasil Ditambah")
				window.location = "../kewajiban_khusus.php"
				</script>';
			}
			else {
				echo '<script> alert("Datal Gagal Ditambah")
				window.location = "../kewajiban_khusus.php"
				</script>';
			}
		}
		else {
			echo '<script> alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN")
			window.location = "../tambah_kb_penelitian.php"
			</script>';
		}
	}
?>