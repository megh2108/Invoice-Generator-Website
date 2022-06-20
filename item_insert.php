<?php
 require ('session.php');
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>New</title>
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
          <form method="post"  class="form1">

                    <table class="table table-bordered">
                        <tr>
                            <td>Item Name:</td>
                            <td><input type="text" name="itname" id="itname"></td>
                            
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
        let itname=$('#itname').val();
        let bprice=$('#bprice').val();
        let gst=$('#gst').val();
        
        $.ajax({
            method:"post",
            url:"http://localhost/Invoice/insert_item_details.php",
            data: {
                itname  :itname,
                bprice  :bprice,
                gst   :gst,
               
            }
        }).done(function(){
            alert("data inserted successfully");
        });

        $('#itname').val('');
        $('#bprice').val('');
        $('#gst').val('');

        });
    </script>

    </body>
    </html>