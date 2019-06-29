<?php
	require '../koneksi.php';
	

	if (isset($_POST['ubah'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		

	if ($_FILES['image']['name']=='') {
			$image1 = $_POST['photo'];
			$query = "UPDATE pengguna SET username='$username', password='$password', level='$level' WHERE id_pengguna='$id_pengguna' ";
			$result = mysqli_query($conn, $query);

			if ($result) {
				echo '<script> alert("Berhasil")
				window.location = "../pengguna.php"
				</script>';
			}
			else {
				echo '<script> alert("Gagal")
				window.location = "../pengguna.php"
				</script>';
			}
		}
			$query = "UPDATE pengguna SET username='$username', password='$password', level='$level' WHERE id_pengguna='$id_pengguna' ";
			$result = mysqli_query($conn, $query);

			if ($result) {
				echo '<script> alert("Data Berhasil Diubah")
				window.location = "../pengguna.php"
				</script>';
			}
			else {
				echo '<script> alert("Datal Gagal Ditambah")
				window.location = "../pengguna.php"
				</script>';
			}
		
		}
	
?>

