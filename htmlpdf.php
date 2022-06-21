<?php
require_once(__DIR__.'/TCPDF-main/examples/tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->AddPage();

$html = generateHTML('TCPL50');;// '<h1>HTML Example 1</h1>';

$html .= '<h1>HTML Example 2</h1>';


$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('TCPL50.pdf', 'I');
//$pdf->Output('Download.pdf', 'D');
?>