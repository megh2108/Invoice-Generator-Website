<?php
 require ('session.php');
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Item Insert Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">

        <link rel="stylesheet" href="item_insert.css">

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
            <h3 id="h1">Item Insert Form</h3>
        <div class="form">
          <form method="post" class="form1" name="frm">

                    <table class="table table-bordered">
                        <tr>
                            <td>Item Name:</td>
                            <td><input type="text" name="itname" id="itname"></td>
                            
                        </tr>
                        <tr>
                            <td>HSN Code:</td>
                            <td><input type="text" name="hsn" id="hsn"></td>
                            
                        </tr>
                        
                        <tr>
                            <td>Base Price</td>
                            <td><input type="text" name="bprice" id="bprice"></td>
                        </tr>
                        <tr>
                            <td> GST</td>
                            <td><input type="text" name="gst" id="gst"></td>
                        </tr>
                       
                          
                     
                        <tr >
                            <td id="res"><input type="reset" value="Reset" class="reset"></td>
                            <td id="sub" >
                                <input type="button" value="Submit" class="submit-btn">
                            </td>

                        </tr>
                    </table>
                </form>
            </div>
          <!-- <h1 id="header">Correction</h1> -->
        </div>
    </main>
   
    <script type="text/javascript">
       
        $('.submit-btn').click(function(){
            console.log("hi");
        let itname=$('#itname').val();
        let bprice=$('#bprice').val();
        let gst=$('#gst').val();
        let hsn=$('#hsn').val();

        var valid = check();
        if(!valid){
            return;
        }

        function check()
        {
            if(itname==""){
                frm.itname.focus();
                alert("Please fill the 'Item Name' field");
                return false;
            }

            else if(checkITname(itname))
                {
                    alert("Only characters are allowed in the 'Item Name' field");
                    frm.itname.focus();
                    return false;
                }


            if(bprice==""){
                frm.bprice.focus();
                alert("Please fill the 'Base Price' field");
                return false;
            }

           else if(bprice<=0){
                    alert("Price cannot be less than or equal to zero");
                    return false;
                }

            else if(!checkBPrice(bprice))
                {
                    alert("Only digits and dots are allowed in the 'Base Price' field");
                    frm.bprice.focus();
                    return false;
                }


             if(gst==""){
                 frm.gst.focus();
                 alert("Please fill the 'GST' field");
                 return false;
            }

            else if(gst>30 || gst<0){
                    alert("Maximum allowed gst is 30% and Minimum allowed gst is 0%");
                    return false;
                }

            else if(!checkGST(gst))
                {
                    alert("Only digits are allowed in the 'GST' field ");
                    frm.gst.focus();
                    return false;
                }

                else{
                    return true;
                }
            }

            function checkITname(itname)
            {
                return /[\W\d]+$/.test(itname);
            }

        function checkBPrice(bprice)
            {
                return /[\d]$/.test(bprice);
            }

        function checkGST(gst)
            {
                return /[\d]$/.test(gst);
            }
        
        $.ajax({
            method:"post",
            url:"http://localhost/Invoice/insert_item_details.php",
            data: {
                itname  :itname,
                bprice  :bprice,
                gst   :gst,
                hsn: hsn
            }
        }).done(function(){
            alert("data inserted successfully");
        });

        // $('#itname').val('');
        // $('#bprice').val('');
        // $('#gst').val('');

        $('.reset').click();

        });
    </script>

    </body>
    </html>