<?php
include 'class.php';
$obj= new DB();
// $result = $obj -> dbConnect();

$res=$obj->selectquery("customer_details"); 
// $mob="9876543210";

// $arr=array('ph_no'=>$mob);
// $res1=$obj->selectquery("c_details",$arr); 

// $res2=$obj->selectquery("record_details");

?>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Customer Records</title>
</head>

<body>
    <div>
        <?php include 'sidebars.php';
        ?>
    </div>

    
        <div class="container" id="con">
            <header id="h1">
                <h3>Records</h3>
                <input type="text" id="mb"  placeholder="Mobile number">
                <button id="fil" class="btn btn-info">filter</button>
             </header>
                
                <h1 id="h">Customer Details</h1>
                <table id="tab"class="table table-bordered table-hover table-success table-striped">
                <thead class="table-info">
                    
                    <th>Sr_No.</th>    
                    <th>customer Id</th>
                    <th>o_customer</th>
                    <th>D_customer</th>
                    <th>mobile</th>
                    <th>Billing_add</th>
                    <th>Billing_State</th>
                    <th>shipping_add</th>
                    <th>shipping_state</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody id="t1">
                <?php $i=1;
                    
                    while($row=mysqli_fetch_assoc($res))
                    {?>
                        <tr id="<?php echo 't_'.$row['customer_id']?>">
                            <td><?php echo $i?></td>
                            <td><?php echo $row['customer_id']?></td>
                            <td><?php echo $row['oc_name']?></td>
                            <td><?php echo $row['dc_name']?></td>
                            <td><?php echo $row['Mobile']?></td>
                            <td><?php echo $row['bill_add']?></td>
                            <td><?php echo $row['bstate']?></td>
                            <td><?php echo $row['ship_add']?></td>
                            <td><?php echo $row['sstate']?></td>
                            <td><button data-fancybox data-src="#correct" class="edit btn btn-info" value="<?php echo $row['customer_id']?>">Edit</button></td>
                            <td><button class="del btn btn-info" value="<?php echo $row['customer_id']?>">Delete</button></td>
                        </tr><?php
                        $i++;
                    }?>
                </tbody>
                </table>
        </div>

    <div id="correct" style="display:none;">

  </div>
        
        
        <style>
            
            .container
            {
                width:100%;
                height:100vh;
                overflow-y:scroll;
                background: silver;
                
            }
            .table th,td{
                border-radius:5px;
                
            }
            #tab{
                box-shadow:7px 7px #888888;
            }

            #h1{
                margin-top: 20px;
                display:flex;
                align-items:center;
                justify-content:center;
                text-align:center;
                border:1px solid black;
                border-radius:7px;
                box-shadow:5px 5px #888888;
            }
            #mb {
               margin:5px;
               border-radius:7px;
            }
            #fil {
                margin:5px;
                border-radius:7px;
            }
            #h{
                text-align:center;
            }
            body {
                display: flex;
            }
        </style>
        <script src="customer_record.js">
                  
                </script>
    
</body>

</html>