<?php
require '../koneksi.php';
require_once '../model/database.php';


if ( isset( $_POST['simpan'] ) ) {
	$id_user  = $_POST['id_user'];
	$tahun    = $_POST['tahun'];
	$semester = $_POST['semester'];
//		$nomor_kbpl = $_POST['nomor_kbpl'];


	$db = new Database();
	$q = "SELECT jenis_kegiatan, nomor_kbpm, bk_buktipenugasan, bk_sks, masa_penugasan, kinerja_sks, rekomendasi, kb_dokumen, id_user FROM kb_pengabdian_masy_temp WHERE id_user = '$id_user'";
	$db->query($q);

	$data_to_insert = '';
	foreach ( $db->fetch() as $key=> $item ) {
		$data_to_insert .= "('$item->jenis_kegiatan', '$item->nomor_kbpm', '$item->bk_buktipenugasan', '$item->bk_sks', '$item->masa_penugasan', '$item->kinerja_sks', '$item->rekomendasi', '$item->kb_dokumen', '$item->id_user','$semester','$tahun')";
		if(count($db->fetch()) != $key+1){
			$data_to_insert .= ",";
		}
	}

	$clone = mysqli_query( $conn, "INSERT INTO kb_pengabdian_masy (jenis_kegiatan, nomor_kbpm, bk_buktipenugasan, bk_sks, masa_penugasan, kinerja_sks, rekomendasi, kb_dokumen, id_user,semester,tahun_ajaran) VALUES $data_to_insert" );

	if ( $clone ) {
		$hapus = mysqli_query($conn, "DELETE FROM kb_pengabdian_masy_temp WHERE id_user = '$id_user'");
		echo '<script> alert("Data Berhasil Ditambah")
			window.location = "../kb_pengabdian_masy.php"
			</script>';
	} else {
		echo '<script> alert("Data Gagal Ditambah")
			window.location = "../kb_pengabdian_masy.php"
			</script>';
	}
}
?>