<?php
require ('session.php');
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Customer Detail Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">

        <link rel="stylesheet" href="customer_form.css">

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
            <h3 id="h1">Customer Details Form</h3>
            <div class="form">
          <form method="post" action="" class="form1" name="frm">

                    <table class="table table-bordered">
                        <tr>
                            <td>Order Customer Name:</td>
                            <td><input type="text" name="ocname" id="ocname" class="validateMe" data-title="CUstomer Name"></td>
                            <td>Delivery Customer Name:</td>
                            <td><input type="text" name="dcname" id="dcname"></td>
                        </tr>
                        
                        <tr>
                            <td>Mobile number:</td>
                            <td><input type="text" name="mobno" id="mobno"></td>
                        </tr>
                        <tr>
                            <td>Billing Address:</td>
                            <td><textarea row="5" type="text" name="baddress" id="badd"></textarea></td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td>
                                <select name="state" id="bstate" class="select">
                                    <option value="Andaman & Nicobar Icelands">Andaman & Nicobar Icelands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra & Nagar Haveli & Daman & Diu">Dadra & Nagar Haveli & Daman & Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                 </select>
                             </td>
                       
                            <td>Pincode:</td>
                            <td><input type="text" name="bcode" id="bcode"></textarea></td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" id="check"> Shipping Address same as Billing address
                            </td>
                        </tr>
                        <tr>
                            <td>Shipping Address:</td>
                            <td><textarea row="5" type="text" name="saddress" id="sadd"></textarea></td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td>
                                <select name="state" id="sstate" class="select1">
                                    <option value="Andaman & Nicobar Icelands">Andaman & Nicobar Icelands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra & Nagar Haveli & Daman & Diu">Dadra & Nagar Haveli & Daman & Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                 </select>
                             </td>
                      
                            <td>Pincode:</td>
                            <td><input type="text" name="scode" id="scode"></textarea></td>
                        </tr>
                     
                        <tr>
                            <td id="res"><input type="reset" value="Reset" class="reset"></td>
                            <td id="sub" colspan="3">
                                <input type="button" value="Submit" class="submit-btn">
                            </td>

                        </tr>
                    </table>
                </form>
            </div>
          <!-- <h1 id="header">Correction</h1> -->
        </div>
    </main>
   
    <script>
        $(document).ready(function(){

            $('#check').click(function(){

                if($('#check').is(":checked")){
                    $('#sadd').val($('#badd').val());
                    $('#sstate').val($('#bstate').val()).change();
                    // $('#sstate').html($('#bstate').html());
                    $('#scode').val($('#bcode').val());
                }

                else{

                    $('#sadd').val("");
                    $('#sstate').val("");
                    $('#scode').val("");

                }

            });
            
        });

        // function validateForm() {
        //     $('.validateMe').each(function() {
        //         if( $(this).val() == "" ) {
        //             alert("Please Insert "+$(this).data('title'));
        //             $(this).focus();
        //             return false;
        //         }
        //     })
        //     return true;
        // }

        $('.submit-btn').click(function(){
        let ocname=$('#ocname').val();
        let dcname=$('#dcname').val();
        let mobno=$('#mobno').val();
        let badd=$('#badd').val();
        let bstate=$('#bstate').val();
        let bcode=$('#bcode').val();
        let sadd=$('#sadd').val();
        let sstate=$('#sstate').val();
        let scode=$('#scode').val();


        var valid = check();
        if(!valid){
            return;
        }

        function check()
        {
            if(ocname==""){
                frm.ocname.focus();
                alert("Please fill the 'Order Customer Name' field");
                return false;
            }

            else if(checkOCname(ocname))
                {
                    alert("Only characters are allowed in the 'Order Customer Name' field");
                    frm.ocname.focus();
                    return false;
                }


            if(dcname==""){
                frm.dcname.focus();
                alert("Please fill the 'Delivery Customer Name' field");
                return false;
            }

            else if(checkDCname(dcname))
                {
                    alert("Only characters are allowed in the 'Delivery Customer Name' field");
                    frm.dcname.focus();
                    return false;
                }


             if(mobno==""){
                 frm.mobno.focus();
                 alert("Please fill the 'Mobile number' field");
                 return false;
            }

            else if(!checkMobNo(mobno))
                {
                    alert("Only 10 digits (Starting from 6-9) are allowed in the 'Mobile number' field ");
                    frm.mobno.focus();
                    return false;
                }

             if(badd==""){
                 frm.baddress.focus();
                 alert("Please fill the 'Billing Address' field");
                 return false;
            }

            else if(checkBAdd(badd))
                {
                    alert("Only characters and digits are allowed in the 'Billing Address' field");
                    frm.baddress.focus();
                    return false;
                }

             if(bcode==""){
                 frm.bcode.focus();
                 alert("Please fill the 'Pincode' field");
                 return false;
            }

            else if(!checkBCode(bcode))
                {
                    alert("Only 6 digits are allowed in the 'Pincode' field");
                    frm.bcode.focus();
                    return false;
                }

             if(sadd==""){
                 frm.saddress.focus();
                 alert("Please fill the 'Shipping Address' field");
                 return false;
            }

            else if(checkSAdd(sadd))
                {
                    alert("Only characters and digits are allowed in the 'Shipping Address' field");
                    frm.saddress.focus();
                    return false;
                }

                if(scode==""){
                 frm.scode.focus();
                 alert("Please fill the 'Pincode' field");
                 return false;
            }

            else if(!checkSCode(scode))
                {
                    alert("Only 6 digits are allowed in the 'Pincode' field");
                    frm.scode.focus();
                    return false;
                }

            else{
                return true;
            }
        }

       
        function checkOCname(ocname)
            {
                return /[\W\d]+/.test(ocname);
            }

        function checkDCname(dcname)
            {
                return /[\W\d]+$/.test(dcname);
            }

        function checkMobNo(mobno)
            {
                return /^[6-9]{1}[\d]{9}$/.test(mobno);
            }

        function checkBAdd(badd)
            {
                return /^[\W\D]$/.test(badd);
            }

        function checkBCode(bcode)
            {
                return /^[\d]{6}$/.test(bcode);
            }

            function checkSAdd(sadd)
            {
                return /^[\W\D]$/.test(sadd);
            }

            function checkSCode(scode)
            {
                return /^[\d]{6}$/.test(scode);
            }


            $.ajax({
                method:"post",
                url:"http://localhost/Invoice/insert_cust_details.php",
                data: {
                    ocname  :ocname,
                    dcname  :dcname,
                    mobno   :mobno,
                    badd    :badd,
                    bstate  :bstate,
                    bcode   :bcode,
                    sadd    :sadd,
                    sstate  :sstate,
                    scode   :scode
                }
            }).done(function(){
                alert("data inserted successfully");
            });
        //     $('#ocname').val('');
        //     $('#dcname').val('');
        //     $('#mobno').val('');
        //     $('#badd').val('');
        //     $('#bstate').val('');
        //     $('#bcode').val('');
        //     $('#sadd').val('');
        //     $('#sstate').val('');
        //     $('#scode').val('');

        $('.reset').click();
        

    });



    $(document).ready(function(){
        $('.select1').select2();
        $('.select').select2();
    });
    </script>

    </body>
    </html>