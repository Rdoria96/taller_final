<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$html = file_get_contents_curl("http://localhost/Modulo_2_Diplomado/date.php?nombres="
	. $_GET['nombres'] . "&apellidos=" . $_GET['apellidos'] . "&ciudad=" . $_GET['ciudad']
	. "&telefono=" . $_GET['telefono'] . "&duracioncontrato="
	. $_GET['duracioncontrato'] . "&totalseguro=" . $_GET['totalseguro'] . "&correo=" . $_GET['correo'] . "");

// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();

// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("letter", "portrait");
//$pdf->set_paper(array(0,0,104,250));

// Cargamos el contenido HTML.
$pdf->load_html(utf8_decode($html));

// Renderizamos el documento PDF.
$pdf->render();

// Enviamos el fichero PDF al navegador.
$pdf->stream('Cotizacion.pdf');


function file_get_contents_curl($url)
{
	$crl = curl_init();
	$timeout = 5;
	curl_setopt($crl, CURLOPT_URL, $url);
	curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
	$ret = curl_exec($crl);
	curl_close($crl);
	return $ret;
}