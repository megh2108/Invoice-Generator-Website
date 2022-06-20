<?php
include 'class.php';
$val=$_POST['value'];
$aray=array('customer_id'=>$val);
$ob=new DB();
$res=$ob->selectquery("customer_details",$aray);
$row=mysqli_fetch_assoc($res);

$html='';
$html.='<form method="post" class="form1" name="frm">';
$html.=            '<table class="table table-bordered border border-2 border-warning table-hover table-success table-striped" >';
$html.=                '<tr>';
$html.=                    '<td>Order Customer Name:</td>';
$html.=                    '<td><input type="text" name="ocname" id="ocname" ></td>';
$html.=                    '<td>Delivery Customer Name:</td>';
$html.=                    '<td><input type="text" name="dcname" id="dcname"></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td>Mobile number:</td>';
$html.=                    '<td><input type="text" name="mobno" id="mobno"></td>';
$html.=                    '<td></td>';
$html.=                    '<td></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td>Billing Address:</td>';
$html.=                    '<td><textarea row="5" type="text" name="baddress" id="badd"></textarea></td>';
$html.=                    '<td></td>';
$html.=                    '<td></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td>State:</td>';
$html.=                    '<td>';
$html.=                       '<select name="state" id="bstate" class="select">';
$html.=                            '<option value="Andaman & Nicobar Icelands">Andaman & Nicobar Icelands</option>';
$html.=                            '<option value="Andhra Pradesh">Andhra Pradesh</option>';
$html.=                            '<option value="Arunachal Pradesh">Arunachal Pradesh</option>';
$html.=                            '<option value="Assam">Assam</option>';
$html.=                            '<option value="Bihar">Bihar</option>';
$html.=                            '<option value="Chandigarh">Chandigarh</option>';
$html.=                            '<option value="Chhattisgarh">Chhattisgarh</option>';
$html.=                            '<option value="Dadra & Nagar Haveli & Daman & Diu">Dadra & Nagar Haveli & Daman & Diu</option>';
$html.=                            '<option value="Delhi">Delhi</option>';
$html.=                            '<option value="Goa">Goa</option>';
$html.=                            '<option value="Gujarat">Gujarat</option>';
$html.=                            '<option value="Haryana">Haryana</option>';
$html.=                            '<option value="Himachal Pradesh">Himachal Pradesh</option>';
$html.=                            '<option value="Jammu & Kashmir">Jammu & Kashmir</option>';
$html.=                           '<option value="Jharkhand">Jharkhand</option>';
$html.=                            '<option value="Karnataka">Karnataka</option>';
$html.=                            '<option value="Kerala">Kerala</option>';
$html.=                            '<option value="Ladakh">Ladakh</option>';
$html.=                            '<option value="Lakshadweep">Lakshadweep</option>';
$html.=                            '<option value="Madhya Pradesh">Madhya Pradesh</option>';
$html.=                            '<option value="Maharashtra">Maharashtra</option>';
$html.=                            '<option value="Manipur">Manipur</option>';
$html.=                            '<option value="Meghalaya">Meghalaya</option>';
$html.=                            '<option value="Mizoram">Mizoram</option>';
$html.=                           '<option value="Nagaland">Nagaland</option>';
$html.=                            '<option value="Odisha">Odisha</option>';
$html.=                            '<option value="Puducherry">Puducherry</option>';
$html.=                            '<option value="Punjab">Punjab</option>';
$html.=                            '<option value="Rajasthan">Rajasthan</option>';
$html.=                            '<option value="Sikkim">Sikkim</option>';
$html.=                            '<option value="Tamil Nadu">Tamil Nadu</option>';
$html.=                            '<option value="Telangana">Telangana</option>';
$html.=                            '<option value="Tripura">Tripura</option>';
$html.=                            '<option value="Uttar Pradesh">Uttar Pradesh</option>';
$html.=                            '<option value="Uttarakhand">Uttarakhand</option>';
$html.=                            '<option value="West Bengal">West Bengal</option>';
$html.=                        '</select>';
$html.=                    '</td>';
$html.=                    '<td>Pincode:</td>';
$html.=                    '<td><input type="text" name="bcode" id="bcode"></textarea></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td>';
$html.=                        '<input type="checkbox" id="check" style="cursor:pointer;"> Shipping Address same as Billing address';
$html.=                    '</td>';
$html.=                    '<td></td>';
$html.=                    '<td></td>';
$html.=                    '<td></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td>Shipping Address:</td>';
$html.=                    '<td><textarea row="5" type="text" name="saddress" id="sadd"></textarea></td>';
$html.=                    '<td></td>';
$html.=                    '<td></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td>State:</td>';
$html.=                    '<td>';
$html.=                        '<select name="state" id="sstate" class="select1">';
$html.=                            '<option value="Andaman & Nicobar Icelands">Andaman & Nicobar Icelands</option>';
$html.=                           '<option value="Andhra Pradesh">Andhra Pradesh</option>';
$html.=                            '<option value="Arunachal Pradesh">Arunachal Pradesh</option>';
$html.=                            '<option value="Assam">Assam</option>';
$html.=                            '<option value="Bihar">Bihar</option>';
$html.=                            '<option value="Chandigarh">Chandigarh</option>';
$html.=                            '<option value="Chhattisgarh">Chhattisgarh</option>';
$html.=                            '<option value="Dadra & Nagar Haveli & Daman & Diu">Dadra & Nagar Haveli & Daman & Diu</option>';
$html.=                            '<option value="Delhi">Delhi</option>';
$html.=                            '<option value="Goa">Goa</option>';
$html.=                            '<option value="Gujarat">Gujarat</option>';
$html.=                            '<option value="Haryana">Haryana</option>';
$html.=                            '<option value="Himachal Pradesh">Himachal Pradesh</option>';
$html.=                            '<option value="Jammu & Kashmir">Jammu & Kashmir</option>';
$html.=                            '<option value="Jharkhand">Jharkhand</option>';
$html.=                            '<option value="Karnataka">Karnataka</option>';
$html.=                            '<option value="Kerala">Kerala</option>';
$html.=                            '<option value="Ladakh">Ladakh</option>';
$html.=                            '<option value="Lakshadweep">Lakshadweep</option>';
$html.=                            '<option value="Madhya Pradesh">Madhya Pradesh</option>';
$html.=                            '<option value="Maharashtra">Maharashtra</option>';
$html.=                            '<option value="Manipur">Manipur</option>';
$html.=                            '<option value="Meghalaya">Meghalaya</option>';
$html.=                            '<option value="Mizoram">Mizoram</option>';
$html.=                            '<option value="Nagaland">Nagaland</option>';
$html.=                            '<option value="Odisha">Odisha</option>';
$html.=                            '<option value="Puducherry">Puducherry</option>';
$html.=                            '<option value="Punjab">Punjab</option>';
$html.=                            '<option value="Rajasthan">Rajasthan</option>';
$html.=                            '<option value="Sikkim">Sikkim</option>';
$html.=                            '<option value="Tamil Nadu">Tamil Nadu</option>';
$html.=                            '<option value="Telangana">Telangana</option>';
$html.=                            '<option value="Tripura">Tripura</option>';
$html.=                            '<option value="Uttar Pradesh">Uttar Pradesh</option>';
$html.=                            '<option value="Uttarakhand">Uttarakhand</option>';
$html.=                            '<option value="West Bengal">West Bengal</option>';
$html.=                        '</select>';
$html.=                    '</td>';
$html.=                    '<td>Pincode:</td>';
$html.=                   '<td><input type="text" name="acode" id="scode"></textarea></td>';
$html.=                '</tr>';
$html.=                '<tr>';
$html.=                    '<td id="res"><input type="reset" value="Reset" class="reset"></td>';
$html.=                    '<td id="sub" colspan="3">';
$html.=                        '<input type="button" value="Submit" id="sub" class="submit-btn">';
$html.=                    '</td>';
$html.=                '</tr>';
$html.=            '</table>';
$html.=            '</form>';
echo $html;
?>

<script>

    let ocname="<?php echo $row['oc_name']?>";
    let dcname="<?php echo $row['dc_name']?>";
    let mobno="<?php echo $row['Mobile']?>";
    let badd="<?php echo $row['bill_add']?>";
    let bstate="<?php echo $row['bstate']?>";
    let bcode="<?php echo $row['bcode']?>";
    let sadd="<?php echo $row['ship_add']?>";
    let sstate="<?php echo $row['sstate']?>";
    let scode="<?php echo $row['scode']?>";
    $('#ocname').val(ocname);
    $('#dcname').val(dcname);
    $('#mobno').val(mobno);
    $('#badd').val(badd);
    $('#bstate').val(bstate).change();
    $('#bcode').val(bcode);
    $('#sadd').val(sadd);
    $('#sstate').val(sstate).change();
    $('#scode').val(scode);
    $('.select1').select2();
    $('.select').select2();


    $('#sub').click(function() {
    var custid = value;
    console.log(custid);

    let ocname = $('#ocname').val();
    let dcname = $('#dcname').val();
    let mobno = $('#mobno').val();
    let badd = $('#badd').val();
    let bstate = $('#bstate').val();
    let bcode = $('#bcode').val();
    let sadd = $('#sadd').val();
    let sstate = $('#sstate').val();
    let scode = $('#scode').val();

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
                return /[\W\d]+/.test(dcname);
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
        method: "post",
        url: "http://localhost/Invoice/correct_cust_details.php",
        data: {
            custid: custid,
            ocname: ocname,
            dcname: dcname,
            mobno: mobno,
            badd: badd,
            bstate: bstate,
            bcode: bcode,
            sadd: sadd,
            sstate: sstate,
            scode: scode
        }
    }).done(function() {
        alert("data updated successfully");
    });
    $('.reset').click();



});


</script>