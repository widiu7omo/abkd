<?php
session_start();
require_once 'mpdf/mpdf.php';
require_once './model/database.php';
require_once './model/getdata.php';
$mpdf = new mPDF( 'utf-8', 'A4' );
ob_start();
$mpdf->useGraphs = true;
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Lembar Bebar Kerja Dosen</title>
    <title>Generate a document Word</title>
    <link rel="stylesheet" href="./bootstrap/css/materialize.css">
    <style>
        table#header-table, th {
            border: 1px solid black;
        }

        tr#heading > td > h3 {
            text-align: left;
            padding-bottom: 10em;
            margin-bottom: 10em;
        }

        tr#heading > td {
            margin-bottom: 10em;
        }

        tr#body > td {
            text-align: center;
        }
        .logo {
            display: block;
        }

        .images {
            display: inline-block;
            max-width: 20%;
            margin:0 0 2.5% 15em;
            /*margin-left: 15em;*/
        }
    </style>
</head>
<body>
<?php
$identitas      = get_data( "SELECT * FROM identitas WHERE id_user = '$_SESSION[id_user]'" );
$pendidikan     = get_data( "SELECT * FROM kb_pendidikan WHERE id_user = '$_SESSION[id_user]' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)" );
$penelitian     = get_data( "SELECT * FROM kb_penelitian WHERE id_user = '$_SESSION[id_user]' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)" );
$pengabdian     = get_data( "SELECT * FROM kb_pengabdian_masy WHERE id_user = '$_SESSION[id_user]' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)" );
$penunjang_lain = get_data( "SELECT * FROM kb_penunjang_lain WHERE id_user = '$_SESSION[id_user]' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)" );
$kewajiban      = get_data( "SELECT * FROM kewajiban_khusus WHERE id_user = '$_SESSION[id_user]' AND id_tahun = (SELECT id FROM tahun_ajaran WHERE status = 1)" );
$logo = get_data('SELECT * FROM logo where id = 1');
//var_dump( $identitas);
?>
<div class="Section1" style="padding-top:200px">
    <div class="logo">
        <img class="images" src="<?php echo $logo[0]->url?>" width="20%">
        <img class="images" src="assets/ristekdikti_logo.svg" width="20%">
    </div>
    <h2 style="text-align: center;">LEMBAR BEBAN KERJA DOSEN</h2>
    <!--	<hr style="color: #000; border: solid black 4px;height: 4px;">-->
    <br>
    <table id="title" align="center" class="h4">
        <tr>
            <td>Nama</td>
            <td>
                :&nbsp;<?php echo $identitas[0]->gelar_depan . " " . $identitas[0]->nama . " " . $identitas[0]->gelar_belakang ?></td>
        </tr>
        <tr>
            <td>
                Jurusan
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->jurusan ?></td>
        </tr>
        <tr>
            <td>
                Prodi
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->prodi ?></td>
        </tr>
        <tr>
            <td>
                Perguruan Tinggi
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->nama_pt ?></td>
        </tr>
        <br>

    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3>I. IDENTITAS</h3>
    <table id="title" align="center" class="h4">
        <tr>
            <td>Nama</td>
            <td>
                :&nbsp;<?php echo $identitas[0]->gelar_depan . " " . $identitas[0]->nama . " " . $identitas[0]->gelar_belakang ?></td>
        </tr>
        <tr>
            <td>
                No Sertifikat/NIDN
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->nidn ?></td>
        </tr>
        <tr>
            <td>
                Perguruan Tinggi
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->nama_pt ?></td>
        </tr>
        <tr>
            <td>
                Status
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->jenis ?></td>
        </tr>
        <tr>
            <td>
                Alamat PT
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->alamat_pt ?></td>
        </tr>
        <tr>
            <td>
                Jab. Fungsional / Gol.
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->jab_fungsional ?></td>
        </tr>
        <tr>
            <td>
                Tempat - Tgl. Lahir
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->tempat . ' - ' . $identitas[0]->tgl_lahir ?></td>
        </tr>
        <tr>
            <td>
                S1
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->pend_s1 ?></td>
        </tr>
        <tr>
            <td>
                S2
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->pend_s2 ?></td>
        </tr>
        <tr>
            <td>
                S3
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->pend_s3 ?></td>
        </tr>
        <tr>
            <td>
                Ilmu yang ditekuni
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->bidang_ilmu ?></td>
        </tr>
        <tr>
            <td>
                No. HP
            </td>
            <td colspan="2">:&nbsp;<?php echo $identitas[0]->no_hp ?></td>
        </tr>
        <br>
    </table>
    <br>
    <table id="header-table" width="100%">
        <tr>
            <th style="width: 5%;" rowspan="2">No.</th>
            <th style="width: 50%;" rowspan="2">Kegiatan</th>
            <th colspan="2">Beban Kerja</th>
            <th style="width: 20%;" rowspan="2">Masa Pelaksanaan Tugas</th>
        </tr>
        <tr>
            <th>Bukti Penugasan</th>
            <th>SKS</th>
        </tr>
        <tr id="heading">
            <td colspan="5">
                <h3>II. BIDANG PENDIDIKAN</h3>
            </td>
        </tr>
		<?php foreach ( $pendidikan as $p => $pend ): ?>
            <tr id="body">
                <td><?php echo $p + 1 ?></td>
                <td><?php echo $pend->jenis_kegiatan ?></td>
                <td><?php echo $pend->bk_buktipenugasan ?></td>
                <td><?php echo $pend->bk_sks ?></td>
                <td><?php echo $pend->masa_penugasan ?></td>
            </tr>
		<?php endforeach; ?>
        <tr id="heading">
            <td colspan="5">
                <h3>III. BIDANG PENELITIAN DAN PENGEMBANGAN ILMU</h3>
            </td>
        </tr>
		<?php foreach ( $penelitian as $p => $pend ): ?>
            <tr>
                <td><?php echo $p + 1 ?></td>
                <td><?php echo $pend->jenis_kegiatan ?></td>
                <td><?php echo $pend->bk_buktipenugasan ?></td>
                <td><?php echo $pend->bk_sks ?></td>
                <td><?php echo $pend->masa_penugasan ?></td>
            </tr>
		<?php endforeach; ?>
        <tr id="heading">
            <td colspan="5">
                <h3>IV. BIDANG PENGABDIAN KEPADA MASYARAKAT</h3>
            </td>
        </tr>
		<?php foreach ( $pengabdian as $p => $pend ): ?>
            <tr>
                <td><?php echo $p + 1 ?></td>
                <td><?php echo $pend->jenis_kegiatan ?></td>
                <td><?php echo $pend->bk_buktipenugasan ?></td>
                <td><?php echo $pend->bk_sks ?></td>
                <td><?php echo $pend->masa_penugasan ?></td>
            </tr>
		<?php endforeach; ?>
        <tr id="heading">
            <td colspan="5">
                <h3>V. BIDANG PENUNJANG LAINNYA</h3>
            </td>
        </tr>
		<?php foreach ( $penunjang_lain as $p => $pend ): ?>
            <tr>
                <td><?php echo $p + 1 ?></td>
                <td><?php echo $pend->jenis_kegiatan ?></td>
                <td><?php echo $pend->bk_buktipenugasan ?></td>
                <td><?php echo $pend->bk_sks ?></td>
                <td><?php echo $pend->masa_penugasan ?></td>
            </tr>
		<?php endforeach; ?>
        <br>
    </table>
    <br>
	<?php if ( $identitas[0]->jab_fungsional == 'Lektor Kepala' || $identitas[0]->jab_fungsional == 'Profesor' ): ?>
        <table id="header-table" width="100%">
            <tr>
                <th>No.</th>
                <th>Tahun</th>
                <th>Judul Karya</th>
                <th>Jenis Karya</th>
                <th>Publikasi Karya</th>
            </tr>
            <tr>
                <td colspan="5">
                    <h3>V. KEWAJIBAN KHUSUS</h3>
                </td>
            </tr>
			<?php foreach ( $kewajiban as $p => $pend ): ?>
                <tr>
                    <td><?php echo $p + 1 ?></td>
                    <td><?php echo $pend->tahun ?></td>
                    <td><?php echo $pend->judul_karya ?></td>
                    <td><?php echo $pend->jenis_karya ?></td>
                    <td><?php echo $pend->forum_publikasi ?></td>
                </tr>
			<?php endforeach; ?>
        </table>
	<?php endif; ?>
    <br>
    <br>
    <br>
    <br>
    <table>
        <tr style="display: flex;justify-content: space-between;">
            <td>
                <p>Menyetujui</p>
                <p>Ketua Jurusan</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>WINDA APRILIYANTI. MSI</p>
            </td>
            <td style="width: 40%;"></td>
            <td>
                <p>Dosen yang membuat</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p><?php echo $identitas[0]->gelar_depan . " " . $identitas[0]->nama . " " . $identitas[0]->gelar_belakang ?></p>
                <p>NIDN&nbsp;<?php echo $identitas[0]->nidn ?></p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>

<?php
$nama_file = "beban kerja dosen $_SESSION[id_user]";
$html      = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//var_dump( $html);
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML( utf8_encode( $html ) );
// LOAD a stylesheet
$stylesheet = file_get_contents( './mpdf/mpdf.css' );
$mpdf->WriteHTML( $stylesheet, 1 );  // The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML( $html, 1 );

$mpdf->Output( $nama_file . ".pdf", 'I' );


exit;
?>
