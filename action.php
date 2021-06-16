<?php 
    
    include 'connection.php';

    if(isset($_POST['status'])){
        $status=htmlspecialchars(mysqli_real_escape_string($con,$_POST['status']));
        $cus_id=htmlspecialchars(mysqli_real_escape_string($con,$_POST['cus_id']));
        
        $sys=mysqli_query($con,"update tbl_parcel set status='$status' where cus_id='$cus_id'");
       
        $sys1=mysqli_query($con,"update tbl_cus_parcel set status='$status' where cus_id='$cus_id'");
        header("Location:parcel_list.php");
    }

   
?>