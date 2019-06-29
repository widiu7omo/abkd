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
                            TAMBAH KEWAJIBAN KHUSUS
                        </h2>
                    </div>
                    <div class="body">
                        <form action="pages/tambah_kewajiban_khusus.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                            <div class="row clearfix">
                                <div class="form-group form-float">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">Tahun</label>
                                                <input type="text" id="" name="tahun" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">Judul Karya</label>
                                                <input type="text" id="" name="judul_karya" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Jenis Karya</label>
                                                <select class="form-control show-tick" name="jenis_karya" required>
                                                    <option>-- Please Select --</option>
                                                    <option value="Lanjutkan">Lanjutkan</option>
                                                    <option>asasa</option>
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
                                            <div class="form-line">
                                                <label class="">Forum Publikasi</label>
                                                <input type="text" id="" name="forum_publikasi" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line" style="">
                                                <label class="">Bukti Dokumen</label>
                                                <input type="file" id="" name="file" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
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
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							KINERJA KEWAJIBAN KHUSUS
						</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>TAHUN</th>
                                        <th>JUDUL KARYA</th>
                                        <th>JENIS KARYA</th>
                                        <th>FORUM PUBLIKASI</th>
                                        <th>BUKTI DOKUMEN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                        $no = 0;
                                        $query = "SELECT * FROM kewajiban_khusus where id_user = '$id_user' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['tahun']?></td>
                                        <td><?php echo $row['judul_karya']?></td>
                                        <td><?php echo $row['jenis_karya']?></td>
                                        <td><?php echo $row['forum_publikasi']?></td>
                                        <td><a href="files/kewajiban_khusus/<?php echo $row['bukti_dokumen']?>" target="_blank"><?php echo $row['bukti_dokumen']?></a></td>
                                        <td><div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-warning waves-effect" onclick="window.location.href='ubah_kewajiban.php?id=<?php echo $row['id_kewajiban']; ?>'">Ubah</button>
                                                <button type="button" class="btn btn-danger waves-effect" onclick="window.location.href='pages/hapus_kewajiban.php?id=<?php echo $row['id_kewajiban']; ?>'">Hapus</button>
                                                
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