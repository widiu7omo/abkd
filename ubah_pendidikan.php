<?php require(realpath('header.php')); ?>
<?php
    $id_user = $_SESSION['id_user'];
    $id_kbp = $_GET['id'];
    $query = "SELECT * FROM kb_pendidikan WHERE id_kbp = '$id_kbp'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                         UBAH KINERJA BIDANG PENDIDIKAN
                        </h2>
                    </div>
                    <div class="body">
                        <form action="pages/ubah_kb_temp.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?php echo $id_user?>">
                            <div class="row clearfix">
                                <div class="form-group form-float">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" name="jenis_kegiatan"  value="<?php echo $row['jenis_kegiatan']?>" class="form-control">
                                                <input type="hidden" id="" name="id_user"  value="<?php echo $id_user; ?>">
                                                <label class="form-label">JENIS KEGIATAN</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line" style="bottom: 20px">
                                                <label class="">BUKTI PENUGASAN</label>
                                                <input type="file" id="" name="file1"  value="<?php echo $row['file1']?>" class="form-control">
                                                <a href="test.php"><?php echo $row['bk_buktipenugasan']?></a>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <div class="form-line" >
                                                <input type="number" id="" name="bk_sks" value="<?php echo $row['bk_sks']?>"  class="form-control">
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
                                                <input type="text" id="" name="masa_penugasan" value="<?php echo $row['masa_penugasan']?>"  class="form-control">
                                                <label class="form-label">MASA PENUGASAN</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line" style="bottom: 25px">
                                                <label class="">KINERJA BUKTI DOKUMEN</label>
                                                <input type="file" name="file2" value="<?php echo $row['bukti_dokumen']?>"  class="form-control">
                                                <a href="test.php"><?php echo $row['kb_dokumen']?></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <div class="form-line" >
                                                <input type="number" id="" name="kinerja_sks" value="<?php echo $row['kinerja_sks']?>"  class="form-control">
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
                                                <select class="form-control show-tick" name="rekomendasi" value="<?php echo $row['jenis_karya']?>" >
                                                    <option>-- Please Select --</option>
                                                    <option value="Lanjutkan">Lanjutkan</option>
                                                    <option>asasa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-success m-t-15 waves-effect">SAVE</button>
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