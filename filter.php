<?php


include 'class.php';
$mob=$_POST['Mobile'];
$arr=array('Mobile'=>$mob);
$ob=new DB();
$rel=$ob->selectquery("customer_details",$arr);
$result=mysqli_num_rows($rel);
if($arr['Mobile']<9999999999 && $arr['Mobile']>6000000000)
{

    $html = '';
    $i=1;
    if($result)
    {
    
        while($row=mysqli_fetch_assoc($rel)) {
            $html .= '<tr>';
        
                
                $html .= '<td>'.$i.'</td>';
                $html .= '<td>'.$row['customer_id'].'</td>';
                $html .= '<td>'.$row['oc_name'].'</td>';
                $html .= '<td>'.$row['dc_name'].'</td>';
                $html .= '<td>'.$row['Mobile'].'</td>';
                $html .= '<td>'.$row['bill_add'].'</td>';
                $html .= '<td>'.$row['bstate'].'</td>';
                $html .= '<td>'.$row['ship_add'].'</td>';
                $html .= '<td>'.$row['sstate'].'</td>';
                
                $html .= '<td><button class="btn btn-info">Edit</button></td>';
                $html .= '<td><button class="btn btn-info">Delete</button></td>';
        
                $html .= '</tr>';
                $i++;
        }
        echo $html;
    }
    else echo "No records found";
}
else echo "Enter a valid mobile number";

?>