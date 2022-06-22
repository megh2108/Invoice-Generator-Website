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
$html.='         <td style="width:20%;"></td>';
$html.='        <td  style="background-color: aqua; width:60%;" class="t1">';
$html.="            <h2>".$row['c_name']."</h2>";
$html.=            $row['add_line1']." <br>";
$html.=            $row['add_line2']." <br>";
$html.="             Dist-". $row['district'].",".$row['state'].",".$row['country'];
$html.='         </td>';
$html.='         <td class="t4" style="text-align:center; width:20%; top: 10px;">Original for Receipient</td>';
$html.='     </tr>';
     
$html.='     <tr>';
// $html.='       <td colspan="3" style="text-align:center;">GST NO:'. $row['GST_no'].'&nbsp;&nbsp;&nbsp;&nbsp; PAN NO:  '. $row['PAN_no'].'</td>'; 
$html.='       <td  colspan="3" style="text-align:center;"> GST NO:'. $row['GST_no'].' &nbsp;&nbsp;&nbsp;&nbsp; PAN NO:'. $row['PAN_no'].'</td>'; 
$html.='     </tr>';

$html.=' </table>';

$html.='<table  class="table  m-0">';
$html.="<tr >";
$html.='   <td  colspan="6" style="text-align:center;background-color: aqua;">Tax Invoice</td>';
$html.="  </tr>";
$html.="  <tr>";

$html.='  <td  class="t3" colspan="3" > Invoice No : </td>';
$html.='    <td  class="t3" colspan="3">Transport Mode : </td>';
$html.="  </tr>";
$html.="  <tr>";
 $html.='   <td  class="t3" colspan="3">Invoice date : </td>';
 $html.='   <td  class="t3" colspan="3" >  Vehicle Number : </td>';
 $html.=" </tr>";
 $html.=" <tr>";
 $html.='  <td  class="t3" colspan="3">Reverse Charge (Y/N) : </td>';
 $html.='  <td  class="t3" colspan="3">Date of Supply : </td>';
 $html.=" </tr>";
 $html.="  <tr>";
 $html.='   <td class="t3" colspan="2">State : </td>';
  $html.='  <td class="t3" >Code : </td>';
 $html.='   <td class="t3" >Place of Supply : </td>';
    
 $html.=" </tr>";
  
$html.="</table>";
$html.= <<<EOF


        <table class="table  m-0">
            <tr>
                <td ></td>
            </tr>
          
        </table>
        
        <table  class="table  m-0">
                        
              <tr>
                <td  colspan="6"  style="text-align:center;background-color: aqua;">Bill to Party</td>
                <td  colspan="6" style="text-align:center;background-color: aqua;">Ship to Party</td>
              </tr>
              <tr >
                <td class="t3" colspan="6">Name : </td>
                <td class="t3" colspan="6">Name : </td>
              </tr>
              <tr>
                <td class="t3" colspan="6">Address : </td>
                <td class="t3" colspan="6">Address : </td>
              </tr>
              <tr>
               <td class="t3" colspan="6">GSTIN : </td>
               <td class="t3" colspan="6"> GSTIN : </td>
              </tr>
               <tr>
                <td class="t3" colspan="4">State : </td>
                <td class="t3" colspan="2">Code :</td>
                <td class="t3" colspan="4" >State : </td>
                <td class="t3" colspan="2">Code :</td>
              </tr>
            </table>
        
            <table class="table m-0">
          <tr>
              <td></td>
          </tr>
        
      </table>
        
        <table  class="table  m-0">
            <tr style="background-color: aqua;">
              <th rowspan="2">Sr. No.</th>
              <th rowspan="2" colspan="2">Product Description</th>
              <th rowspan="2">HSN Code</th>
              <th rowspan="2">Weight in Kg</th>
              <th rowspan="2">Rate</th>
              <th rowspan="2">Amount</th>
              <th rowspan="2">Discount</th>
              <th rowspan="2">Taxable Value</th>
              <th colspan="2">IGST</th>
              <th rowspan="2">Total</th>
            </tr>

            <tr  style="background-color: aqua;">
              <th>Rate%</th>
              <th>Amount</th>
            </tr>

            <tr  >
              <td class="t1">1</td>
              <td class="t1" colspan="2">Tyre Scrap Crumb</td>
              <td class="t1">40040000</td>
              <td class="t1">32830</td>
              <td class="t1">20.3</td>
              <td class="t1">666449</td>
              <td class="t1">0</td>
              <td class="t1">666449</td>
              <td class="t1">18</td>
              <td class="t1">119960.82</td>
              <td class="t1">786409.82</td>
            </tr>
            <tr >
              <td class="t1">2</td>
              <td class="t1" colspan="2">Tyre Scrap Crumb</td>
              <td class="t1">40040000</td>
              <td class="t1">32830</td>
              <td class="t1">20.3</td>
              <td class="t1">666449</td>
              <td class="t1">0</td>
              <td class="t1">666449</td>
              <td class="t1">18</td>
              <td class="t1">119960.82</td>
              <td class="t1">786409.82</td>
            </tr>
            <tr >
              <td class="t1">3</td>
              <td class="t1" colspan="2">Tyre Scrap Crumb</td>
              <td class="t1">40040000</td>
              <td class="t1">32830</td>
              <td class="t1">20.3</td>
              <td class="t1">666449</td>
              <td class="t1">0</td>
              <td class="t1">666449</td>
              <td class="t1">18</td>
              <td class="t1">119960.82</td>
              <td class="t1">786409.82</td>
            </tr>
            <tr>
              <td  style="background-color: aqua;" class="t2" colspan="4">Total</td>
              <td class="t1">32830</td>
              <td class="t1"></td>
              <td class="t1">66449</td>
              <td class="t1">0</td>
              <td  class="t1">66449</td>
              <td  class="t1"></td>
              <td  class="t1">119960.82</td>
              <td  class="t1">786409.82</td>
              
            </tr>
            
            <tr>
              <td  style="background-color: aqua;" class="t2" colspan="8">Total Invoice amount in words</td>
              <td class="t3" colspan="3">Total Amount before Tax</td>
              <td class="t1">666449</td>
            </tr>

            <tr>
              <td rowspan="5" colspan="8"></td>
              <td class="t3" colspan="3">Add: IGST</td>
              <td class="t1">119960.82</td>
            </tr>
            <tr>
              <td class="t3" colspan="3">Total Amount after Tax:</td>
              <td class="t1">786409.82</td>
            </tr>
             
            <tr>
              <td class="t3" colspan="3">TCS @ 0.1%</td>
              <td class="t1">786.41</td>
            </tr>
             
            <tr>
              <td class="t3" colspan="3">Net TOTAL</td>
              <td class="t1">787196.23</td>
            </tr>
             
            <tr>
              <td class="t3" style="background-color: aqua;" colspan="3">GST on Reverse Charge</td>
              <td class="t1">0</td>
            </tr>
             
                
        </table>
        


EOF;

// $pdf->AddPage();








$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('TCPL50.pdf', 'I');

//$pdf->Output('Download.pdf', 'D');
?>
