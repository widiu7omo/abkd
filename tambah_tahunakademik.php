<?php require(realpath('header.php')); ?>
<?php
$id_user = $_SESSION['id_user'];
require_once './model/database.php';
if(isset($_POST['simpan'])){
	$tahun = $_POST['tahun'];
	$semester = $_POST['semester'];
	$db = new Database();
	$q = "INSERT INTO tahun_ajaran (tahun, semester) VALUES ('$tahun','$semester')";
	if($db->query($q)){
		echo "<script>alert('Tahun berhasil ditambahkan');window.location.href = 'tahunakademik.php'</script>";
	}
	else echo "<script>alert('Tahun gagal ditambahkan');window.location.href = 'tambah_tahunakademik.php'</script>";

}
?>
	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								Tambah Tahun Akademik
							</h2>
						</div>
						<div class="body">
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="row clearfix">
									<div class="form-group">
										<div class="col-md-6">
											<div class="form-group">
												<div class="form-line">
													<label class="">Tahun Ajaran</label>
													<input type="text" id="" name="tahun" class="form-control" placeholder="2012/2013" required>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<div class="form-line">
													<label class="">Semester</label>
													<select name="semester" id="" class="form-control">
														<option value="">--Pilih Semester--</option>
														<option value="Ganjil">Ganjil</option>
														<option value="Genap">Genap</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row clearfix">
									<div class="form-group form-float">

										<div class="col-md-4">
											<div class="form-group">
												<button type="submit" name="simpan" class="btn btn-success m-t-15 waves-effect" style="top: 20px">SAVE</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php require(realpath('footer.php')); ?>