<?php require( realpath( 'header.php' ) ); ?>
<?php
require_once './model/getdata.php';
$tahunakademik = get_data('SELECT * FROM tahun_ajaran ORDER BY tahun ');
$id_user = $_SESSION['id_user'];
?>
	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="header">
							<h2>
								KINERJA BIDANG PENDIDIKAN
							</h2>
							<ul class="header-dropdown m-r--5">
								<li><a class="btn btn-success" href="tambah_tahunakademik.php">Tambah</a></li>
							</ul>
						</div>
						<div class="body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
									<thead>
									<tr>
										<th>No</th>
										<th>Tahun Akademik</th>
										<th>Semester</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									foreach ($tahunakademik  as $i=> $ta ):
										?>
										<tr class="<?php echo $ta->status==0?null:'red darken-1'?>">
											<td><?php echo $i +1 ?></td>
											<td><?php echo $ta->tahun?></td>
                                            <td><?php echo $ta->semester?></td>
                                            <td><?php echo $ta->status==0?'Tidak Aktif':'Aktif'?></td>
											<td>
												<div class="btn-toolbar" role="toolbar"
												     aria-label="Toolbar with button groups">
													<div class="btn-group" role="group" aria-label="First group">
														<button type="button" class="btn btn-warning waves-effect"
														        onclick="window.location.href='pages/ubah_tahunakademik.php?id=<?php echo $ta->id; ?>'">
															<i class="material-icons">check</i>
														</button>
                                                        <button type="button" class="btn btn-danger waves-effect"
                                                                onclick="window.location.href='pages/hapus_tahunakademik.php?id=<?php echo $ta->id; ?>'">
                                                            <i class="material-icons">delete</i>
                                                        </button>
													</div>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php require( realpath( 'footer.php' ) ); ?>