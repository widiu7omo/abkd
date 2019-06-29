<?php
if ( session_status() == PHP_SESSION_NONE ) {
	session_start();
}
require 'koneksi.php';
if ( ! $_SESSION['id_user'] ) {
	header( "Location: login.php" );
}
$fungsi = $_SESSION['jab_fungsional'];

// get file name from url and strip extension
$pg = basename( substr( $_SERVER['PHP_SELF'], 0, strrpos( $_SERVER['PHP_SELF'], '.' ) ) );
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php if ( $pg == 'index' ) { ?>Identitas Diri<?php } ?></title>
    <title><?php if ( $pg == 'kb_pendidikan' ) { ?>Kinerja Bidang Pendidikan<?php } ?></title>
    <!-- Favicon-->
    <link rel="icon" href="bootstrap/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="bootstrap/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="bootstrap/plugins/node-waves/waves.css" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="bootstrap/plugins/animate-css/animate.css" rel="stylesheet"/>

    <!-- Sweet Alert Css -->
    <link href="bootstrap/plugins/sweetalert/sweetalert.css" rel="stylesheet"/>

    <!-- JQuery DataTable Css -->
    <link href="bootstrap/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="bootstrap/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet"/>

    <link href="bootstrap/plugins/dropzone/dropzone.css" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="bootstrap/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="bootstrap/css/themes/all-themes.css" rel="stylesheet"/>
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">APLIKASI BEBAN KERJA DOSEN POLITALA | 2019/2020 ganjil</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <!-- #END# Tasks -->
                <!--                <div class="info-container">-->
                <!--                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>-->
                <!--                    <div class="email">john.doe@example.com</div>-->
                <!--                    -->
                <!--                </div>-->
                <li class="dropdown">
                    <!--                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
                    <!--                       aria-expanded="true">-->
                    <!--                        -->
                    <!--                    </a>-->

                    <div class="btn-group m-t-20 m-r-25" style="box-shadow: none;">
                        <a href="#" style="text-decoration: none;color: #ffffff;display: flex;flex-direction: row;"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <div class="h5 p-b-5">Selamat datang <?php echo $_SESSION['nama_user'] ?>&nbsp;</div>
                            <i class="material-icons">person</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <!--                            <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">person</i>Profile</a></li>-->
                            <!--                            <li role="separator" class="divider"></li>-->
                            <!--                            <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">group</i>Followers</a></li>-->
                            <!--                            <li><a href="javascript:void(0);" class=" waves-effect waves-block"><i class="material-icons">shopping_cart</i>Sales</a></li>-->
                            <li><a href="javascript:void(0);"
                                   class=" waves-effect waves-block"><?php echo $_SESSION['nama_user'] ?></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="pages/logout.php" class=" waves-effect waves-block"><i class="material-icons">input</i>Sign
                                    Out</a></li>
                        </ul>
                    </div>
                </li>
                <!--                <li class="pull-right"><a href="pages/logout.php" class="js-right-sidebar" data-close="true">Logout</a>-->
                <!--                </li>-->
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list" id="sidebarmenu">
                <li class="header">MAIN NAVIGATION</li>
				<?php if ( $_SESSION['level'] == 'pegawai' ): ?>
                    <li class="<?php if ( $pg == 'index' ) { ?>active<?php } ?>">
                        <a href="index.php">
                            <i class="material-icons">account_circle</i>
                            <span>Indentitas Diri</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'kb_pendidikan' || $pg == 'tambah_kb_pendidikan' ) { ?>active<?php } ?>">
                        <a href="kb_pendidikan.php">
                            <i class="material-icons">assignment</i>
                            <span>Kinerja Bidang Pendidikan</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'kb_penelitian' || $pg == 'tambah_kb_penelitian' ) { ?>active<?php } ?>">
                        <a href="kb_penelitian.php">
                            <i class="material-icons">assignment</i>
                            <span>Kinerja Bidang Penelitian</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'kb_pengabdian_masy' || $pg == 'tambah_kb_pm' ) { ?>active<?php } ?>">
                        <a href="kb_pengabdian_masy.php">
                            <i class="material-icons">assignment</i>
                            <span>Kinerja Bidang Pengabdian Masyarakat</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'kb_penunjang_lain' || $pg == 'tambah_kinerja_penunjang' ) { ?>active<?php } ?>">
                        <a href="kb_penunjang_lain.php">
                            <i class="material-icons">assignment</i>
                            <span>Kinerja Penunjang Lainnya</span>
                        </a>
                    </li>
					<?php if ( $_SESSION['jab_fungsional'] == 'Lektor Kepala' || $_SESSION['jab_fungsional'] == 'Profesor' ) : ?>
                        <li id="appended" class="<?php if ( $pg == 'kewajiban_khusus' ) { ?>active<?php } ?>">
                            <a href="kewajiban_khusus.php">
                                <i class="material-icons">assignment</i>
                                <span>Kewajiban Khusus</span>
                            </a>
                        </li>
					<?php endif; ?>
                    <li class="<?php if ( $pg == 'kb_cetak' ) { ?>active<?php } ?>">
                        <a href="kb_cetak.php">
                            <i class="material-icons">print</i>
                            <span>Cetak Lembar BKD</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'history' ) { ?>active<?php } ?>">
                        <a href="kb_history.php">
                            <i class="material-icons">history</i>
                            <span>History Data Beban Kerja</span>
                        </a>
                    </li>
				<?php endif; ?>
				<?php if ( $_SESSION['jab_fungsional'] == 'admin' ): ?>
                    <li class="<?php if ( $pg == 'pengguna' ) { ?>active<?php } ?>">
                        <a href="pengguna.php">
                            <i class="material-icons">assignment</i>
                            <span>Data Pengguna</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'tahunakademik' ) { ?>active<?php } ?>">
                        <a href="tahunakademik.php">
                            <i class="material-icons">assignment</i>
                            <span>Tahun Akademik</span>
                        </a>
                    </li>
                    <li class="<?php if ( $pg == 'ganti_logo' ) { ?>active<?php } ?>">
                        <a href="ganti_logo.php">
                            <i class="material-icons">assignment</i>
                            <span>Logo Surat</span>
                        </a>
                    </li>
				<?php endif; ?>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <!-- #END# Right Sidebar -->
</section>
