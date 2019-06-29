<?php require( realpath( 'header.php' ) ); ?>
<?php
$id_user      = $_SESSION['id_user'];
$id_kewajiban = $_GET['id'];
$query        = "SELECT * FROM kewajiban_khusus WHERE id_kewajiban = '$id_kewajiban'";
$result       = mysqli_query( $conn, $query );
$row          = mysqli_fetch_array( $result );
?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH KEWAJIBAN KHUSUS
                            </h2>
                        </div>
                        <div class="body">
                            <form action="pages/ubah_kewajiban_khusus.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_kewajiban" value="<?php echo $id_kewajiban ?>">
                                <div class="row clearfix">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label class="">Tahun</label>
                                                    <input type="text" id="" name="tahun" class="form-control"
                                                           value="<?php echo $row['tahun'] ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label class="">Judul Karya</label>
                                                    <input type="text" id="" name="judul_karya" class="form-control"
                                                           value="<?php echo $row['judul_karya'] ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label>Jenis Karya</label>
                                                    <select class="form-control show-tick" name="jenis_karya"
                                                            value="<?php echo $row['jenis_karya'] ?>">
                                                        <option value="<?php echo $row['jenis_karya'] ?>"><?php echo $row['jenis_karya'] ?></option>
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
                                                    <input type="text" id="" name="forum_publikasi" class="form-control"
                                                           value="<?php echo $row['forum_publikasi'] ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="" style="">
                                                    <label class="">Bukti Dokumen</label>
                                                    <input accept=".pdf" type="file" id="input-link" name="image" class="form-control"
                                                           value="<?php echo $row['bukti_dokumen'] ?>" required>
                                                    <a id="href_link" href="#"><?php echo $row['bukti_dokumen'] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="submit" name="simpan"
                                                        class="btn btn-success m-t-15 waves-effect" style="top: 20px">
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
<script>
    $('#input-link').change(function () {
        $('#href_link').remove();
    })
</script>
