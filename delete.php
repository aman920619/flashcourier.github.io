<?php 
    session_start();
    include 'connection.php';

      $id=$_GET['id'];
      $del=mysqli_query($con,"delete from tbl_cus_parcel where cus_id='$id'");
      $del1=mysqli_query($con,"delete from tbl_parcel where cus_id='$id'");
      if($del||$del1){
        header("location:parcel_list.php");
        exit;
      }
      else{
          echo "Error deleting record";
      }
?>