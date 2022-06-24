<?php
include 'class.php';

$val= $_POST['value'];

$ob = new DB();

$arr= array('item_name'=>$val);

$res = $ob->selectquery('item',$arr);
$row = mysqli_fetch_assoc($res);

$html='';

$html.= '<form method="post"  class="form1">';
$html.= '                    <table class="table table-bordered border border-2 border-warning table-hover table-success table-striped">';
$html.= '                        <tr>';
$html.= '                            <td>Item Name:</td>';
$html.= '                            <td><input type="text" name="itname" id="itname"></td>';
                            
$html.= '                        </tr>';

$html.= '                        <tr>';
$html.= '                            <td>HSN Code:</td>';
$html.= '                            <td><input type="text" name="hsn" id="hsn"></td>';
                            
$html.= '                        </tr>';
                        
$html.= '                        <tr>';
$html.= '                            <td>Base Price</td>';
$html.= '                            <td><input type="text" name="bprice" id="bprice"></td>';
$html.= '                        </tr>';
$html.= '                        <tr>';
$html.= '                            <td> GST</td>';
$html.= '                            <td><input type="text" name="gst" id="gst"></td>';
$html.= '                        </tr>';
                       
                          
                     
$html.= '                        <tr >';
$html.= '                            <td id="res"><input type="reset" value="Reset" class="reset"></td>';
$html.= '                            <td id="sub" >';
$html.= '                                <input type="button" value="Submit" class="submit-btn" id="sub">';
$html.= '                            </td>';

$html.= '                        </tr>';
$html.= '                    </table>';
$html.= '                </form>';

echo $html;
?>

<script>

        $('#itname').val("<?php echo $row['item_name'] ?>");
        $('#hsn').val("<?php echo $row['HSN_Code'] ?>");
        $('#bprice').val("<?php echo $row['base_price'] ?>");
        $('#gst').val("<?php echo $row['GST'] ?>");

        $('#sub').click(function(){
            var item = value;
        

            let itname=$('#itname').val();
            let hsn=$('#hsn').val();
            let bprice=$('#bprice').val();
            let gst=$('#gst').val();
            
                    $.ajax({
                        method:"post",
                        url:"http://localhost/Invoice/correct_item_details.php",
                        data: {
                            item  :item,
                            itname  :itname,
                            bprice  :bprice,
                            gst   :gst,
                            hsn:hsn
                            
                        }
                    }).done(function(){
                        alert("data updated successfully");
                    });

            $('.reset').click();

        });

</script>