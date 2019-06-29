<?php require( realpath( 'header.php' ) ); ?>
<?php
error_reporting( 0 );
require_once './model/database.php';

$id_user = $_SESSION['id_user'];

$query_bk_sks = "SELECT SUM(bk_sks) FROM kb_pengabdian_masy_temp WHERE id_user = '$id_user'";
$result       = mysqli_query( $conn, $query_bk_sks );
$hasil        = $result->fetch_assoc();
$test         = implode( $hasil );

$query_kinerja_sks = "SELECT SUM(kinerja_sks) FROM kb_pengabdian_masy_temp WHERE id_user = '$id_user'";
$result1           = mysqli_query( $conn, $query_kinerja_sks );
$hasil1            = $result1->fetch_assoc();
$test1             = implode( $hasil1 );

$total = $test + $test1;
$db    = new Database();
$q     = "SELECT MAX(id_kbpm) as id_kbpm FROM kb_pengabdian_masy";
$db->query( $q );
$last_no_kbp = $db->fetch();

?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH KINERJA BIDANG PENGABDIAN MASYARAKAT
                            </h2>
                        </div>
                        <div class="body">
                            <form action="pages/tambah_kb_pengabdian_masy_temp.php" method="POST"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                                <input type="hidden" name="id_kbpm"
                                       value="<?php echo count( $last_no_kbp ) > 0 ? $last_no_kbp[0]->id_kbpm + 1 : 0 + 1 ?>">
                                <div class="row clearfix">
                                    <div class="form-group form-float">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="" name="jenis_kegiatan" class="form-control">
                                                    <label class="form-label">JENIS KEGIATAN</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line" style="bottom: 20px">
                                                    <label class="">BUKTI PENUGASAN</label><br>
                                                    <small class="text-danger">* file harus berbentuk pdf</small>
                                                    <input type="file" accept=".pdf" id="" name="file1"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="" name="bk_sks" class="form-control">
                                                    <label class="form-label">SKS</label>
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
                                                    <input type="text" id="" name="masa_penugasan" class="form-control">
                                                    <label class="form-label">MASA PENUGASAN</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line" style="bottom: 25px">
                                                    <label class="">KINERJA BUKTI DOKUMEN</label><br>
                                                    <small class="text-danger">* file harus berbentuk pdf</small>
                                                    <input type="file" accept=".pdf" name="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="" name="kinerja_sks" class="form-control">
                                                    <label class="form-label">SKS</label>
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
                                                    <label>Rekomendasi</label>
                                                    <select class="form-control show-tick" name="rekomendasi">
                                                        <option>-- Please Select --</option>
                                                        <option value="Lanjutkan">Lanjutkan</option>
                                                        <option value="Selesai">Selesai</option>
                                                        <option value="Gagal">Gagal</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                        <option value="Beban lebih">Beban lebih</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button type="submit" name="simpan"
                                                    class="btn btn-success m-t-15 waves-effect">SAVE
                                            </button>
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
                                DATA KINERJA BIDANG PENGABDIAN MASYARAKAT SEMENTARA
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th hidden="">ID KBPM</th>
                                        <th>JENIS KEGIATAN</th>
                                        <th>BUKTI PENUGASAN</th>
                                        <th>SKS</th>
                                        <th>MASA PENUGASAN</th>
                                        <th>KINERJA SKS</th>
                                        <th>REKOMENDASI</th>
                                        <th>DOKUMEN</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									$id_user = $_SESSION['id_user'];
									$db = new Database();
									$query   = "SELECT * FROM kb_pengabdian_masy_temp WHERE id_user = '$id_user'";
									$db->query( $query );
									$kbp_temp = $db->fetch();
									foreach ( $kbp_temp as $key => $kb_penelitian ):
										?>
                                        <tr>
                                            <td><?php echo $kb_penelitian->jenis_kegiatan ?></td>
                                            <td>
                                                <a href="files/kb_pendidikan/<?php echo $kb_penelitian->bk_buktipenugasan ?>"
                                                   target="_blank"><?php echo $kb_penelitian->bk_buktipenugasan ?></a>
                                            </td>
                                            <td class="text-center"><?php echo $kb_penelitian->bk_sks ?></td>
                                            <td><?php echo $kb_penelitian->masa_penugasan ?></td>
                                            <td class="text-center"><?php echo $kb_penelitian->kinerja_sks ?></td>
                                            <td><?php echo $kb_penelitian->rekomendasi ?></td>
                                            <td><a href="files/kb_pendidikan/<?php echo $kb_penelitian->kb_dokumen ?>"
                                                   target="_blank"><?php echo $kb_penelitian->kb_dokumen ?></a></td>

                                        </tr>
									<?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <form action="pages/simpan_kb_pengabdian_masy.php" method="POST">
                                <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                                <div class="row clearfix">
                                    <br>
                                    <div class="">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Tahun</label>
                                                    <select class="form-control show-tick" name="tahun">
                                                        <option>-- Please Select --</option>
                                                        <option value="2018/2019">2018/2019</option>
                                                        <option value="2019/2020">2019/2020</option>
                                                        <option value="2020/2021">2020/2021</option>
                                                        <option value="2021/2022">2021/2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Semester</label>
                                                    <select class="form-control show-tick" name="semester">
                                                        <option>-- Please Select --</option>
                                                        <option value="1">Ganjil</option>
                                                        <option value="2">Genap</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Nomor KBPM</label>
                                                    <input readonly type="text" class="form-control " name="nomor_kbpm" value="<?php echo count( $last_no_kbp ) > 0 ? $last_no_kbp[0]->id_kbpm + 1 : 0 + 1 ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Total SKS</label>
                                                    <input type="text" id="" name="" class="form-control"
                                                           value="<?php echo $total ?>" readonly>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="submit" name="simpan"
                                                        class="btn btn-success m-t-15 waves-effect" style="top: 15px">
                                                    SAVE
                                                </button>
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
<?php require( realpath( 'footer.php' ) ); ?>