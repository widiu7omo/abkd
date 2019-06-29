<?php
session_start();
require_once( 'dompdf/autoload.inc.php' );
require_once './model/database.php';
require_once './model/getdata.php';

$identitas = get_data( "SELECT * FROM identitas WHERE id_user = '$_SESSION[id_user]'" );


use Dompdf\Dompdf;

$logo = $_SERVER["DOCUMENT_ROOT"].'/assets/logo.png';
// usage
$html = "
<div>
	<h2>RENCANA BEBAN KERJA DOSEN</h2>
</div>


";


$dompdf = new Dompdf();
//$dompdf->loadHtmlFile( '');
$dompdf->loadHtml( $html );
$dompdf->setPaper( 'A4', 'portrait' );

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>