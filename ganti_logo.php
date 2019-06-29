<?php require( realpath( 'header.php' ) ); ?>
<?php
require_once 'model/getdata.php';
$logo = get_data('SELECT * FROM logo where id = 1');
$id_user = $_SESSION['id_user'];
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <form action="pages/upload_logo.php" method="post" enctype="multipart/form-data">
                        <div class="header">
                            <h2>
                                GANTI LOGO SURAT
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button type="submit" name="simpan" class="btn btn-primary">Ganti</button>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <card>
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <img src="<?php echo $logo[0]->url?>" alt=""
                                                 class="img-rounded img-responsive">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Upload logo disini</label>
                                                <div class="form-control">
                                                    <input type="file" name="logo" class="file-file-path-wrapper"
                                                           accept=".jpg,.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </card>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require( realpath( 'footer.php' ) ); ?>
<script>
    $("div#my-awesome-dropzone").dropzone({
        accept: function (file, done) {
            if (file.name === "justinbieber.jpg") {
                done("Naha, you don't.");
            } else {
                done();
            }
        }
    });
</script>
