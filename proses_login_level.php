<?php
	include('koneksi.php');
	session_start();

	if(isset($_POST['login'])){

	 $username = mysql_real_escape_string(htmlentities($_POST['username']));
	 $password = mysql_real_escape_string(htmlentities($_POST['password']));

	 
	 $cek = mysql_query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'");

		 if (mysql_num_rows($cek)==1) {

			$c = mysql_fetch_array($cek); 

			$_SESSION['username'] = $c['username'];
			$_SESSION['password'] = $c['password'];
			$_SESSION['level'] = $c['level'];
			$_SESSION['id_pengguna'] = $c['id_pengguna'];	

			if($c['level']=="admin"){

				$_SESSION['username']= $username;
				$_SESSION['password']= $password;
				echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/tema/index.php';
				echo '";</script>';


			} else if($c['level']=="user"){

				$_SESSION['username']=$username;
				$_SESSION['password']= $password;
				echo '<script language="javascript">alert("Anda berhasil Login User!"); document.location="user/tema/index.php?';
				echo '";</script>';
			}

		} else {
			echo '<script language="javascript">alert("Password dan Username Salah!"); document.location="login.php?';
				echo '";</script>';

		}
	}
?>