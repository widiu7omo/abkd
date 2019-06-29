<?php require(realpath('header.php')); ?>
<?php
	$id_user = $_SESSION['id_user'];
    $id_pengguna = $_GET['id'];
    $query = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'";
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
                            UBAH PENGGUNA
                        </h2>
                    </div>
                    <div class="body">
                        <form action="pages/ubah_pengguna_apk.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_pengguna" value="<?php echo $pengguna?>">
                            <div class="row clearfix">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">USERNAME</label>
                                                <input type="text" id="" name="username" class="form-control" value="<?php echo $row['username']?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label class="">PASSWORD</label>
                                                <input type="text" id="" name="password" class="form-control" value="<?php echo $row['password']?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>LEVEL</label>
                                                <select class="form-control show-tick" name="level" value="<?php echo $row['level']?>">
                                                    <option value="<?php echo $row[';level']?>"><?php echo $row['level']?></option>
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
	</div>
</section>
<?php require(realpath('footer.php')); ?>