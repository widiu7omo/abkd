<?php
	require '../koneksi.php';
	require_once '../model/getdata.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$sql = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($sql);

	$check = mysqli_num_rows($sql);

	if ($check == 1) {
		session_start();
		if($row['level'] == 'admin'){
			$_SESSION['username'] = $username;
			$_SESSION['id_user'] = $row['id_user'];
			$_SESSION['level'] = "admin";
			$_SESSION['nama_user'] = "Admin";
			$_SESSION['jab_fungsional'] = 'admin';
		}
		else{
			$user = get_data("SELECT * FROM identitas INNER JOIN user ON identitas.id_user = user.id_user WHERE username = '$username' AND password = '$password'");
			$_SESSION['username'] = $username;
			$_SESSION['id_user'] = $user[0]->id_user;
			$_SESSION['level'] = $user[0]->level;
			$_SESSION['nama_user'] = $user[0]->nama_user;
			$_SESSION['jab_fungsional'] = $user[0]->jab_fungsional;
		}
		if($row['level'] == 'admin'){
			echo '<script> alert("Login Berhasil")
			window.location = "../pengguna.php"
			</script>';
		}
		echo '<script> alert("Login Berhasil")
			window.location = "../index.php"
			</script>';
	}
	else {
		echo '<script> alert("Login Gagal")
			window.location = "../login.php"
			</script>';
	}

?>