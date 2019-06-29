<?php require(realpath('header.php')); ?>
<?php
	$id_user = $_SESSION['id_user'];
?>
<section class="content">
	<div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TAMBAH PENGGUNA
                        </h2>
                    </div>
                    <div class="body">
                        <form action="pages/tambah_pengguna_apk.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                            <div class="row clearfix">
                                <div class="form-group form-float">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">USERNAME</label>
                                                <input type="text" id="" name=" username" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">PASSWORD</label>
                                                <input type="text" id="" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">NIP</label>
                                                <input type="text" id="" name="nip" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <div class="form-line">
                                                <label class="text-uppercase">Nama pengguna</label>
                                                <input type="text" id="" name="nama_user" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>LEVEL</label>
                                                <select class="form-control show-tick" name="level" required>
                                                    <option>-- Please Select --</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="pegawai">Pegawai</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button type="submit" name="ubah" class="btn btn-success m-t-15 waves-effect" style="top: 30px">SAVE</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							daftar akun pengguna
						</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>USERNAME</th>
                                        <th>PASSWORD</th>
                                        <th>LEVEL</th>
                                       
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                        $no = 0;
                                        $query = "SELECT * FROM user";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['username']?></td>
                                        <td><?php echo $row['password']?></td>
                                        <td><?php echo $row['level']?></td>
                                      
                                        <td><div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-warning waves-effect" onclick="window.location.href='ubah_pengguna.php?id=<?php echo $row['id_user']; ?>'">Ubah</button>
                                                <button type="button" class="btn btn-danger waves-effect" onclick="window.location.href='pages/hapus_pengguna.php?id=<?php echo $row['id_user']; ?>'">Hapus</button>
                                                
                                            </div>
                                        </div></td>
                                    </tr>
                                    <?php
                                        $no++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require(realpath('footer.php')); ?>