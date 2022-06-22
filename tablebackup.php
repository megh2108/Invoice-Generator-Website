<?php
include 'class.php';
require 'session.php';

$ob = new DB();

$val1=$_GET['id'];
$arr1=array('invoice_no'=>$val1);

$uname=$_SESSION['uname'];
$arr = array('username'=>$uname);
$res = $ob->selectquery('c_details',$arr);
$res1 = $ob->selectquery('record_details',$arr1);

$row1=mysqli_fetch_assoc($res1);
//echo $row1['customer_id']; die;



$row = mysqli_fetch_assoc($res);

$html = '';

?>

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<style>
    #t1 ,#t2{
        font-weight: bold;
    }

</style>
    
<?php
       $html.= '<table class="table table-bordered m-0 mt-5 border border-2 border-success">';

       $html.='     <tr>';
       $html.='         <td style="padding-left:150px;"></td>';
       $html.='         <td style="text-align:center;">';
       $html.="            <strong><h5>".$row['c_name']."</h5></strong>";
       $html.=            $row['add_line1']." <br>";
       $html.=            $row['add_line2']." <br>";
       $html.=`             Dist-`. $row['district'].",".$row['state'].",".$row['country'];
       $html.='         </td>';
       $html.='         <td style="text-align:center;padding-top:40px;"><strong>Original for Receipient</strong></td>';
       $html.='     </tr>';
            
       $html.='     <tr>';
       $html.='       <td colspan="3" style="text-align:center;">GST NO:'. $row['GST_no'].'&emsp; PAN NO:  '. $row['PAN_no'].'</td>'; 
       $html.='     </tr>';

       $html.=' </table>';
       $pdf->writeHTML($html, true, false, true, false, '');
       $pdf->Output('TCPL.pdf', 'D');

?>
  <!--      <table id="t1" class="table table-bordered border border-2 border-success m-0">
            <tr>
                <td colspan="6" style="text-align:center;">Tax Invoice</td>
              </tr>
              <tr>
            
                <td colspan="4" > Invoice No : </td>
                <td colspan="2">Transport Mode : </td>
              </tr>
              <tr>
                <td colspan="4">Invoice date : </td>
                <td colspan="2" >Vehicle Number : </td>
              </tr>
              <tr>
               <td colspan="4">Reverse Charge (Y/N) : </td>
               <td colspan="2">Date of Supply : </td>
              </tr>
               <tr>
                <td colspan="3">State : </td>
                <td>Code : </td>
                <td >Place of Supply : </td>
                <td ></td> -->
              <!--</tr>
              
        </table>
        <table class="table table-bordered border border-2 border-success m-0">
            <tr>
                <td></td>
            </tr>
          
        </table>
        
        <table id="t2" class="table table-bordered border border-2 border-success m-0">
                        
              <tr>
                <td  colspan="4"  style="text-align:center;">Bill to Party</td>
                <td colspan="2" style="text-align:center;">Ship to Party</td>
              </tr>
              <tr>
                <td colspan="4">Name : </td>
                <td colspan="2">Name : </td>
              </tr>
              <tr>
                <td colspan="4">Address : </td>
                <td colspan="2">Address : </td>
              </tr>
              <tr>
               <td colspan="4">GSTIN : </td>
               <td colspan="2"> GSTIN : </td>
              </tr>
               <tr>
                <td colspan="3">State : </td>
                <td>Code : </td>
                <td >State : </td>
                <td>Code : </td>
              </tr>
              
        </table>

        <table class="table table-bordered border border-2 border-success m-0">
          <tr>
              <td></td>
          </tr>
        
      </table>
        
        
        <table  class="table table-bordered m-0">
            <tr>
              <th rowspan="2">Sr. No.</th>
              <th rowspan="2">Product Description</th>
              <th rowspan="2">HSN Code</th>
              <th rowspan="2">Weight in Kg</th>
              <th rowspan="2">Rate</th>
              <th rowspan="2">Amount</th>
              <th rowspan="2">Discount</th>
              <th rowspan="2">Taxable Value</th>
              <th colspan="2">IGST</th>
              <th rowspan="2">Total</th>
            </tr>

            <tr>
              <th>Rate%</th>
              <th>Amount</th>
            </tr>

            <tr>
              <td>1</td>
              <td>Tyre Scrap Crumb</td>
              <td>40040000</td>
              <td>32830</td>
              <td>20.3</td>
              <td>666449</td>
              <td>0</td>
              <td>666449</td>
              <td>18</td>
              <td>119960.82</td>
              <td>786409.82</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Tyre Scrap Crumb</td>
              <td>40040000</td>
              <td>32830</td>
              <td>20.3</td>
              <td>666449</td>
              <td>0</td>
              <td>666449</td>
              <td>18</td>
              <td>119960.82</td>
              <td>786409.82</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Tyre Scrap Crumb</td>
              <td>40040000</td>
              <td>32830</td>
              <td>20.3</td>
              <td>666449</td>
              <td>0</td>
              <td>666449</td>
              <td>18</td>
              <td>119960.82</td>
              <td>786409.82</td>
            </tr>
            
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
      
             
            
            
        </table>







</body>
</html>-->