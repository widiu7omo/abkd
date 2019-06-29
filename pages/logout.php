<?php
	session_start();
	if (session_destroy()) {
		echo '<script> alert("Logout Berhasil")
			window.location = "../login.php"
			</script>';
	}
?>