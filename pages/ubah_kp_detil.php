<?php
	require '../koneksi.php';
	

	if (isset($_POST['ubah'])) {
		$nomor_kbp = $_POST['nomor_kbp'];
		$id_kbp = $_POST['id_kbp'];
		$jenis_kegiatan = $_POST['jenis_kegiatan'];
		$bk_sks = $_POST['bk_sks'];
		$masa_penugasan = $_POST['masa_penugasan'];
		$kinerja_sks = $_POST['kinerja_sks'];
		$rekomendasi = $_POST['rekomendasi'];

		$ekstensi_diperbolehkan	= array('pdf', 'png', 'jpg', 'jpeg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['file']['tmp_name'];

		$ekstensi_diperbolehkan1	= array('pdf', 'png', 'jpg', 'jpeg');
		$nama1 = $_FILES['file1']['name'];
		$x1 = explode('.', $nama1);
		$ekstensi1 = strtolower(end($x1));
		$file_tmp1 = $_FILES['file1']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true && in_array($ekstensi1, $ekstensi_diperbolehkan1) === true) {
			move_uploaded_file($file_tmp, '../files/kb_pendidikan/'.$nama);
			move_uploaded_file($file_tmp1, '../files/kb_pendidikan/'.$nama1);

			$result = mysqli_query($conn, "UPDATE  `kb_pendidikan` SET `bk_buktipenugasan` = '$nama', `rekomendasi` = '$rekomendasi', `kb_dokumen` = '$nama1', `jenis_kegiatan` = '$jenis_kegiatan', `bk_sks` = '$bk_sks', `masa_penugasan` = '$masa_penugasan', `kinerja_sks` = '$kinerja_sks' WHERE `kb_pendidikan`.`id_kbp` = '$id_kbp';");

			if ($result) {
				echo '<script> alert("Data Berhasil Ditambah")
				window.location = "../ubah_kb_pendidikan.php?nomor_kbp='.$nomor_kbp.'"
				</script>';
			}
			else {
				echo '<script> alert("Datal Gagal Ditambah")
				window.location = "../ubah_kb_pendidikan.php?nomor_kbp='.$nomor_kbp.'"
				</script>';
			}
		}
		else {
			echo '<script> alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN")
			window.location = "../ubah_kb_pendidikan.php?nomor_kbp='.$nomor_kbp.'"
			</script>';
		}
	}
?>