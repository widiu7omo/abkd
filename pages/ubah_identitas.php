<?php
require '../koneksi.php';
session_start();
if ( isset( $_POST['ubah'] ) ) {
	$id_identitas   = $_REQUEST['id_identitas'];
	$nip            = $_POST['nip'];
	$nidn           = $_POST['nidn'];
	$nik            = $_POST['nik'];
	$nama           = $_POST['nama'];
	$gelar_depan    = $_POST['gelar_depan'];
	$gelar_belakang = $_POST['gelar_belakang'];
	$tempat         = $_POST['tempat'];
	$tgl_lahir      = $_POST['tgl_lahir'];
	$no_hp          = $_POST['no_hp'];
	$pend_s1        = $_POST['pend_s1'];
	$pend_s2        = $_POST['pend_s2'];
	$pend_s3        = $_POST['pend_s3'];
	$bidang_ilmu    = $_POST['bidang_ilmu'];
	$alamat_pt      = $_POST['alamat_pt'];
	$asesor_1       = $_POST['asesor_1'];
	$asesor_2       = $_POST['asesor_2'];
	$email          = $_POST['email'];
	$jab_fungsional = $_POST['jab_fungsional'];
	$jenis          = $_POST['jenis'];
	$prodi          = $_POST['prodi'];
	$jurusan        = $_POST['jurusan'];
	$nama_pt        = $_POST['nama_pt'];

	$_SESSION['jab_fungsional'] = $_POST['jab_fungsional'];
	if ( $_FILES['image']['name'] == '' ) {
		$image1 = $_POST['photo'];
		$query  = "UPDATE identitas SET nip='$nip', nidn='$nidn', nik='$nik', nama='$nama', gelar_depan='$gelar_depan', 
					gelar_belakang='$gelar_belakang', tempat='$tempat', tgl_lahir='$tgl_lahir', 
					no_hp='$no_hp', pend_s1='$pend_s1', pend_s2='$pend_s2', pend_s3='$pend_s3', bidang_ilmu='$bidang_ilmu', 
					alamat_pt='$alamat_pt', asesor_1='$asesor_1', asesor_2='$asesor_2', email='$email', jab_fungsional='$jab_fungsional', 
					jenis='$jenis', foto_ktp='$image1',prodi='$prodi',jurusan = '$jurusan',nama_pt = '$nama_pt' WHERE id_identitas='$id_identitas' ";
		$result = mysqli_query( $conn, $query );

		if ( $result ) {
			echo '<script> alert("Berhasil")
								window.location.href = "../index.php";

				</script>';
		} else {
			echo '<script> alert("Gagal tanpa foto")
								window.location.href = "../index.php";

				</script>';
		}
	} else {
		move_uploaded_file( $_FILES['image']['tmp_name'], "../files/identitas/" . $_FILES['image']['name'] );
		$image     = $_FILES["image"]["name"];
		$extension = explode( '.', $image );
		$image     = substr( $image, 0, 10 );
		$image     = $image . '.' . $extension[ count( $extension ) - 1 ];
		$query     = "UPDATE identitas SET nip='$nip', nidn='$nidn', nik='$nik', nama='$nama', gelar_depan='$gelar_depan', gelar_belakang='$gelar_belakang', tempat='$tempat', tgl_lahir='$tgl_lahir', no_hp='$no_hp', pend_s1='$pend_s1', pend_s2='$pend_s2', pend_s3='$pend_s3', bidang_ilmu='$bidang_ilmu', alamat_pt='$alamat_pt', asesor_1='$asesor_1', asesor_2='$asesor_2', email='$email', jab_fungsional='$jab_fungsional', jenis='$jenis', foto_ktp='$image' WHERE id_identitas='$id_identitas' ";
		$result = mysqli_query( $conn, $query ) or die( mysqli_error( $conn ) );

		if ( $result ) {
			echo '<script> alert("Berhasil")
								window.location.href = "../index.php";

				</script>';
		} else {
			echo '<script> alert("Gagal update foto baru");
				window.location.href = "../index.php";
				</script>';
		}
	}
}
?>