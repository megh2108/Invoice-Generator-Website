<?php
require('session.php');
include 'class.php';
$ob=new DB();
$res=$ob->selectquery("customer_details");
$res1=$ob->selectquery("item");
// $row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Item Details Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">

        <link rel="stylesheet" href="item_details.css">

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    </head>

    <body>
        
        <main class="d-flex flex-nowrap">

        <div class="tilak">
      <?php
  include 'sidebars.php';
?>
</div>

        <div class="container">
            <h3 id="h1">Item Details Form</h3>
            <div class="form">
          <form method="post" action="" class="form1" name="frm">

                    <table class="table table-bordered" id="t1Div">
                        <tr>
                            <td> Customer:</td>
                            <td><select class="sel" name="cust" id="cust">
                                <?php while($row=mysqli_fetch_assoc($res))
                                {?>

                                <option value="<?php echo $row['Mobile']?>"><?php echo $row['dc_name']."-".$row['Mobile']?></option><?php
                                }?>
                            </select></td>
                        </tr>

                        <tr id = "t1">
                            <td>Item:</td>
                            <td>
                            <?php //HTML , CSS, JS, PHP, DATABASE
                            echo '<select class="sel" name="it" id="it_1" class="it">';
                                 $html="";
                                while($row1=mysqli_fetch_assoc($res1))
                                {
                                      //$html.='<option value="'.$row1['item_name'].'">'.$row1['item_name'].'</option>';
                                $html .= "<option value='".$row1['item_name']."'>".$row1['item_name']."</option>";

                            }
                                echo $html;
                                

                                
                            echo '</select>';
                            ?>
                            </td>
                        
                            <td>Quantity:</td>
                            <td><input type="number" name="quantity" id="quantity_1"></td>
                        
                             <td ><button id="addRow" type="button" class="btn btn-info">+</button></td>
                        </tr>
  
                    </table>
                    <table>
                    <tr>
                            <td id="res"><input type="button" value="Reset" class="reset"></td>
                            <td id="sub" colspan="3">
                                <input type="button" value="Submit" class="submit-btn">
                            </td>
                        </tr>
                        </table>
                </form>
            </div>
          <!-- <h1 id="header">Correction</h1> -->
        </div>
    <script type="text/javascript">
        // add row
        var loopInc = 2;
        $("#addRow").click(function() {
            console.log("dropdownhtml");
            var html = '';
            let dropdownhtml="<?php echo $html ?>";
            html+= '<tr class="t3">';
            html += '<td>Item:</td>';
            html += '<td><select class="sel1" name="it" id="it_'+loopInc+'">'; 
            // html += '<td><select name="it" id="it1">'; 
            html += dropdownhtml;
            html += '</select></td>'; 
            html += '<td>Quantity:</td>';            
            html += '<td><input type="number" name="quantity" id="quantity_'+loopInc+'"></td>';

            html += '<td><button id="removeRow" type="button" class="btn btn-danger">-</button></td>';

            html+= '</tr>';


            //$('#t1').after(html);
            $('#t1Div').append(html);
            loopInc++;
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('.t3').remove();
            
        });


        //submit button
         $('.submit-btn').click(function(){
             let mob=$('#cust').val();
             console.log(loopInc);
             var item = [];
             var qua =[];
             for(let i=1;i<loopInc;i++){
                 item[i-1]=$("#it_"+i).val();
                 console.log(item[i-1]);
                 qua[i-1]=$('#quantity_'+i).val();
                 
                }

    // var valid = check();
    //     if(!valid){
    //         return;
    //     }
    //     var i;
    //             console.log(qua);

    //     function check()
    //     {
    //                         console.log(qua);

    //         for(i=1;i<loopInc;i++){
    //         if(qua[i-1]==""){
    //             // frm.quantity.focus();
    //             alert("Please fill the 'Quantity' field");
    //             return false;
    //         }

    //         else if(checkQuant(qua,i))
    //             {
    //                 alert("'Quantity' cannot be zero");
    //                 // frm.quantity.focus();
    //                 return false;
    //             }
        
    //         }

    //         return true;
    //     }

    // //  console.log(i);  
    //     function checkQuant(qua,i)
    //         {
    //             if(qua[i-1]==0){
    //                 return true;
    //             }

    //             return false;
    //         }

            //  qua=$('#quantity').val();
             $.ajax({
                method: "post",
                url: "http://localhost/Invoice/items.php",
                data:{
                    mobile:mob,
                    items:item,
                    quantity:qua
                }
             }).done(function(){
                alert("data inserted successfully");
             });

             $('#quantity_1').val('');
             $('.t3').remove();

         });
         $(document).ready(function(){
                $('.sel').select2();

         });
         $('#addRow').click(function(){
                $('.sel1').select2();

         });


    </script>
    </main>

    </body>
    </html>