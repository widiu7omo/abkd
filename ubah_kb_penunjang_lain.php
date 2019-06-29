<?php require(realpath('header.php')); ?>

<?php
    error_reporting(0);
    $id_user = $_SESSION['id_user'];

    $query_bk_sks = "SELECT SUM(bk_sks) FROM kb_penunjang_lain_temp WHERE id_user = '$id_user'";
    $result = mysqli_query($conn, $query_bk_sks);
    $hasil = $result->fetch_assoc();
    $test = implode($hasil);

    $query_kinerja_sks = "SELECT SUM(kinerja_sks) FROM kb_penunjang_lain_temp WHERE id_user = '$id_user'";
    $result1 = mysqli_query($conn, $query_kinerja_sks);
    $hasil1 = $result1->fetch_assoc();
    $test1 = implode($hasil1);

    $total = $test + $test1;
    
?>

<?php

    $result2 = mysqli_query($conn, "SELECT *, SUM(bk_sks) + SUM(kinerja_sks) AS tsks FROM `kb_pendidikan` WHERE nomor_kbp = '$nomor_kbp2'");

    while ($data = mysqli_fetch_array($result2)) {
        $tahun_ajaran = $data['tahun_ajaran'];
        $nomor_kbp = $data['nomor_kbp'];
        $tsks = $data['tsks'];
    }
?>

<section class="content">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							TAMBAH KINERJA BIDANG PENDIDIKAN
						</h2>
					</div>
                    <?php
                        $id_kbpn = $_GET['id_kbpn'];

                        $result2 = mysqli_query($conn, "SELECT * FROM `kb_penunjang_lain` WHERE id_kbpn = '$id_kbpn'");

                        while ($data = mysqli_fetch_array($result2)) {
                            $jenis_kegiatan = $data['jenis_kegiatan'];
                            $bk_sks = $data['bk_sks'];
                            $kinerja_sks = $data['kinerja_sks'];
                            $masa_penugasan = $data['masa_penugasan'];  
                            $bk_buktipenugasan = $data['bk_buktipenugasan'];
                            $kb_dokumen = $data['kb_dokumen'];

	                        $rekomendasi = $data['rekomendasi'];
	                        $tahun = $data['tahun_ajaran'];
	                        $semester = $data['semester'];
                        }
                    ?>
					<div class="body">
						<form action="pages/ubah_kb_penunjang_lain.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                            <div class="row clearfix">
                                <div class="form-group form-float">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="hidden" id="" name="id_kbpn" value="<?php echo $id_kbpn; ?>">
                                            <input type="hidden" id="" name="nomor_kbp" value="<?php echo $nomor_kbp2; ?>">
                                            <div class="form-line">

                                                <input type="text" id="" name="jenis_kegiatan" class="form-control" value="<?php echo $jenis_kegiatan; ?>">
                                                <label class="form-label">JENIS KEGIATAN</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line" style="bottom: 20px">
                                                <label class="">BUKTI PENUGASAN</label><br>
                                                <small class="text-danger">* file harus berbentuk pdf</small>
                                                <input type="file" id="input_file1" name="file1" class="form-control" accept=".pdf">
                                                <a id="link_pref1" href=""><?php echo $bk_buktipenugasan ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <div class="form-line" >
                                                <input type="number" id="" name="bk_sks" class="form-control" value="<?php echo $bk_sks; ?>">
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
                                                <input type="text" id="" name="masa_penugasan" class="form-control" value="<?php echo $masa_penugasan; ?>">
                                                <label class="form-label">MASA PENUGASAN</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line" style="bottom: 25px">
                                                <label class="">KINERJA BUKTI DOKUMEN</label><br>
                                                <small class="text-danger">* file harus berbentuk pdf</small>
                                                <input accept=".pdf" type="file" id="input_file" name="file" class="form-control">
                                                <a id="link_pref" href=""><?php echo $kb_dokumen ?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <div class="form-line" >
                                                <input type="number" id="" name="kinerja_sks" class="form-control" value="<?php echo $kinerja_sks; ?>">
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
                                                    <option <?php echo $rekomendasi == 'Lanjutkan'?'selected':null; ?> value="Lanjutkan">Lanjutkan</option>
                                                    <option <?php echo $rekomendasi == 'Selesai'?'selected':null; ?> value="Selesai">Selesai</option>
                                                    <option <?php echo $rekomendasi == 'Gagal'?'selected':null; ?> value="Gagal">Gagal</option>
                                                    <option <?php echo $rekomendasi == 'Lainnya'?'selected':null; ?> value="Lainnya">Lainnya</option>
                                                    <option <?php echo $rekomendasi == 'Beban lebih'?'selected':null; ?> value="Beban lebih">Beban lebih</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Tahun</label>
                                                <select class="form-control show-tick" name="tahun">
                                                    <option>-- Please Select --</option>
                                                    <option <?php echo $tahun == '2018/2019'?'selected':null; ?> value="2018/2019">2018/2019</option>
                                                    <option <?php echo $tahun == '2019/2020'?'selected':null; ?> value="2019/2020">2019/2020</option>
                                                    <option <?php echo $tahun == '2020/2021'?'selected':null; ?> value="2020/2021">2020/2021</option>
                                                    <option <?php echo $tahun == '2021/2022'?'selected':null; ?> value="2021/2022">2021/2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Semester</label>
                                                <select class="form-control show-tick" name="semester">
                                                    <option>-- Please Select --</option>
                                                    <option <?php echo $semester== '1'?'selected':null; ?> value="1">Ganjil</option>
                                                    <option <?php echo $semester== '2'?'selected':null; ?> value="2">Genap</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-success m-t-15 waves-effect">
                                            SAVE
                                        </button>
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
<script>
    $('input#input_file').change(function () {
        $('#link_pref').remove();
    })
    $('input#input_file1').change(function () {
        $('#link_pref1').remove();
    })
</script>
