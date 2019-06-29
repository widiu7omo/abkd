<?php require( realpath( 'header.php' ) ); ?>
<?php
require_once './model/getdata.php';
$pendidikan = get_data( 'SELECT kb_pendidikan.*,tahun_ajaran.semester,tahun_ajaran.tahun FROM kb_pendidikan LEFT OUTER JOIN tahun_ajaran on kb_pendidikan.id_tahun = tahun_ajaran.id order by tahun_ajaran.tahun' );
$penelitian = get_data( 'SELECT kb_penelitian.*,tahun_ajaran.semester,tahun_ajaran.tahun FROM kb_penelitian LEFT OUTER JOIN tahun_ajaran on kb_penelitian.id_tahun = tahun_ajaran.id order by tahun_ajaran.tahun' );
$pengabdian = get_data( 'SELECT kb_pengabdian_masy.*,tahun_ajaran.semester,tahun_ajaran.tahun FROM kb_pengabdian_masy LEFT OUTER JOIN tahun_ajaran on kb_pengabdian_masy.id_tahun = tahun_ajaran.id order by tahun_ajaran.tahun' );
$penunjang  = get_data( 'SELECT kb_penunjang_lain.*,tahun_ajaran.semester,tahun_ajaran.tahun FROM kb_penunjang_lain LEFT OUTER JOIN tahun_ajaran on kb_penunjang_lain.id_tahun = tahun_ajaran.id order by tahun_ajaran.tahun' );
$kewajiban  = get_data( 'SELECT kewajiban_khusus.*,tahun_ajaran.semester,tahun_ajaran.tahun FROM kewajiban_khusus LEFT OUTER JOIN tahun_ajaran on kewajiban_khusus.id_tahun = tahun_ajaran.id order by tahun_ajaran.tahun' );
$id_user    = $_SESSION['id_user'];
?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                HISTORY BEBAN DOSEN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <!--								<li><a class="btn btn-success" href="tambah_kb_penelitian.php">Tambah</a></li>-->
                            </ul>
                        </div>
                        <div class="body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse-pendidikan">Pendidikan</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-pendidikan" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th>PENGISIAN</th>
                                                    <th>NOMOR KBPL</th>
                                                    <th>JENIS KEGIATAN</th>
                                                    <th>BUKTI PENUGASAN</th>
                                                    <th>SKS</th>
                                                    <th>MASA PENUGASAN</th>
                                                    <th>KINERJA SKS</th>
                                                    <th>REKOMENDASI</th>
                                                    <th>DOKUMEN</th>
                                                    <th>SEMESTER</th>
                                                    <th>TAHUN AJARAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
												<?php
												foreach ( $pendidikan as $pend ):
													?>
                                                    <tr>
                                                        <td><?php echo $pend->tahun . ' semester ' . $pend->semester ?></td>
                                                        <td><?php echo $pend->nomor_kbp ?></td>
                                                        <td><?php echo $pend->jenis_kegiatan ?></td>
                                                        <td><?php echo $pend->bk_buktipenugasan ?></td>
                                                        <td><?php echo $pend->bk_sks ?></td>
                                                        <td><?php echo $pend->masa_penugasan ?></td>
                                                        <td><?php echo $pend->kinerja_sks ?></td>
                                                        <td><?php echo $pend->rekomendasi ?></td>
                                                        <td><?php echo $pend->kb_dokumen ?></td>
                                                        <td><?php echo $pend->semester == 1 ? 'Ganjil' : 'Genap' ?></td>
                                                        <td><?php echo $pend->tahun_ajaran ?></td>
                                                    </tr>
												<?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse-penelitian">Penelitian</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-penelitian" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th>PENGISIAN</th>
                                                    <th>NOMOR KBPL</th>
                                                    <th>JENIS KEGIATAN</th>
                                                    <th>BUKTI PENUGASAN</th>
                                                    <th>SKS</th>
                                                    <th>MASA PENUGASAN</th>
                                                    <th>KINERJA SKS</th>
                                                    <th>REKOMENDASI</th>
                                                    <th>DOKUMEN</th>
                                                    <th>SEMESTER</th>
                                                    <th>TAHUN AJARAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
												<?php
												foreach ( $penelitian as $pend ):
													?>
                                                    <tr>
                                                        <td><?php echo $pend->tahun . ' semester ' . $pend->semester ?></td>
                                                        <td><?php echo $pend->nomor_kbpl ?></td>
                                                        <td><?php echo $pend->jenis_kegiatan ?></td>
                                                        <td><?php echo $pend->bk_buktipenugasan ?></td>
                                                        <td><?php echo $pend->bk_sks ?></td>
                                                        <td><?php echo $pend->masa_penugasan ?></td>
                                                        <td><?php echo $pend->kinerja_sks ?></td>
                                                        <td><?php echo $pend->rekomendasi ?></td>
                                                        <td><?php echo $pend->kb_dokumen ?></td>
                                                        <td><?php echo $pend->semester == 1 ? 'Ganjil' : 'Genap' ?></td>
                                                        <td><?php echo $pend->tahun_ajaran ?></td>
                                                    </tr>
												<?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse-pengabdian">Pengabdian
                                                Masyarakat</a>

                                        </h4>
                                    </div>
                                    <div id="collapse-pengabdian" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th>PENGISIAN</th>
                                                    <th>NOMOR KBPM</th>
                                                    <th>JENIS KEGIATAN</th>
                                                    <th>BUKTI PENUGASAN</th>
                                                    <th>SKS</th>
                                                    <th>MASA PENUGASAN</th>
                                                    <th>KINERJA SKS</th>
                                                    <th>REKOMENDASI</th>
                                                    <th>DOKUMEN</th>
                                                    <th>SEMESTER</th>
                                                    <th>TAHUN AJARAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
												<?php
												foreach ( $pengabdian as $pend ):
													?>
                                                    <tr>
                                                        <td><?php echo $pend->tahun . ' semester ' . $pend->semester ?></td>
                                                        <td><?php echo $pend->nomor_kbpm ?></td>
                                                        <td><?php echo $pend->jenis_kegiatan ?></td>
                                                        <td><?php echo $pend->bk_buktipenugasan ?></td>
                                                        <td><?php echo $pend->bk_sks ?></td>
                                                        <td><?php echo $pend->masa_penugasan ?></td>
                                                        <td><?php echo $pend->kinerja_sks ?></td>
                                                        <td><?php echo $pend->rekomendasi ?></td>
                                                        <td><?php echo $pend->kb_dokumen ?></td>
                                                        <td><?php echo $pend->semester == 1 ? 'Ganjil' : 'Genap' ?></td>
                                                        <td><?php echo $pend->tahun_ajaran ?></td>
                                                    </tr>
												<?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse-penunjang">Penunjang Lain</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-penunjang" class="panel-collapse collapse">
                                        <div class="panel-body table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                <tr>
                                                    <th>PENGISIAN</th>
                                                    <th>NOMOR KBPN</th>
                                                    <th>JENIS KEGIATAN</th>
                                                    <th>BUKTI PENUGASAN</th>
                                                    <th>SKS</th>
                                                    <th>MASA PENUGASAN</th>
                                                    <th>KINERJA SKS</th>
                                                    <th>REKOMENDASI</th>
                                                    <th>DOKUMEN</th>
                                                    <th>SEMESTER</th>
                                                    <th>TAHUN AJARAN</th>
                                                </tr>
                                                </thead>
                                                <tbody>
												<?php
												foreach ( $penunjang as $pend ):
													?>
                                                    <tr>
                                                        <td><?php echo $pend->tahun . ' semester ' . $pend->semester ?></td>
                                                        <td><?php echo $pend->nomor_kbpn ?></td>
                                                        <td><?php echo $pend->jenis_kegiatan ?></td>
                                                        <td><?php echo $pend->bk_buktipenugasan ?></td>
                                                        <td><?php echo $pend->bk_sks ?></td>
                                                        <td><?php echo $pend->masa_penugasan ?></td>
                                                        <td><?php echo $pend->kinerja_sks ?></td>
                                                        <td><?php echo $pend->rekomendasi ?></td>
                                                        <td><?php echo $pend->kb_dokumen ?></td>
                                                        <td><?php echo $pend->semester == 1 ? 'Ganjil' : 'Genap' ?></td>
                                                        <td><?php echo $pend->tahun_ajaran ?></td>
                                                    </tr>
												<?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
								<?php if ( count( $kewajiban ) > 0 ): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#collapse-kewajiban">Kewajiban Khusus</a>
                                            </h4>
                                        </div>
                                        <div id="collapse-kewajiban" class="panel-collapse collapse">
                                            <div class="panel-body table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                    <tr>
                                                        <th>TAHUN</th>
                                                        <th>JUDUL KARYA</th>
                                                        <th>JENIS KARYA</th>
                                                        <th>FORUM PUBLIKASI</th>
                                                        <th>BUKTI DOKUMEN</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php
													foreach ( $kewajiban as $pend ):
														?>
                                                        <tr>
                                                            <td><?php echo $pend->tahun?></td>
                                                            <td><?php echo $pend->judul_karya?></td>
                                                            <td><?php echo $pend->jenis_karya?></td>
                                                            <td><?php echo $pend->forum_publikasi?></td>
                                                            <td><a href="files/kewajiban_khusus/<?php echo $pend->bukti_dokumen?>" target="_blank"><?php echo  $pend->bukti_dokumen?></a></td>
                                                        </tr>
													<?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require( realpath( 'footer.php' ) ); ?>