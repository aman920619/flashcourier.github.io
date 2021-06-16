<?php
    session_start();

    include 'connection.php';
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $adm_username=$_POST['adm_username'];
        $adm_password=$_POST['adm_password'];

        $q=mysqli_query($con,"select * from tbl_admin where adm_username='$adm_username' AND adm_password='$adm_password'") or die(mysqli_error($con));

        $check=mysqli_fetch_array($q);
        
        if(isset($check)){
            $_SESSION['id']=$check['adm_id'];
            
            header("Location:index.php");
        }

        else{
            $q1=mysqli_query($con,"select * from tbl_customer where ctr_username='$adm_username' AND ctr_password='$adm_password'") or die(mysqli_error($con));
            $check1=mysqli_fetch_array($q1);
            if(isset($check1)){
                $_SESSION['id']=$check1['cus_id'];
                $_SESSION['id1']=$check1['cus_id'];
                $_SESSION['id2']=$check1['cus_id'];
               
                header("Location:customerUI.php");
            }
         else{
                echo"<script>alert('Invalid crendentials');window.location.href='login.php'</script>";
            }
        }
    }
?>