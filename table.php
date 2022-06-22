<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

<?php
require_once(__DIR__.'/TCPDF-main/examples/tcpdf_include.php');
include 'class.php';
require 'session.php';

$ob = new DB();

$val1=$_GET['id'];
$arr1=array('invoice_no'=>$val1);

$uname=$_SESSION['uname'];
$arr = array('username'=>$uname);
$res = $ob->selectquery('c_details',$arr);
$res1 = $ob->selectquery('record_details',$arr1);
$row = mysqli_fetch_assoc($res);

$row1=mysqli_fetch_assoc($res1);


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->AddPage();
$html='';

//$html .= '<style>table { border: 1px solid black; }</style>';
$html .= '<style>'.file_get_contents(__DIR__."/external.css").'</style>';

$html.= '<table class="table m-0 mt-5 ">';

$html.='     <tr>';
$html.='         <td style="padding-left:150px;"></td>';
$html.='        <td  style="background-color: aqua;" class="t1">;
$html.="            <strong><h5>".$row['c_name']."</h5></strong>";
$html.=            $row['add_line1']." <br>";
$html.=            $row['add_line2']." <br>";
$html.=`             Dist-`. $row['district'].",".$row['state'].",".$row['country'];
$html.='         </td>';
$html.='         <td style="text-align:center;padding-top:40px;"><strong>Original for Receipient</strong></td>';
$html.='     </tr>';
     
$html.='     <tr>';
$html.='       <td colspan="3" style="text-align:center;">GST NO:'. $row['GST_no'].'&nbsp;&nbsp;&nbsp;&nbsp; PAN NO:  '. $row['PAN_no'].'</td>'; 
$html.='     </tr>';

$html.=' </table>';











$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('TCPL50.pdf', 'I');

//$pdf->Output('Download.pdf', 'D');
?>
