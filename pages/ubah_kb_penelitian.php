<?php
require '../koneksi.php';

if ( isset( $_POST['simpan'] ) ) {
	$id_user        = $_POST['id_user'];
	$id_kbpl        = $_POST['id_kbpl'];
	$jenis_kegiatan = $_POST['jenis_kegiatan'];
//		$bk_buktipenugasan = $_POST['bk_buktipenugasan'];
	$bk_sks         = $_POST['bk_sks'];
	$masa_penugasan = $_POST['masa_penugasan'];
	$kinerja_sks    = $_POST['kinerja_sks'];
	$rekomendasi    = $_POST['rekomendasi'];
//		$kb_dokumen = $_POST['kb_dokumen'];

	$ekstensi_diperbolehkan = array( 'pdf', 'png', 'jpg', 'jpeg' );
	$kb_dokumen             = $_FILES['file']['name'];
	$x                      = explode( '.', $kb_dokumen );
	$ekstensi               = strtolower( end( $x ) );
	$file_tmp               = $_FILES['file']['tmp_name'];

	$ekstensi_diperbolehkan1 = array( 'pdf', 'png', 'jpg', 'jpeg' );
	$bk_buktipenugasan       = $_FILES['file1']['name'];
	$x1                      = explode( '.', $bk_buktipenugasan );
	$ekstensi1               = strtolower( end( $x1 ) );
	$file_tmp1               = $_FILES['file1']['tmp_name'];

	$tahun    = $_POST['tahun'];
	$semester = $_POST['semester'];

	if ( $_FILES['file']['name'] == '' ) {
		$query = "UPDATE kb_penelitian SET  bk_buktipenugasan='$bk_buktipenugasan' ,jenis_kegiatan='$jenis_kegiatan', bk_sks='$bk_sks', masa_penugasan='$masa_penugasan', kinerja_sks='$kinerja_sks' , rekomendasi='$rekomendasi' WHERE id_kbpl='$id_kbpl' ";
		$result = mysqli_query( $conn, $query ) or die( mysqli_error( $conn ) );
		if ( $result ) {
			move_uploaded_file( $file_tmp1, '../files/kb_penelitian/' . $bk_buktipenugasan );
			echo '<script> alert("Berhasil")
				window.location = "../kb_penelitian.php"
				</script>';
		} else {
			echo '<script> alert("Gagal")
				window.location = "../kb_penelitian.php"
				</script>';
		}
	} elseif ( $_FILES['file1']['name'] == '' ) {
		$query = "UPDATE kb_penelitian SET kb_dokumen='$kb_dokumen', jenis_kegiatan='$jenis_kegiatan', bk_sks='$bk_sks', masa_penugasan='$masa_penugasan', kinerja_sks='$kinerja_sks' , rekomendasi='$rekomendasi' WHERE id_kbpl='$id_kbpl' ";
		$result = mysqli_query( $conn, $query ) or die( mysqli_error( $conn ) );
		if ( $result ) {
			move_uploaded_file( $file_tmp, '../files/kb_penelitian/' . $kb_dokumen );
			echo '<script> alert("Berhasil")
				window.location = "../kb_penelitian.php"
//				</script>';
		} else {
			echo '<script> alert("Gagal")
				window.location = "../kb_penelitian.php"
				</script>';
		}
	} else {
		$query  = "UPDATE kb_penelitian SET jenis_kegiatan='$jenis_kegiatan', bk_buktipenugasan='$bk_buktipenugasan', bk_sks='$bk_sks', masa_penugasan='$masa_penugasan', kinerja_sks='$kinerja_sks' , rekomendasi='$rekomendasi' , kb_dokumen='$kb_dokumen'  WHERE id_kbpl='$id_kbpl' ";
		$result = mysqli_query( $conn, $query );
		if ( $result ) {
			move_uploaded_file( $file_tmp, '../files/kb_penelitian/' . $kb_dokumen );
			move_uploaded_file( $file_tmp1, '../files/kb_penelitian/' . $bk_buktipenugasan );
			echo '<script> alert("Berhasil")
				window.location = "../kb_penelitian.php"
				</script>';
		} else {
			echo '<script> alert("Gagal")
				window.location = "../kb_penelitian.php"
				</script>';
		}
	}
}
?>