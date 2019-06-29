<?php require( realpath( 'header.php' ) ); ?>
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
                                KINERJA BIDANG PENDIDIKAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li><a class="btn btn-success" href="tambah_kb_pendidikan.php">Tambah</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>NOMOR KBP</th>
                                        <th>JENIS KEGIATAN</th>
                                        <th>BUKTI PENUGASAN</th>
                                        <th>SKS</th>
                                        <th>MASA PENUGASAN</th>
                                        <th>KINERJA SKS</th>
                                        <th>REKOMENDASI</th>
                                        <th>DOKUMEN</th>
                                        <th>SEMESTER</th>
                                        <th>TAHUN AJARAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									$query  = "SELECT * FROM kb_pendidikan WHERE id_user = '$id_user' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)";
									$result = mysqli_query( $conn, $query );
									while ( $row = mysqli_fetch_array( $result ) ) {
										?>
                                        <tr>
                                            <td><?php echo $row['nomor_kbp'] ?></td>
                                            <td><?php echo $row['jenis_kegiatan'] ?></td>
                                            <td><?php echo $row['bk_buktipenugasan'] ?></td>
                                            <td><?php echo $row['bk_sks'] ?></td>
                                            <td><?php echo $row['masa_penugasan'] ?></td>
                                            <td><?php echo $row['kinerja_sks'] ?></td>
                                            <td><?php echo $row['rekomendasi'] ?></td>
                                            <td><?php echo $row['kb_dokumen'] ?></td>
                                            <td><?php echo $row['semester']==1?'Ganjil':'Genap'?></td>
                                            <td><?php echo $row['tahun_ajaran']?></td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                     aria-label="Toolbar with button groups">
                                                    <div class="btn-group" role="group" aria-label="First group">
                                                        <button type="button" class="btn btn-warning waves-effect"
                                                                onclick="window.location.href='ubah_kb_pendidikan.php?id_kbp=<?php echo $row['id_kbp']; ?>'">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger waves-effect"
                                                                onclick="window.location.href='pages/hapus_kb_pendidikan.php?id=<?php echo $row['id_kbp']; ?>'">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>


                                        </tr>
									<?php } ?>
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