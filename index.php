<?php require_once( realpath( 'header.php' ) ); ?>
<?php
if(!isset($_SESSION['id_user'])){
	echo '<script>window.location.href = \'login.php\'</script>';
}
$id_user = $_SESSION['id_user'];
$query   = "SELECT * FROM identitas WHERE id_user = '$id_user'";
$result  = mysqli_query( $conn, $query );
$row     = mysqli_fetch_array( $result );
?>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                IDENTITAS DIRI
                            </h2>
                        </div>
                        <div class="body">
                            <form action="pages/ubah_identitas.php" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="form-group form-float">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="" name="nip" class="form-control"
                                                           value="<?php echo $row['nip'] ?>">
                                                    <label class="form-label">NIP</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="" name="nidn" class="form-control"
                                                           value="<?php echo $row['nidn'] ?>">
                                                    <label class="form-label">NIDN</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="" name="nik" class="form-control"
                                                           value="<?php echo $row['nik'] ?>">
                                                    <label class="form-label">NIK</label>
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
                                                    <input type="text" id="" name="nama" class="form-control"
                                                           value="<?php echo $row['nama'] ?>">
                                                    <label class="form-label">NAMA</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="" name="gelar_depan" class="form-control"
                                                           value="<?php echo $row['gelar_depan'] ?>">
                                                    <label class="form-label">GELAR DEPAN</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="" name="gelar_belakang" class="form-control"
                                                           value="<?php echo $row['gelar_belakang'] ?>">
                                                    <label class="form-label">GELAR BELAKANG</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="form-group form-float">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="tempat" class="form-control"
                                                           style="width: " value="<?php echo $row['tempat'] ?>">
                                                    <label class="form-label">TEMPAT LAHIR</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="right: ">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="date" id="" name="tgl_lahir" class="form-control"
                                                           style="width: " value="<?php echo $row['tgl_lahir'] ?>">
                                                    <label class="form-label">TANGGAL LAHIR</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="right: ">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="alamat_pt" class="form-control"
                                                           style="width: " value="<?php echo $row['alamat_pt'] ?>">
                                                    <label class="form-label">ALAMAT PT</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="form-group form-float">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="prodi" class="form-control"
                                                           style="width: " value="<?php echo $row['prodi'] ?>">
                                                    <label class="form-label text-uppercase">Program Studi</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="right: ">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="jurusan" class="form-control"
                                                           style="width: " value="<?php echo $row['jurusan'] ?>">
                                                    <label class="form-label text-uppercase">Jurusan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="right: ">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="nama_pt" class="form-control"
                                                           style="width: " value="<?php echo $row['nama_pt'] ?>">
                                                    <label class="form-label text-uppercase">Nama PT</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="row clearfix">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line" style="bottom: 25px">
                                                <label>JAB. FUNGSIONAL</label>
                                                <select class="form-control show-tick" name="jab_fungsional">
                                                    <option value="<?php echo $row['jab_fungsional']!=''?$row['jab_fungsional']:null ?>"><?php echo $row['jab_fungsional']!=''?$row['jab_fungsional']:"Pilih Jabatan Fungsional" ?></option>
                                                    <option value="Lektor Kepala">Lektor Kepala</option>
                                                    <option value="Profesor">Profesor</option>
                                                    <option value="Asisten Ahli">Asisten Ahli</option>
                                                    <option value="Lektor">Lektor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="pend_s1" class="form-control"
                                                           style="width: " value="<?php echo $row['pend_s1'] ?>">
                                                    <label class="form-label">PENDIDIKAN S1</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4" style="right: ">
                                            <div class="form-group">
                                                <div class="form-line" style="width: ">
                                                    <input type="text" id="" name="pend_s2" class="form-control"
                                                           style="width: " value="<?php echo $row['pend_s2'] ?>">
                                                    <label class="form-label">PENDIDIKAN S2</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-4" style="right: ">
                                        <div class="form-group">
                                            <div class="form-line" style="width: ">
                                                <input type="text" id="" name="pend_s3" class="form-control"
                                                       style="width: " value="<?php echo $row['pend_s3'] ?>">
                                                <label class="form-label">PENDIDIKAN S3</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="right: ">
                                        <div class="form-group">
                                            <div class="form-line" style="bottom: 25px">
                                                <label>JENIS</label>
                                                <select class="form-control show-tick" name="jenis">
                                                    <option value="<?php echo $row['jenis']!=''?$row['jenis']:null ?>"><?php echo $row['jenis']!=''?$row['jenis']:"Pilih Jenis"?></option>
                                                    <option value="Dosen biasa">Dosen biasa</option>
                                                    <option value="Profesor">Profesor</option>
                                                    <option value="Dosen dengan tugas tambahan">Dosen dengan tugas tambahan</option>
                                                    <option value="Profesor dengan tugas tambahan">Profesor dengan tugas tambahan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="" name="bidang_ilmu" class="form-control"
                                                       value="<?php echo $row['bidang_ilmu'] ?>">
                                                <label class="form-label">BIDANG ILMU</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="form-group form-float">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="" name="asesor_1" class="form-control"
                                                           value="<?php echo $row['asesor_1'] ?>">
                                                    <label class="form-label">ASESOR 1</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="" name="asesor_2" class="form-control"
                                                           value="<?php echo $row['asesor_2'] ?>">
                                                    <label class="form-label">ASESOR 2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="" name="no_hp" class="form-control"
                                                           value="<?php echo $row['no_hp'] ?>">
                                                    <label class="form-label">NO HP</label>
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
                                                    <input type="email" id="" name="email" class="form-control"
                                                           value="<?php echo $row['email'] ?>">
                                                    <label class="form-label">EMAIL</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line" style="bottom: 30px">
                                                    <label class="">FOTO KTP</label>
                                                    <input type="file" accept=".jpg,.png" name="image" class="form-control"
                                                           value="<?php echo $row['foto_ktp']; ?>">
                                                    <a href="files/identitas/<?php echo $row['foto_ktp'] ?>"
                                                       target="_blank"><?php echo $row['foto_ktp'] ?></a>
                                                    <input type="hidden" name="photo"
                                                           value="<?php echo $row['foto_ktp']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="hidden" name="id_identitas"
                                                       value="<?php echo $row['id_identitas'] ?>">
                                                <button type="submit" name="ubah"
                                                        class="btn btn-success m-t-15 waves-effect">SAVE
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