<?php
require_once(__DIR__.'/TCPDF-main/examples/tcpdf_include.php');
include 'class.php';
require 'session.php';
include 'digit_to_word.php';

$ob = new DB();

$val1=$_GET['id'];

$uname=$_SESSION['uname'];

$arr = array('username'=>$uname);
$res = $ob->selectquery('c_details',$arr);
$row = mysqli_fetch_assoc($res);

$arr1=array('invoice_no'=>$val1);
$res1 = $ob->selectquery('record_details',$arr1);
$row1=mysqli_fetch_assoc($res1);

$custid=$row1['customer_id'];
$dcid=$row1['dc_id'];

$arr2=array('customer_id'=>$custid);
$res2 = $ob->selectquery('customer_details',$arr2);
$row2=mysqli_fetch_assoc($res2);

$arr3=array('customer_id'=>$dcid);
$res3 = $ob->selectquery('customer_details',$arr3);
$row3=mysqli_fetch_assoc($res3);

$res4=$ob->selectquery('order_item_detail',$arr1);

// $arr5 = array('item_name'=>$item);
// $res5 = $ob->selectquery('item',$arr5);
// $row5 = mysqli_fetch_assoc($res5);
$ph_no = $row['ph_no'];

$arr6=array('ph_no'=>$ph_no);
$res6 = $ob->selectquery('bank_details',$arr6);
$row6=mysqli_fetch_assoc($res6);

?>

<!-- <style>file_get_contents(__DIR__."/external.css")</style>; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Links -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

</head>
<body>

<div id="border">

<style>
        
    table{
        width: 100%;
    }
    td{
        
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif ;
      /* padding-left: 5px; */
     
    }
    tr{
        height: 45px; 
        font-weight: bold;
    }
    th{
      text-align: center;
      border: 2px solid;
      font-weight: bold;
    }

    table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
    }
    .t1{
      font-weight: lighter;
      text-align: center;
    }
    
    .t2{
      text-align: center;
    }
    .t3{
      padding-left: 5px;
    }
    
</style>

<!-- Table 1 -->
        <!-- <table class="border1 table m-0 mt-5 "> -->
        <table class="table m-0 mt-5 " style="border:2px solid black;">

            <tr>
                <td  style="padding-left:150px;"></td>
                <td  style="background-color: aqua;" class="t1">
                    <h2><?php echo $row['c_name']?></h2>
                   <?php echo $row['add_line1']?> <br>
                   <?php echo $row['add_line2']?> <br>
                   Dist-<?php echo $row['district'].",".$row['state'].",".$row['country']?> 
                </td>
                <td  style="text-align:center;padding-top:10px;">Original for Receipient</td>
            </tr>
            
            <tr>
              <td  colspan="3" style="text-align:center;"> GST NO: <?php echo $row['GST_no']?> &emsp; PAN NO: <?php echo $row['PAN_no']?></td> 
            </tr>

        </table>


        <!-- Table 2 -->
        <table  class="table  m-0">
            <tr >
                <td  colspan="6" style="text-align:center;background-color: aqua;">Tax Invoice</td>
              </tr>
              <tr>
            
                <td  class="t3" colspan="4" > Invoice No : <?php echo $row['code'].$row1['invoice_no']?> </td>
                <td  class="t3" colspan="2">Transport Mode : </td>
              </tr>
              <tr>
                <td  class="t3" colspan="4">Invoice date :<?php echo $row1['order_date']?> </td>
                <td  class="t3" colspan="2" >  Vehicle Number : </td>
              </tr>
              <tr>
               <td  class="t3" colspan="4">Reverse Charge (Y/N) : </td>
               <td  class="t3" colspan="2">Date of Supply : </td>
              </tr>
               <tr>
                <td class="t3" colspan="3">State : <?php echo $row['state']?> </td>
                <td class="t3" >Code : </td>
                <td class="t3" >Place of Supply : </td>
                
              </tr>
              
              <!-- Table 3 -->
        </table>
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
                <td class="t3" colspan="6">Name : <?php echo $row2['oc_name']?></td>
                <td class="t3" colspan="6">Name : <?php echo $row3['oc_name']?> </td>
              </tr>
              <tr>
                <td class="t3" colspan="6">Address : <?php echo $row2['bill_add']?></td>
                <td class="t3" colspan="6">Address : <?php echo $row3['ship_add']?></td>
              </tr>
              <tr>
               <td class="t3" colspan="6">GSTIN : </td>
               <td class="t3" colspan="6"> GSTIN : </td>
              </tr>
               <tr>
                <td class="t3" colspan="4">State : <?php echo $row2['bstate']?></td>
                <td class="t3" colspan="2">Code : <?php echo $row2['bcode']?></td>
                <td class="t3" colspan="4" >State : <?php echo $row3['sstate']?></td>
                <td class="t3" colspan="2">Code : <?php echo $row3['scode']?></td>
              </tr>
            </table>
            
          <!-- Table 4 -->
        <table class="table m-0">
          <tr>
              <td></td>
          </tr>
        
      </table>
        <!-- Table 5 -->
        
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


           <?php 
           $i=1;
           $w_total=0;
           $amnt_total=0;
           $gst_amnt_total=0;
           $final_total=0;
           
           while($row4=mysqli_fetch_assoc($res4))
           {
             $arr5 = array('item_name'=>$row4['item']);
             $res5 = $ob->selectquery('item',$arr5);
             $row5 = mysqli_fetch_assoc($res5);

            ?>

            <tr  >
              <td class="t1"><?php echo $i; ?></td>
              <td class="t1" colspan="2"><?php echo $row4['item']; ?></td>

             

              <td class="t1">40040000</td>
              <td class="t1"><?php echo $row4['quantity']; ?></td>
              <td class="t1"><?php echo $row5['base_price']; ?></td>
              <td class="t1"><?php echo $amnt = $row4['quantity']*$row5['base_price']; ?></td>
              <td class="t1">0</td>
              <td class="t1"><?php echo $amnt; ?></td>
              <td class="t1"><?php echo $row5['GST']; ?></td>
              <td class="t1"><?php echo $gstamnt = $row4['quantity']*$row5['base_price']* $row5['GST']*0.01 ?></td>
              <td class="t1"><?php echo $row4['final_price']; ?></td>
              
            </tr>
              <?php
               $w_total+=$row4['quantity'];
               $amnt_total+=$amnt;
               $gst_amnt_total+=$gstamnt;
               $final_total += $row4['final_price'];
              
              ?>
            
            
            <?php
            $i++;
           }
            ?>
            
            
            <tr>
              <td  style="background-color: aqua;" class="t2" colspan="4">Total</td>
              <td class="t1"><?php echo $w_total; ?></td>
              <td class="t1"></td>
              <td class="t1"><?php echo $amnt_total; ?></td>
              <td class="t1">0</td>
              <td  class="t1"><?php echo $amnt_total; ?></td>
              <td  class="t1"></td>
              <td  class="t1"><?php echo $gst_amnt_total; ?></td>
              <td  class="t1"><?php echo $final_total; ?></td>
              
            </tr>
            
            <tr>
              <td  style="background-color: aqua;" class="t2" colspan="8">Total Invoice amount in words</td>
              <td class="t3" colspan="3">Total Amount before Tax</td>
              <td class="t1"><?php echo $amnt_total; ?></td>
            </tr>

            <tr>
              <td rowspan="5" colspan="8"  class="t2" ><?php digit_to_word($final_total);?></td>
              <td class="t3" colspan="3">Add: IGST</td>
              <td class="t1"><?php echo $gst_amnt_total; ?></td>
            </tr>
            <tr>
              <td class="t3" colspan="3">Total Amount after Tax:</td>
              <td class="t1"><?php echo $final_total; ?></td>
            </tr>

        
            <tr>
              <td class="t3" colspan="3">TCS @ 0.1%</td>
              <!-- <td class="t1"><?php //echo $tcs= $final_total*0.001 ?></td> -->
              <td class="t1">0</td>
            </tr>
             
            <tr>
              <td class="t3" colspan="3">Net TOTAL</td>
              <td class="t1"><?php echo $final_total; ?></td>
              
            </tr>
             
            <tr>
              <td class="t3" style="background-color: aqua;" colspan="3">GST on Reverse Charge</td>
              <td class="t1">0</td>
            </tr>
             
                
        </table>

        <!-- Table 6 -->
        <table class="table  m-0">

          <tr>
            <td  style="background-color: aqua;" class="t2" colspan="4">Bank Details</td>
            <td style="padding:35px" class="t2" colspan="3" rowspan="6">
              <br> <br> <br> <br> <br><br> <br><br> <br><br><br><br><hr>
              Common Seal
            </td>
            <td class="t1" colspan="5" rowspan="6">
              Ceritified that the particulars given above are true and correct <br>
              <h5>For Tyre Channel Private Limited</h5> <br> <br> <br> <br> <br><br> <br>
              <h5>Authorised signatory</h5>

            </td>
          </tr>
          
          <tr>
            <td class="t3" colspan="4">Bank Name: <?php echo $row6['bank_name']; ?></td>
          </tr>

          <tr>  
            <td class="t3" colspan="4">Bank A/C: <?php echo $row6['acc_no']; ?></td>
          </tr>
          
          <tr>
            <td class="t3" colspan="4">Bank IFSC: <?php echo $row6['IFSC']; ?></td>
          </tr>

          <tr>
            <td class="t1" rowspan="2" colspan="4">
              <h5>Terms & Conditions : </h5><br>
              Make all cheques payable to Tyre Channel Private Limited <br>
              Payment is due within 30 days.

            </td>
            
          </tr>

        </table>

</div>   

  <div>
     <center> <button type="button" id="printMe" style="cursor:pointer; margin-top:50px; padding-bottom:55px; width:15%; height:50px; background-color:aqua;"><h2>Print</h2></button></center>
  </div>

<script type="text/javascript">
$('#printMe').click(function() {
    $('#printMe').hide();

    window.print();

    $('#printMe').show(); 
});
</script>



</body>
</html>