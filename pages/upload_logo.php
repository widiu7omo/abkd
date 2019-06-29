<?php
require_once '../koneksi.php';
if(isset($_POST['simpan'])){
	$ekstensi_diperbolehkan	= array('pdf', 'png', 'jpg', 'jpeg');
	$nama = $_FILES['logo']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['logo']['tmp_name'];

	$query = "REPLACE INTO logo (id,name, url) 
					  VALUES (1,'$x[0]','assets/$nama')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if($result){
		move_uploaded_file($file_tmp, '../assets/'.$nama);
		echo '<script> alert("Data Berhasil Ditambah")
				window.location = "../ganti_logo.php"
				</script>';
	}

}