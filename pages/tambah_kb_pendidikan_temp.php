<?php
	require '../koneksi.php';
	

	if (isset($_POST['simpan'])) {
		$id_user = $_POST['id_user'];
		$jenis_kegiatan = $_POST['jenis_kegiatan'];
		$bk_sks = $_POST['bk_sks'];
		$masa_penugasan = $_POST['masa_penugasan'];
		$kinerja_sks = $_POST['kinerja_sks'];
		$rekomendasi = $_POST['rekomendasi'];
		$id_kbp = $_POST['id_kbp'];

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
			$query = "INSERT INTO kb_pendidikan_temp (nomor_kbp, jenis_kegiatan, bk_buktipenugasan, bk_sks, masa_penugasan, kinerja_sks, rekomendasi, kb_dokumen, id_user) 
					  VALUES ($id_kbp, '$jenis_kegiatan', '$nama1', '$bk_sks', '$masa_penugasan', '$kinerja_sks', '$rekomendasi', '$nama', '$id_user')";
//			var_dump( $query);
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if ($result) {
				move_uploaded_file($file_tmp, '../files/kb_pendidikan/'.$nama);
				move_uploaded_file($file_tmp1, '../files/kb_pendidikan/'.$nama1);
				echo '<script> alert("Data Berhasil Ditambah")
				window.location = "../tambah_kb_pendidikan.php"
				</script>';
			}
			else {
				echo '<script> alert("Datal Gagal Ditambah")
				window.location = "../tambah_kb_pendidikan.php"
				</script>';
			}
		}
		else {
			echo '<script> alert("EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN")
			window.location = "../tambah_kb_pendidikan.php"
			</script>';
		}
	}
?>