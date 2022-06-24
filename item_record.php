<?php

require 'session.php';

include 'class.php';
$obj= new DB();
$res=$obj->selectquery("item"); 

?>
    

<html>
<head>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    
    <title>Item Records</title>

    <style>
            .container
            {
                background: silver;
                overflow-y: scroll;
                height: 100vh;
                width: 100%;
            }
            .table th,td{
                border-radius:5px;
                
            }
            #tab{
                box-shadow:7px 7px #888888;
            }

            #h1{
                margin-top: 20px;
                display:block;
                text-align:center;
                border:1px solid black;
                border-radius:7px;
                box-shadow:5px 5px #888888;
            }
            #h{
                text-align:center
            }
            body {
                display: flex;
            }
        </style>

</head>

<body>
<div>
    <?php 
        include 'sidebars.php';
      ?>
</div>

    
    <div class="container" id="con">
            <header id="h1"><h3>Records</h3></header>
        <h1 id="h">Item Records</h1>
        <table id="tab"class="table table-bordered table-hover table-success table-striped">
            <thead class="table-info">
                <th class="serial">serial</th>
                <th>Item Name</th>
                <th>HSN Code</th>
                <th>Base Price</th>
                <th>GST</th>
                <th>Total Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
               <?php $i=1;
              

                 while($row=mysqli_fetch_assoc($res))
                {?>
                    <tr  id="<?php echo 't_'.$row['item_name']?>">
                        <td><?php echo $i?></td>
                        <td><?php echo $row['item_name']?></td>
                        <td><?php echo $row['HSN_Code']?></td>
                        <td><?php echo $row['base_price']?></td>
                        <td><?php echo $row['GST']?></td>
                        <td><?php echo $row['total_price']?></td>
                        <!-- <td><button  data-fancybox data-src="#content" id="btn" class="btn btn-info" value="">view</button></td>
                        <td><a href="#">print</a></td> -->
                        <td><button data-fancybox data-src="#correct" class="edit-btn btn btn-info" value="<?php echo $row['item_name']?>">Edit</button></td>
                        <td><button class="del-btn btn btn-info" value="<?php echo $row['item_name']?>">Delete</button></td>
                    </tr><?php
                   
                    $i++;
                }?>
            </tbody>
            </table>
        
    </div>

    <div  id="correct" style="display:none;">
        
            </div>

<script>
          
        $('.del-btn').click(function(){

                let val = $(this).val();
                console.log(val);

                $.ajax(
                {
                    method: "POST",
                    url:"http://localhost/Invoice/delete_item_record.php",
                    
                    data:
                    {
                        value: val 
                    }
                }).done(function(response){

                    
                    alert("Data deleted successfully");
                    $('#t_'+val).html("");
                 });

         });

         $('.edit-btn').click(function(){

            value = $(this).val();
            console.log(value);

            $.ajax({
                method:"post",
                url:"http://localhost/Invoice/correction_item.php",
                data:{
                    value: value
                }



            }).done(function(msg){
                $('#correct').html(msg);
            });

        });


           
        
</script>

</body>

</html>