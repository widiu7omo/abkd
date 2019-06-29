<?php
require '../koneksi.php';


if ( isset( $_POST['ubah'] ) ) {
	$username  = $_POST['username'];
	$password  = $_POST['password'];
	$level     = $_POST['level'];
	$nama_user = $_POST['nama_user'];
	$nip       = $_POST['nip'];

	{
		$query  = "INSERT INTO user(username, password, level, nama_user, nip) VALUES ('$username', '$password', '$level','$nama_user','$nip')";
		$result = mysqli_query( $conn, $query );
		$last_user_id = mysqli_insert_id($conn);
		$query  = "INSERT INTO identitas(id_user,nip, nama) VALUES ('$last_user_id','$nip','$nama_user')";
		$result = mysqli_query( $conn, $query );

		if ( $result ) {
			echo '<script> alert("Data Berhasil Ditambah")
				window.location = "../pengguna.php"
				</script>';
		} else {
			echo '<script> alert("Data Gagal Ditambah")
				window.location = "../pengguna.php"
				</script>';
		}
	}

}
?>